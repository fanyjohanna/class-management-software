<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
        }
        p {font-size: 16px;}
        .margin {margin-bottom: 45px;}
        .bg-1 { 
            background-color: #1abc9c; /* Green */
            color: #ffffff;
        }
        .bg-2 { 
            background-color: #474e5d; /* Dark Blue */
            color: #ffffff;
        }
        .bg-3 { 
            background-color: #ffffff; /* White */
            color: #555555;
        }
        .bg-4 { 
            background-color: #2f2f2f; /* Black Gray */
            color: #fff;
        }
        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
        }
        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            letter-spacing: 5px;
        }
        .navbar-nav  li a:hover {
            color: #1abc9c !important;
        }
    </style>
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/home">Class Management Software</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/home">Home</a></li>
        <li><a href="/classrooms">Class</a></li>
        <li><a href="/students">Student</a></li>
        <li><a href="/teachers">Teacher</a></li>
        <li class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
             @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
             @endif
            </li>
             @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                 {{ Auth::user()->name }} <span class="caret"></span>
                </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                       {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                   </form>
                </div>
            </li>
            @endguest
        <li>
    </div>
  </div>
</nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
