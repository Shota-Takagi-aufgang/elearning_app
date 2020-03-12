@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin | questions</h1>
    <a class="btn" href="{{ route('question.create', ['id' => $topic->id]) }}"><span style="color:blue"> Add a question</span></a>
    <a class="btn" href="{{ route('topics.list') }}"><span style="color:blue"> Back</span></a>
        <table class="table">
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Actions</th>
                    <th>Question-details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                <tr>
                    <td>{{ $question->question }}</td>
                    <td>
                        <a class="btn btn-warning" href="">Edit</a>
                        <a class="btn btn-danger" href="">Delete</a></td>   
                    <td>
                        <div class="dropdown open">
                            <button class="btn btn-secondary dropdown-toggle"
                                    type="button" id="dropdownMenu4" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                              Details
                            </button>
                            <div class="dropdown-menu">
                              <span class="dropdown-item-text">Question Titles</span>
                              <a class="dropdown-item" href="#!">Answer</a>
                              <a class="dropdown-item" href="#!">Question</a>
                            </div>
                          </div>
                    </td>
                </tr>           
                @endforeach
            </tbody>
        </table>
    </div>
@endsection