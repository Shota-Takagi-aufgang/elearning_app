@extends('layouts.app')

@section('content')
    
    <form action="{{ route('answer.save', ['topic_id' => $topic_id, 'lesson_id' => $lesson_id]) }}" method="POST">
        @csrf
        @if ($questions->nextPageUrl() == null)
            <input type="hidden" name="nextPageUrl" id="nextPageUrl" value="{{ route('result', ['topic_id' => $topic_id ,'lesson_id' => $lesson_id]) }}">
        @else
            <input type="hidden" name="nextPageUrl" id="nextPageUrl" value="{{ $questions->nextPageUrl() }}">
        @endif
    @foreach ($questions as $key => $question)
    <input type="hidden" name="question{{ $key+1 }}Id" id="question{{ $key }}" value="{{ $question->id }}">
    <div id="app" class="row mt-2 justify-content-center">
        <div class="col-sm-6 col-lg-4" >
            <div class="card">
                <div class="card-body">
                <p class="badge badge-dark">Question Number  {{ $key+1 }}</p>
                    <br>
                <h3 class="card-title">{{ $question->question }}</h3>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="btn btn-primary btn-lg btn-block text-center col-sm-10">{{ $question->option1 }}</div>
                            <div class="col-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question{{ $key+1 }}Answer" id="option1" value="option1">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="btn btn-primary btn-lg btn-block text-center col-sm-10">{{ $question->option2 }}</div>
                            <div class="col-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question{{ $key+1 }}Answer" id="option2" value="option2">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="btn btn-primary btn-lg btn-block text-center col-sm-10">{{ $question->option3 }}</div>
                            <div class="col-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question{{ $key+1 }}Answer" id="option3" value="option3">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="btn btn-primary btn-lg btn-block text-center col-sm-10">{{ $question->option4 }}</div>
                            <div class="col-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question{{ $key+1 }}Answer" id="option4" value="option4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row justify-content-center mt-4">
        <button type="submit">Next Page</button>
        <div>{{ $questions->nextPageUrl() }}</div>
    </div>
    </form>
@endsection
