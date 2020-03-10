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
        <h1 class="ml-2 mt-2">Mechanical</h1>
        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <h3 class="card-header">Featured</h3>
                <div class="card-body">
                  <h4 class="card-title">Special title treatment</h4>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#!" class="btn btn-primary">Study</a>
                </div>
            </div>
        </div>
    </div>
@endsection