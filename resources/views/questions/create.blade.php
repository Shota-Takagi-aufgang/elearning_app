@extends('layouts.app')

@section('content')
        <div>
            <div class="container">
                <div class="row">
                    <h2 class="col-sm-8">{{ $topic->title }}</h2>
                    <p class="col-sm-4">Create Questions</p>
                </div>
            </div>
            <form action="{{ route('question.store', ['id' => $topic->id]) }}" method="POST">
                @csrf

                <div id="app" class="row mt-2 justify-content-center">
                    <div class="col-sm-8 col-lg-6" >
                        <div class="card">
                            <div class="card-body">
                            <h3 class="card-title">
                                <label class="badge badge-dark" for="">Question 1</label>
                                <input type="text" class="form-control" name="title1">
                            </h3>
                                <hr>
                                <div class="container">
                                    <div class="row mt-1">
                                        <div class="bg-primary btn-lg btn-block text-center col-sm-9">
                                            <input type="text" class="form-control" name="quest1_opt1">
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="correct_answer1" id="quest1_opt1" value="quest1_opt1" checked>
                                                <label class="form-check-label" for="category">Correct</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="bg-primary btn-lg btn-block text-center col-sm-9">
                                            <input type="text" class="form-control" name="quest1_opt2">
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="correct_answer1" id="quest1_opt2" value="quest1_opt2" checked>
                                                <label class="form-check-label" for="category">Correct</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="bg-primary btn-lg btn-block text-center col-sm-9">
                                            <input type="text" class="form-control" name="quest1_opt3">
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="correct_answer1" id="quest1_opt3" value="quest1_opt3" checked>
                                                <label class="form-check-label" for="category">Correct</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="bg-primary btn-lg btn-block text-center col-sm-9">
                                            <input type="text" class="form-control" name="quest1_opt4">
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="correct_answer1" id="quest1_opt4" value="quest1_opt4" checked>
                                                <label class="form-check-label" for="category">Correct</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="app" class="row mt-2 justify-content-center">
                    <div class="col-sm-8 col-lg-6" >
                        <div class="card">
                            <div class="card-body">
                            <h3 class="card-title">
                                <label class="badge badge-dark" for="">Quest 2</label>
                                <input type="text" class="form-control" name="title2">
                            </h3>
                                <hr>
                                <div class="container">
                                    <div class="row mt-1">
                                        <div class="bg-primary btn-lg btn-block text-center col-sm-9">
                                            <input type="text" class="form-control" name="quest2_opt1">
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="correct_answer2" id="quest2_opt1" value="quest2_opt1" checked>
                                                <label class="form-check-label" for="category">Correct</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="bg-primary btn-lg btn-block text-center col-sm-9">
                                            <input type="text" class="form-control" name="quest2_opt2">
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="correct_answer2" id="quest2_opt2" value="quest2_opt2" checked>
                                                <label class="form-check-label" for="category">Correct</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="bg-primary btn-lg btn-block text-center col-sm-9">
                                            <input type="text" class="form-control" name="quest2_opt3">
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="correct_answer2" id="quest2_opt3" value="quest2_opt3" checked>
                                                <label class="form-check-label" for="category">Correct</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="bg-primary btn-lg btn-block text-center col-sm-9">
                                            <input type="text" class="form-control" name="quest2_opt4">
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="correct_answer2" id="quest2_opt4" value="quest2_opt4" checked>
                                                <label class="form-check-label" for="category">Correct</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="app" class="row mt-2 justify-content-center">
                    <div class="col-sm-8 col-lg-6" >
                        <div class="card">
                            <div class="card-body">
                            <h3 class="card-title">
                                <label class="badge badge-dark" for="">Quest 3</label>
                                <input type="text" class="form-control" name="title3">
                            </h3>
                                <hr>
                                <div class="container">
                                    <div class="row mt-1">
                                        <div class="bg-primary btn-lg btn-block text-center col-sm-9">
                                            <input type="text" class="form-control" name="quest3_opt1">
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="correct_answer3" id="quest3_opt1" value="quest3_opt1" checked>
                                                <label class="form-check-label" for="category">Correct</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="bg-primary btn-lg btn-block text-center col-sm-9">
                                            <input type="text" class="form-control" name="quest3_opt2">
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="correct_answer3" id="quest3_opt2" value="quest3_opt2" checked>
                                                <label class="form-check-label" for="category">Correct</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="bg-primary btn-lg btn-block text-center col-sm-9">
                                            <input type="text" class="form-control" name="quest3_opt3">
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="correct_answer3" id="quest3_opt3" value="quest3_opt3" checked>
                                                <label class="form-check-label" for="category">Correct</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="bg-primary btn-lg btn-block text-center col-sm-9">
                                            <input type="text" class="form-control" name="quest3_opt4">
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="correct_answer3" id="quest3_opt4" value="quest3_opt4" checked>
                                                <label class="form-check-label" for="category">Correct</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-sm-9 col-lg-9"></div>
                        <div class="col-sm-2 col-lg-2">
                            <button type="submit" class="btn btn-primary">Create</button>
                            <a class="btn btn-primary" href="{{ route('questions.list', compact('questions', 'topic')) }}">Back</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="py-4"></div>
@endsection