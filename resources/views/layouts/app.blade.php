
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SportsData') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="" style="background-color:#EDEFF4">
    <div id="">
             {{-- navbar --}}
             <div>
                <nav  id="topbar" class="navbar navbar-dark bg-dark navbar-expand-lg justify-content-between">
                    <div class="">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link text-light" href="#">HELP <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-light" href="#">NEWS</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-light" href="#">CONTACTS</a>
                            </li>
                          </ul>
                    </div>             
                            <div class="form-inline">
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                            <a href="{{ route('welcome') }}" class="text-sm text-gray-700 underline">Home</a>
                                        @else
                                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                    
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                   
                  
                  </nav>
                </div>
                <div >
                    <nav id="middlebar" class="navbar navbar-light bg-light justify-content-between">
                        <a class="navbar-brand text-light">LOGO IMAGE</a>
                        <form class="form-inline">
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                      </nav>
                </div>
                <div>
                    <nav id="bottombar" class="navbar navbar-expand-lg navbar-dark bg-dark">
                      
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link mr-5" href="{{ Route('welcome') }}">HOME <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mr-5" href="{{ Route('myline') }}">MY LINES</a>
                              </li>
                            <li class="nav-item">
                              <a class="nav-link mr-5" href="{{ Route('myscore') }}">MY SCORES</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mr-5" href="{{  Route('myfinal') }}">MY FINALS</a>
                            </li>
                          </ul>
                        </div>
                      </nav>
                </div>
                {{-- navbar --}}
                
    </div>
    @yield('content')
</body>
</html>
