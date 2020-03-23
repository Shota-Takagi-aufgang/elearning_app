<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Fascades\Hash;
use App\Activity;
use App\Relationship;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Activities that logged-in user made (Take lesson and Follow other users)
        $activities = Activity::where('user_id', auth()->user()->id)->get();

        // Relationships that other users followed current logged-in user.
        $followedUsers = Relationship::where('followed_id', auth()->user()->id)->get();
        
        foreach ($followedUsers as $followedUser) {
            $activities->push($followedUser->activity);
        }

        return view('home',compact('activities'));
    }

    public function update(Request $request) {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'new_password' => 'required|max:255|min:6|confirmed'
        ]);
        if (!empty($request->new_password)) {
            // validaate new_password
            $request->validate([
                'new_password' => 'required|max:255|min:8|confirmed'
            ]);

            // after validating, update the password
            auth()->user()->update([
                "password" => Hash::make( $request->new_password) // Hash::nake() is for encryptiong the password
            ]);
        }
        // Do this if it is valid
        auth()->user()->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name
        ]);
        return redirect('home');
    }
}
