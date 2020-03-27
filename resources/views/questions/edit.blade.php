@extends('layouts.app')

@section('content')
    <div class="container">
    <h2>Edit a Question</h2>
      <form action="{{ route('question.update', ['id' => $topic->id, 'question_id' => $question->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="">Question</label>
            <input type="text" class="form-control" name="question" value="{{ $question->question }}">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">Option 1</div>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="option1" value="{{ $question->option1 }}">
                </div>
                <div class="col-sm-1">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="correct_answer" id="option1" value="option1" {{ $question->correct_answer == "option1" ? "checked" : ""}}>
                        <label class="form-check-label" for="category">
                        Correct
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-2">Option 2</div>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="option2" value="{{ $question->option2 }}">
                </div>
                <div class="col-sm-1">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="correct_answer" id="option2" value="option2" {{ $question->correct_answer == "option2" ? "checked" : ""}}>
                        <label class="form-check-label" for="category">
                        Correct
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-2">Option 3</div>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="option3" value="{{ $question->option3 }}">
                </div>
                <div class="col-sm-1">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="correct_answer" id="option3" value="option3" {{ $question->correct_answer == "option3" ? "checked" : ""}}>
                        <label class="form-check-label" for="category">
                        Correct
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-2">Option 4</div>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="option4" value="{{ $question->option4 }}">
                </div>
                <div class="col-sm-1">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="correct_answer" id="option4" value="option4" {{ $question->correct_answer == "option4" ? "checked" : ""}}>
                        <label class="form-check-label" for="category">
                        Correct
                        </label>
                    </div>
                </div>
            </div>
        <button type="submit" class="btn btn-primary">Save question</button>
        <div><a class="btn-primary" href="{{ route('questions.list', compact('questions', 'topic')) }}">Back</a></div>
      </form>
    </div>
@endsection