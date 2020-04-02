@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="card-header">Edit Profile</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('home.update') }}">
                        @method('PATCH')
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control {{ $errors->has('first_name')  ? 'is-invalid' : '' }}" name="first_name" value="{{ auth()->user()->first_name }}">
                                <span class="invalid-feedback">
                                <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">Last Name</label>
                            
                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ auth()->user()->last_name }}">
                                <span class="invalid-feedback">
                                <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="new_password">
                                <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="new_password_confirmation">
                            </div>
                        </div> 

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button href="/home" class="btn btn-primary">
                                    {{ __('save') }}
                                </button>
                                <button class="btn btn-dark" href="/home">
                                    {{ __('back') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
