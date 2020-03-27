<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Relationship;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userlist() {
        $users = User::where('id','!=', auth()->user()->id)->get();

        return view('users.list', compact('users'));
    }

    public function show($id) {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    public function follow($followed_id)
    {
        $follower = auth()->user();
        $follower->followedUsers()->attach($followed_id);

        $relationship = Relationship::where('followed_id', $followed_id)->where('follower_id', $follower->id)->first();
        
        $relationship->activity()->create([
            'user_id' => auth()->user()->id
        ]);

        return back();
    }

    public function unfollow($followed_id)
    {
        $follower = auth()->user();
        $follower->followedUsers()->detach($followed_id);

        return back();
    }

    // public function followinglist($id) {
    //     $users = User::where('user_id', $user_id)->get();

    //     return view('users.followinglist', compact('users'));
    // }

    // public function followerlist($id) {
    //     $users = User::where('user_id', $user_id)->get();

    //     return view('users.followerslist', compact('users'));
    // }

}
