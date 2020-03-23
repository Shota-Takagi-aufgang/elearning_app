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
        $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'option1' => ['required', 'string', 'max:50'],
            'option2' => ['required', 'string', 'max:50'],
            'option3' => ['required', 'string', 'max:50'],
            'option4' => ['required', 'string', 'max:50'],
            'correct_answer' => ['required', 'string', 'max:50'],
        ]);

        $question = Question::create([
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

    public function edit($id) {
        $topic = Topic::find($id);
        $question = Question::find(1);
        return view('questions.edit', compact('topic','question'));
    }

    public function delete($id, $question_id) {
        $question = Question::find($question_id);
        $question->delete();
        return redirect()->route('questions.list', ['id' => $id]);
    }

    public function update(Request $request, $id, $question_id) {
        $topic = Topic::find($id);
        $question = Question::find($question_id);
        $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'option1' => ['required', 'string', 'max:50'],
            'option2' => ['required', 'string', 'max:50'],
            'option3' => ['required', 'string', 'max:50'],
            'option4' => ['required', 'string', 'max:50'],
            'correct_answer' => ['required', 'string', 'max:50'],
        ]);
        
        $question->update([
            'question' => $request->question,
            'option1' => $request->option1,
            'option2' => $request->option2,
            'option3' => $request->option3,
            'option4' => $request->option4,
            'correct_answer' => $request->correct_answer
        ]);

        return redirect()->route('questions.list', ['id' => $id]);
    }
}
