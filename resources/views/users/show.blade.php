@extends('layouts.app')

@section('content')
<div class="my-4"></div>

<div class="container home">
    <div class="row">  
        <div class="col-sm-12 col-lg-3">
            <div class="card">
                    <img class="d-block mt-3 mx-auto" src="" alt="User">
                    <div class="card-body mx-auto">
                    <h4 class="card-title">{{ $user->first_name }} {{ $user->last_name }}</h4>
                        @if (auth()->user()->isFollowing($user->id))
                            <a href="{{ route('user.unfollow',['followed_id' =>$user->id]) }}" class="btn btn-danger">Unfollow</a>
                        @else
                            <a href="{{ route('user.follow',['followed_id' =>$user->id]) }}" class="btn btn-primary">Follow</a>
                        @endif
                    </div>
                    <div class="border-bottom"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <div class="text-primary mx-2">{{ $user->followedUsers()->count() }}</div>
                            <div>following</div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="text-primary">{{ $user->followers()->count() }}</div>
                            <div>followers</div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom"></div>
                <div class="card text-center">
                    <div class="my-2">3</div>
                    <div class="mb-2">
                        learned words
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-8">
            <div class="card-deck">
                <div class="card mt-3" >
                    <div class="alert alert-dark" role="alert">
                        <div class="card-body">
                            <h4 class="text-center">Activities</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection