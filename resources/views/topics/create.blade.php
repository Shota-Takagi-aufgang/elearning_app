@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h2>Create a Topic</h2>
            <form action="/admin/topics/new" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="description">
                </div>

                 {{-- Check Box of Categories --}}
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category" id="category" value="Mechanical Engineering" checked>
                    <label class="form-check-label" for="category">
                      Mechanical Engineering
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category" id="category" value="Material Engineering" checked>
                    <label class="form-check-label" for="category">
                      Material Engineering
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category" id="category" value="Control Engineering" checked>
                    <label class="form-check-label" for="category">
                      Control Engineering
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category" id="category" value="Fluiddynamics" checked>
                    <label class="form-check-label" for="category">
                      Fluid Dynamics
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category" id="category" value="Thermodynamics" checked>
                    <label class="form-check-label" for="category">
                      Thermodynamics
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            <div><a class="btn-primary" href=""> Back</a></div>
            </form>
        </div>
    </div>
@endsection