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
            'title1' => ['required', 'string', 'max:255'],
            'quest1_opt1' => ['required', 'string', 'max:50'],
            'quest1_opt2' => ['required', 'string', 'max:50'],
            'quest1_opt3' => ['required', 'string', 'max:50'],
            'quest1_opt4' => ['required', 'string', 'max:50'],
            'correct_answer1' => ['required', 'string', 'max:50'],

            'title2' => ['required', 'string', 'max:255'],
            'quest2_opt1' => ['required', 'string', 'max:50'],
            'quest2_opt2' => ['required', 'string', 'max:50'],
            'quest2_opt3' => ['required', 'string', 'max:50'],
            'quest2_opt4' => ['required', 'string', 'max:50'],
            'correct_answer2' => ['required', 'string', 'max:50'],

            'title3' => ['required', 'string', 'max:255'],
            'quest3_opt1' => ['required', 'string', 'max:50'],
            'quest3_opt2' => ['required', 'string', 'max:50'],
            'quest3_opt3' => ['required', 'string', 'max:50'],
            'quest3_opt4' => ['required', 'string', 'max:50'],
            'correct_answer3' => ['required', 'string', 'max:50'],
        ]);

        $question1 = Question::create([
            'topic_id' => $id,
            'question' => $request->title1,
            'option1' => $request->quest1_opt1,
            'option2' => $request->quest1_opt2,
            'option3' => $request->quest1_opt3,
            'option4' => $request->quest1_opt4,
            'correct_answer' => $request->correct_answer1
        ]);

        $question2 = Question::create([
            'topic_id' => $id,
            'question' => $request->title2,
            'option1' => $request->quest2_opt1,
            'option2' => $request->quest2_opt2,
            'option3' => $request->quest2_opt3,
            'option4' => $request->quest2_opt4,
            'correct_answer' => $request->correct_answer2
        ]);

        $question3 = Question::create([
            'topic_id' => $id,
            'question' => $request->title3,
            'option1' => $request->quest3_opt1,
            'option2' => $request->quest3_opt2,
            'option3' => $request->quest3_opt3,
            'option4' => $request->quest3_opt4,
            'correct_answer' => $request->correct_answer3
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
