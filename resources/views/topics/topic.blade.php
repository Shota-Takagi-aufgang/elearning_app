@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <ul class="nav nav-pills nav-warning float-right justify-content-end">
            <li class="nav-item mx-1">
                <a class="nav-link active" href="">All</a>
            </li>
            <li class="nav-item mx-1">
                <a class="nav-link active" href="">Learned</a>
            </li>
            <li class="nav-item mx-1">
                <a class="nav-link active" href="">Not learned</a>
            </li>
        </ul>
    <h1 class="ml-2 mt-4">{{ $category }}</h1>
        <ul class="list-group">
            <div class="row">
            @foreach ($topics as $topic)
                <div class="col-sm-12 col-lg-6">
                    <div class="card mt-3">
                        <h3 class="card-header">{{ $topic->title }}</h3>
                        <div class="card-body">
                        <p class="card-text">{{ $topic->description }}</p>
                        <a href="#!" class="btn btn-primary">Study</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </ul>
        <div class="d-flex justify-content-center">
            {{ $topics->links() }}
        </div>
    </div>
    </div>
@endsection