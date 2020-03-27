@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Admin | Topics</h1>
    <div><a class="btn" href="{{ route('topic.create') }}"><span style="color:blue"> Add a Topic</span></a></div>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($topics as $topic)
                <tr>
                    <td>{{ $topic->title }}</td>
                    <td>{{ $topic->description }}</td>   
                    <td>{{ $topic->category }}</td>   
                    <td>
                        <a class="btn btn-info" href="{{ route('questions.list', ['id' =>$topic->id]) }}">Add Queiston</a>
                        <a class="btn btn-warning" href="{{ route('topic.edit', ['id' =>$topic->id]) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('topic.delete', ['id' =>$topic->id]) }}">Delete</a>
                    </td>   
                </tr>           
                @endforeach
            </tbody>
        </table>
    </div>
@endsection