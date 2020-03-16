<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class AnswerController extends Controller
{
    public function start() {
        $answer = Answer::find($question_id);
        return view('answers.', compact('question'));
    }
}
