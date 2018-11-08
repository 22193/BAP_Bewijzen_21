@extends('layouts.master')

@section('navigation')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('/images/NavLogo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{ url('about') }}">About</a>
                <a class="nav-item nav-link" href="{{ url('news') }}">News</a>
                <a class="nav-item nav-link" href="{{ url('contact') }}">Contact</a>
                <a class="nav-item nav-link" href="{{ url('register') }}">Register</a>
            </div>
        </div>
    </nav>
    @endsection

@section('header')
    <img src="{{ url('/images/banner.jpg')  }}" class="w-100 img-fluid" alt="Responsive image">
@endsection

@section('content')
    <div class="container mx-auto">
        <h1 class="h1 text-center mt-5">News</h1>
        <div class="row mt-5">
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('/images/Ramos.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Ramos up to third in club. Read more at News<a href="{{ url('news') }}"> Click Here</a> to read more...</p>
                    </div>
                </div>
                </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('/images/match.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Huesca - Real Madrid to be played on Sunday 9th December at<a href="{{ url('news') }}"> Click Here</a> to read more...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('/images/Javi.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Vinicius Jr. and Javi Sánchez make Champions League debuts<a href="{{ url('news') }}"> Click Here</a> to read more...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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