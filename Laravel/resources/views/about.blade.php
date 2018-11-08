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
                <a class="nav-item nav-link active" href="#">About <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{ url('news') }}">News</a>
                <a class="nav-item nav-link" href="{{ url('contact') }}">Contact</a>
                <a class="nav-item nav-link" href="{{ url('register') }}">Register</a>
            </div>
        </div>
    </nav>
@endsection

@section('content')
<h1 class="h1 text-center mt-5">About Us</h1>
<img src="{{ url('/images/TheTeam.jpg')  }}" class="text-center mx-auto d-block img-fluid" alt="Responsive image">
<p class="text-center d-block mx-auto w-50">Real Madrid Club de Fútbol commonly known as Real Madrid, is a professional football club based in Madrid, Spain.<br>
    Founded on 6 March 1902 as the Madrid Football Club, the club has traditionally worn a white home kit since inception. The word real is Spanish for "royal" and was bestowed to the club by King Alfonso XIII in 1920 together with the royal crown in the emblem. The team has played its home matches in the 81,044-capacity Santiago Bernabéu Stadium in downtown Madrid since 1947. Unlike most European sporting entities, Real Madrid's members (socios) have owned and operated the club throughout its history.
    The club was estimated to be worth €3.47 billion ($4.1 billion) in 2018, and in the 2016–17 season it was the second highest-earning football club in the world, with an annual revenue of €674.6 million. The club is one of the most widely supported teams in the world. Real Madrid is one of three founding members of La Liga that have never been relegated from the top division since its inception in 1929, along with Athletic Bilbao and Barcelona. The club holds many long-standing rivalries, most notably El Clásico with Barcelona and El Derbi with Atlético Madrid.
    Real Madrid established itself as a major force in both Spanish and European football during the 1950s, winning five consecutive European Cups and reaching the final seven times. This success was replicated in the league, where the club won five times in the space of seven years. This team, which consisted of players such as Alfredo Di Stéfano, Ferenc Puskás, Francisco Gento and Raymond Kopa, is considered by some in the sport to be the greatest team of all time. In domestic football, the club has won 64 trophies; a record 33 La Liga titles, 19 Copa del Rey, 10 Supercopa de España, a Copa Eva Duarte, and a Copa de la Liga. In European and worldwide competitions, the club has won a record 25 trophies; a record 13 European Cup/UEFA Champions League titles, two UEFA Cups and four UEFA Super Cups. In international football, they have achieved a record six club world championships.
    Real Madrid was recognised as the FIFA Club of the 20th Century on 11 December 2000, and received the FIFA Centennial Order of Merit on 20 May 2004. The club was also awarded Best European Club of the 20th Century by the IFFHS on 11 May 2010. In June 2017, the team succeeded in becoming the first club to win back to back Champions Leagues, then made it three in a row in May 2018, extending their lead atop the UEFA club rankings.</p>
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