@extends('layouts.app')

@section('content')
<div class="container">
<div class="card mx-auto text-center">
    <div class="card-body">
    <img class="d-block mt-3 mx-auto" src="{{ asset('images/'. auth()->user()->avatar) }}" alt="">
        <h4 class="card-title mx-auto">Change Avater</h4>
    <form action="{{ route('uplaodAvater') }}" method="POST" enctype="multipart/form-data">
          @method('PATCH')
          @csrf
            <h6 class="card-subtitle mt-2 text-muted"></h6>
            <p class="card-text mt-1">
                <input id="avater" type="file" name="avatar" value="Choose File">
            </p>
        <button  class="btn btn-primary mt-2"  type="submit" class="card-link">Save</button>
        <button class="btn btn-primary mt-2"  class="card-link">Back</button>
        </form>
    </div>
  </div>
</div>
@endsection