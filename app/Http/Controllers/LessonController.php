<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;

class LessonController extends Controller
{
    public function lesson($topic_id) {
        $lesson = Lesson::create(['topic_id' => $topic_id, 'user_id' => auth()->user()->id]);

        return redirect()->route('quiz', ['topic_id' => $topic_id, 'lesson_id' => $lesson->id]);
    }

    public function result($topic_id, $lesson_id) {
        $lesson = Lesson::find($lesson_id);
        $correct_numbers = 0;
        foreach ($lesson->answers as $answer) {
            if ($answer->user_answer == $answer->question->correct_answer) {
                $correct_numbers++;
            }
        }
        return view('answers.lessons', compact('topic_id','lesson_id', 'lesson', 'correct_numbers'));
    }

    public function activity(Lesson $lesson)
    {
        return view('/home', compact('lesson'));
    }
}
