<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>

        <!--styles-->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    </head>
    <body class="antialiased">
        <header>
            <nav>
                <div class="wrapper">
                    <div class="logo"><h5>HOWFAR</h5></div>
                <div class="nav-tabs">
                    <ul>
                        <li class="active"><a href="#">Areas</a></li>
                        <li><a href="#">Reports</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Deals</a></li>
                        <li><a href="#"><i class="fas fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="nav-account">
                    <ul>
                        @guest
                        <li><a href=""><i class="fas fa-user-plus"></i> Sign Up </a> </li>
                        <li><a href=""><i class="fas fa-sign-in-alt"></i> Sign In </a></li>
                        @endguest
                        @auth
                        <li><a href="#" class="username">Hi {{ Auth::user()->name }}</a></li>
                        <li class="nav-btn"><a href="#"><i class="fas fa-power-off"></i> Log Off</a></li>
                        @endauth
                    </ul>
                </div>
                </div>

            </nav>

            <div class="hero-call">
                <h2>We are <span> big</span> on<br><span>Transparency</span></h2>
                <p>Growing better cities by involving the residents.</p>
                <button>Learn more</button>
            </div>

            <div class="hero-img">
                <img src="{{ asset('storage/hero.svg') }}" alt="">
            </div>

        </header>
        <section class="latest-news">

        </section>

    </body>
</html>
