@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/home.css">
@endsection

@section('content')
<div class="my-4"></div>

<div class="container home">
    <div class="row">
        <div class="col-sm-4 col-lg-4">
            <div class="card">
                    <img class="d-block mt-3 mx-auto" src="images/ミッキー.jpeg" alt="User">
                    <div class="card-body mx-auto">
                    <h4 class="card-title">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h4>
                    <a href="" class="btn btn-primary d-block">Change Avater</a>
                    <div class="my-1"></div>
                    <a href="" class="btn btn-primary d-block">Edit Profile</a>
                    </div>
                    <div class="border-bottom"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <a href="" class="text-primary mx-2">{{ auth()->user()->followedUsers()->count() }}</a>
                            <a>following</a>
                        </div>
                        <div class="col-sm-6 text-center">
                            <a href="" class="text-primary">{{ auth()->user()->followers()->count() }}</a>
                            <a>followers</a>
                        </div>
                    </div>
                </div>
                <div class="border-bottom"></div>
                <div class="card text-center">
                    <div class="my-2">3</div>
                    <div class="mb-2">
                        Words learned
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-sm-8 col-lg-8">
            <div class="card-deck">
                <div class="card ml-3 mt-3">
                    <div class="card-body">
                        <title>ACTIVITY FEED</title>
                        <div>
                            @foreach ($activities as $activity)
                                @if ($activity->notifiable_type == "App\Lesson")
                                    <h4>You learned {{ $activity->notifiable->correct_numbers }} of {{ count($activity->notifiable->answers) }} in {{ $activity->notifiable->topic->title }}</h4>
                                @else
                                    <h4>{{ $activity->notifiable->follower->first_name }} 
                                        follow
                                        @if ($activity->notifiable->followed == auth()->user() )
                                            You
                                        @else
                                            {{ $activity->notifiable->followed->first_name }} 
                                            {{ $activity->notifiable->followed->last_name}}
                                        @endif
                                    </h4>
                                @endif
                                    <small class="text-muted">{{ $activity->notifiable->created_at->diffforHumans() }} </small>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
