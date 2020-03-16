@extends('layouts.app')

@section('content')
    <h1><span style="color:red">Editing Topic #id</span></h1>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Title:</label>
                    <input type="text" class="form-control" name="title" value="">
                </div>
                <div class="form-group">
                    <label for="">Description:</label>
                    <input type="text" class="form-control" name="description" value="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

@endsection