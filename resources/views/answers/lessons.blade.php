@extends('layouts.app')

@section('content')
    <div class="containter">
        <div class="row">
            <div class="col-sm-8 text-center">{{ $lesson->topic->title }}</div>
            <div class="col-sm-2">Result: {{ $correct_numbers }} of  {{ count($lesson->answers) }}</div>
        </div>
        
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Your Answer</th>
                        <th>Correct Answer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lesson->answers as $answer)
                    <tr>
                        <td>{{ $answer->question->question }}</td>
                        <td>
                            @if ($answer->user_answer == "option1")
                                {{ $answer->question->option1 }}
                            @elseif ($answer->user_answer == "option2")
                                {{ $answer->question->option2 }}
                            @elseif ($answer->user_answer == "option3")
                                {{ $answer->question->option3 }}
                            @else 
                                {{ $answer->question->option4 }}   
                            @endif
                        </td>
                        <td>
                            @if ($answer->user_answer == $answer->question->correct_answer)
                                <div class="text-center">✅</div>
                            @else
                                <div class="text-center">❌</div> 
                            @endif
                        </td>
                    </tr>           
                    @endforeach
                </tbody>
            </table>
            <div class="row justify-content-center">
            <a class="btn-primary" href="{{ route('topics.list')}}"> Back</a>
            </div>
        </div>
    </div>
@endsection