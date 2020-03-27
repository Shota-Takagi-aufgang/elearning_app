@extends('layouts.app')

@section('content')
<div class='my-4'></div>
    <div class="container">
        <div class="card-deck">
            <div class="card">
              <div class="card-body">
                <h1 class="card-title">All Member</h1>
                <p class="card-text">
                        <ul class="list-group">
                            @foreach ($users as $user)
                                <li class="list-group-item d-flex justify-content-between align-items-center text-primary">
                                    <img class="float-right w-auto h-auto" src="" style="max-height:80px" alt="PHOTO">
                                    <a href="{{ route('users.show',['id' => $user->id]) }}" class="btn btn-praimary">{{ $user->first_name }} {{ $user->last_name }}</a>
                                    @if (auth()->user()->isFollowing($user->id))
                                        <a href="{{ route('user.unfollow',['followed_id' =>$user->id]) }}" class="btn btn-danger">Unfollow</a>
                                    @else
                                        <a href="{{ route('user.follow',['followed_id' =>$user->id]) }}" class="btn btn-primary">Follow</a>
                                    @endif
                                </li>
                            @endforeach
                    </ul>
                </p>
              </div>
            </div>
        </div>
        
    </div>
@endsection