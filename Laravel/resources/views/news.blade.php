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
                <a class="nav-item nav-link" href="{{ url('about') }}">About</a>
                <a class="nav-item nav-link active" href="#">News <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{ url('contact') }}">Contact</a>
                <a class="nav-item nav-link" href="{{ url('register') }}">Register</a>
            </div>
        </div>
    </nav>
@endsection

@section('content')
<h1 class="h1 text-center mt-5">News</h1>
<div class="card-group mt-5">
    <div class="card">
        <img class="card-img-top" src="{{ url('/images/Ramos.jpg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Ramos up to third in club</h5>
            <p class="card-text">Sergio Ramos started in the win over Viktoria Plzen, meaning he has now won 72 European Cup games. This puts him third on the all-time list of madridistas in the competition. At the end of the game he spoke to the press: "It is important to keep winning. There was a lot of tension but we're on the right path now and must not stray".
                <br><br>"I have a few muscle pains over the last few weeks and today was a good chance to give others some minutes. I had a great time with my teammates on the bench".</p>
            <p class="card-text"><small class="text-muted">Last updated 28 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="{{ url('/images/match.jpg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Huesca - Real Madrid to be played</h5>
            <p class="card-text">LaLiga have announced the schedules for match day 15 in LaLiga. Real Madrid will visit Huesca on Sunday 9th December at 4:15pm CET. In addition, the Copa del Rey last-32 return leg fixtures have been revealed. On Thursday 6th December, the Whites host Melilla in the return leg at the Bernabéu (4:15pm CET).</p>
            <p class="card-text"><small class="text-muted">Last updated 2 hours ago</small></p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="{{ url('/images/Javi.jpg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Vinicius Jr. and Javi Sánchez make debuts</h5>
            <p class="card-text">Vinicius Jr. was handed his first minutes of Champions League action in the side's visit to Viktoria Plzen. The 18-year-old Brazilian made his debut in the continental competition when he replaced Karim Benzema in the 62nd minute. Just minutes after taking to the pitch, Vinicius Jr. was at the centre of the move that saw the team score their last goal of the night. He led a counter-attack which culminated in him laying on a goal for Toni Kroos. His first five outings for the team have yielded a goal and two assists.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 days ago</small></p>
        </div>
    </div>
</div>
<div class="card-group mt-5">
    <div class="card">
        <img class="card-img-top" src="{{ url('/images/Flor.jpg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Casemiro: "It was an important result in terms of boosting our confidence"</h5>
            <p class="card-text">After putting Viktoria Plzen to the sword in their own backyard, Real Madrid's Casemiro spoke to the media and had the following to say: "It was an important night, particularly because we scored five and kept a clean sheet. Tonight's result helps us to build our confidence. In our previous games the ball hasn't wanted to go in and today we had the chances to have even scored more. We've now got to turn our attentions to the Celta game, which also promises to be a really tough one".</p>
            <p class="card-text"><small class="text-muted">Last updated 5 days ago</small></p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="{{ url('/images/benzema1.jpg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Benzema: Stunning brace sees him pass 200 goal mark for Real Madrid</h5>
            <p class="card-text">Following his brace against Viktoria Plzen on Champions League match day four, Karim Benzema has passed the 201-goal mark for Real Madrid. The French striker is the seventh player in the club’s history to do so. Cristiano Ronaldo (451), Raúl (323), Di Stéfano (308), Santillana (290), Puska (242) and Hugo Sánchez (208) have all managed this incredible feat.</p>
            <p class="card-text"><small class="text-muted">Last updated 1 week ago</small></p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="{{ url('/images/Solari.jpg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Solari: “The players showed their talent and there were some sensational goals"</h5>
            <p class="card-text">Solari spoke to the press at the Doosan Arena after Real Madrid beat Viktoria Plzen: “We were driven from start to finish. The players showed goal scoring abilities. There were some sensational goals out there. Champions League games don't end 0-5 without some serious character being shown. I am thrilled with that game, but it is all down to the players”</p>
            <p class="card-text"><small class="text-muted">Last updated 3 weeks ago</small></p>
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