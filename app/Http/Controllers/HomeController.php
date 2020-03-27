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
}
