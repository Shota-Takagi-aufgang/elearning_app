@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/home.css">
@endsection

@section('content')
<div class="my-4"></div>

<div class="container home">
    <div class="row">
        
        <div class="col-sm-12 col-lg-3">
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
                            <a href="" class="text-primary mx-2">2</a>
                            <a>following</a>
                        </div>
                        <div class="col-sm-6 text-center">
                            <a href="" class="text-primary">6</a>
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

        <div class="col-sm-12 col-lg-8">
            <div class="card-deck">
                <div class="card ml-3 mt-3">
                    <div class="card-body">
                        <title>ACTIVITY FEED</title>
                        {{-- <form action="/post" method="POST">
                            @csrf
                            <div class="form-group">
                                <textarea name="content" class="form-control" rows="3" placeholder="Share your thoughts..."></textarea>
                            </div>
                            <div class="text-right">
                            <button  class="btn btn-primary" type="submit">Post</button>
                            </div>
                        </form> --}}
                        <div>Nothing to show</div>
                    </div>
                </div>
            </div>

            {{-- <div class="card-deck">
                <div class="card mt-3" >
                    <div class="alert alert-dark" role="alert">
                        <div class="card-body">
                            <h4 class="text-center">Blogs</h4>
                                @foreach ($posts as $post)
                                    <div class="card" >  
                                        <div class="card-header">
                                            <div class="row float-right">
                                               <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                    <form action="{{ route('post.delete', ['id' => $post->id]) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf                                
                                                           <button type="submit" class="btn btn-danger">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                    </form>
                                            </div>
                                        </div>

                                        <div class="card-body ">
                                            <p class="card-text">
                                                {{ $post->content }}
                                            </p>
                                                <small class="text-muted">--Posted {{ $post->created_at->diffforHumans() }} </small>
                                        </div>
                                    </div>
                                    <div class="my-3"></div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

    
    <!-- END slider -->
@endsection
