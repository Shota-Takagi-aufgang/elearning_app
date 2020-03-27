@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h2>Create a Question</h2>
            <form action="{{ route('question.store', ['id' => $topic->id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Question</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">Option 1</div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="option1">
                        </div>
                        <div class="col-sm-1">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="correct_answer" id="option1" value="option1" checked>
                                <label class="form-check-label" for="category">
                                  Correct
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-2">Option 2</div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="option2">
                        </div>
                        <div class="col-sm-1">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="correct_answer" id="option2" value="option2" checked>
                                <label class="form-check-label" for="category">
                                  Correct
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-2">Option 3</div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="option3">
                        </div>
                        <div class="col-sm-1">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="correct_answer" id="option3" value="option3" checked>
                                <label class="form-check-label" for="category">
                                  Correct
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-2">Option 4</div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="option4">
                        </div>
                        <div class="col-sm-1">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="correct_answer" id="option4" value="option4" checked>
                                <label class="form-check-label" for="category">
                                  Correct
                                </label>
                            </div>
                        </div>
                    </div>
                <button type="submit" class="btn btn-primary">Create</button>
            <div><a class="btn-primary" href=""> Back</a></div>
            </form>
        </div>
    </div>
@endsection