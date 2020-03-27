<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\Question;
use App\Answer;
use App\Lesson;

class AnswerController extends Controller
{
    public function quiz($topic_id, $lesson_id) {
        $questions = Question::where('topic_id', $topic_id)->paginate(3);

        return view('answers.answer', compact('questions', 'topic_id', 'lesson_id'));
    }

    public function saveAnswers(Request $request, $topic_id, $lesson_id) 
    {

        $answer1 = Answer::create([
            'user_id' => auth()->user()->id,
            'question_id' => $request->question1Id,
            'user_answer' => $request->question1Answer,
            'lesson_id' => $lesson_id
        ]);

        $answer2 = Answer::create([
            'user_id' => auth()->user()->id,
            'question_id' => $request->question2Id,
            'user_answer' => $request->question2Answer,
            'lesson_id' => $lesson_id
        ]);

        $answer3 = Answer::create([
            'user_id' => auth()->user()->id,
            'question_id' => $request->question3Id,
            'user_answer' => $request->question3Answer,
            'lesson_id' => $lesson_id
        ]);
        // Results is saved
        
        if ($request->lastPage == "true") {
            $lesson = Lesson::find($lesson_id);

            $lesson->activity()->create([
                'user_id' => auth()->user()->id
            ]);
        }
        
        return redirect($request->nextPageUrl);
    }
}