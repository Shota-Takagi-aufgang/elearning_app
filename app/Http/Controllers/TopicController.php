<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;

class TopicController extends Controller
{
    public function create() {
        return view('topics.create');
    }

    public function store(Request $request) 
    {
        $topic = Topic::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category
        ]);
        return redirect()->route('topics.list');
    }
    
    public function list() {
        $topics = Topic::all();
        return view('topics.list', compact('topics'));
    }    




}
