<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Topic;

class QuestionController extends Controller
{
    public function create($id) {
        $topic = Topic::find($id);
        return view('questions.create', compact('topic'));
    }

    public function store($id, Request $request) 
    {
        $question = Question::create([
            'topic_id' => $id,
            'question' => $request->title,
            'option1' => $request->option1,
            'option2' => $request->option2,
            'option3' => $request->option3,
            'option4' => $request->option4,
            'correct_answer' => $request->correct_answer
        ]);
        return redirect()->route('questions.list', ['id' => $id]);
    }
    
    public function list($id) {
        $questions = Question::all();
        $topic = Topic::find($id);
        return view('questions.list', compact('questions', 'topic'));
    }    

    // public function edit($id) {
    //     $question = question::find($id);
    //     return view('questions.edit', compact('question'));
    // }

    // public function delete($id) {
    //     $question = question::find($id);
    //     $question->delete();
    //     return redirect()->route('questions.list');
    // }

    // public function update(Request $request ,$id) {
    //     $question = question::find($id);
    //     $question->title = $request->title;
    //     $question->description = $request->description;
    //     $question->category = $request->category;
    //     $question->save();
    //     return redirect()->route('questions.list');
    // }
}
