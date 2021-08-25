<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> <!-- site name linke => will go home if click -->

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> <!-- navbar buttom if sclae broser size or using phone -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown ml-1 mr-1">
                            <div class="custom-control custom-switch">
                                <input class="custom-control-input text-danger bg-dark" id="customSwitchDarkMode" type="checkbox" onclick="DarkMode()">
                                <label id="dark" class="custom-control-label" for="customSwitchDarkMode">Dark-Mode</label>
                            </div>
                        </li> |
                        <li class="nav-item dropdown ml-1 mr-1">

                            <div class="custom-control custom-switch">
                                <input class="custom-control-input text-danger bg-dark" id="customSwitcltr" type="checkbox" onclick="Rtl()">
                                <label id="rtl" class="custom-control-label" for="customSwitcltr">direction</label>
                            </div>


                        </li>

                    </ul>
                    <!--end Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-danger m-1"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-danger m-1"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                        @else
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('user') }}">
                                        {{ __('Profile') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                                        <!--end Right Side Of Navbar -->

                </div>
            </div><!-- container -->

        </nav> <!-- navbar -->

        <main class="py-4">
            @yield('content')
        </main>



    </div>

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
   <script src="{{ asset('js/script.js') }}" defer></script>

   <footer class="py-5 bg-light text-center">

<h1 class="text-center "> All <i class="fa fa-copyright" aria-hidden="true"></i> Copyright Reserved {{ date('Y') }}</h1>
<h3 class='text-center' > Powered By Burst Team </h3>

<h3 class="text-left ml-5">Contact Us :</h3>
 <div class="text-left">
     <ul >
        <li> <i class="fab fa-whatsapp text-success"></i> : +201067095607</li>
        <li> <i class="fab fa-facebook text-primary"></i> : <a href="https://facebook.com/sabry.dawood.79">Sabry Dawood</a></li>
        <li> <i class="fab fa-telegram text-primary"></i> : <a href="https://t.me/joinchat/XpmcLN5SPc9kODI0">Join Telegram Team Group</a></li>
    </ul>
</div>
   </footer>

</body>

</html>
