@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection

@section('content')
  <div class="intro-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                <h1>Do you have what it takes to become an <strong>Engineer</strong>?</h1>
                <h1>Find out now!</h1>
            </div>
        </div>
    </div>
  </div>
@endsection