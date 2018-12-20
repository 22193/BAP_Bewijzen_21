@extends('layouts.master')
@section('navigation')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('/images/NavLogo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{ url('/') }}">Home</a>
                <a class="nav-item nav-link" href="{{ url('about') }}">About </a>
                <a class="nav-item nav-link" href="{{ url('news') }}">News</a>
                <a class="nav-item nav-link" href="{{ url('contact') }}">Contact</a>
                <a class="nav-item nav-link" href="{{ url('register') }}">Register</a>
                <a class="nav-item nav-link active" href="#">gallery<span class="sr-only">(current)</span></a>

            </div>
        </div>
    </nav>
@endsection

@section('content')

        <h1>Photo Gallery Form</h1>
        <form action="{{ route('gallery.save_photo') }}" method="post" enctype="multipart/form-data" class="col-md-6">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" value="{{ old('title') }}" name="title" placeholder="title" class="form-control">
                @if($errors->has('title'))
                    <p class="text-danger">{{ $errors->first('title') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" name="description" placeholder="description" class="form-control">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <p class="text-danger">{{ $errors->first('description') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="photo">Foto</label>
                <input type="file" name="photo">
                @if($errors->has('photo'))
                    <p class="text-danger">{{ $errors->first('photo') }}</p>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Send</button>

        </form>

@endsection

@section('footer')

    <div class="row mt-5">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title text-center">Learn more About Us</h5>
                    <p class="card-text text-center">Press the button to Learn more About Real Madrid</p>
                    <a href="{{ url('about') }}" class="btn btn-primary center-block">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title text-center">News?</h5>
                    <p class="card-text text-center">Press the button to follow the latest News!</p>
                    <a href="{{ url('news') }}" class="btn btn-primary center-block">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title text-center">Contact Us</h5>
                    <p class="card-text text-center">Press the button to contact us</p>
                    <a href="{{ url('contact') }}" class="btn btn-primary center-block">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title text-center">Register</h5>
                    <p class="card-text text-center">Press the button to Register</p>
                    <a href="{{ url('register') }}" class="btn btn-primary center-block">Register Now</a>
                </div>
            </div>
        </div>
    </div>
@endsection