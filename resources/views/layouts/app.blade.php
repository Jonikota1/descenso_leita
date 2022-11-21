<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style>

    .menu{
        margin:auto;
    }
    .dropdown-li {
        position: relative;
    }

    .dropdown-li:hover .dropdown {
        display: block;
        opacity: 1;
    }

    .dropdown {
        background-color: rgba(0,255,0,0.2);
        margin: 0;
        padding: 0;
        width: 100%;
        position: absolute;
        left: 0;
        top: 100%;
        opacity: 0;
        display: none;;
        z-index: 1000;
        height: 120px;
    }

    .dropdown li {
        list-style: none;
        padding:10px;
    }

    .dropdown li a{
        text-decoration:none;
        color:white;
    }
    </style>

</head>
<body class="bg-secondary-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="p-8 text-white" style="background-color:darkgreen;">
            <div class="container mx-auto flex justify-around items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ __("Inicio") }}
                    </a>
                </div >

                    <div style="width:200px;">
                        <ul class="menu">
                        <li class="dropdown-li"><a href="#" class="text-lg font-semibold text-gray-100 no-underline">{{ __("Laciana")}}</a>

                            <ul class="dropdown">
                                <li><a href="{{ url('/pistas') }}">Nuestras Pistas</a></li>
                                <li><a href="{{ url('/interes') }}">Puntos de interés</a></li>
                                <li><a href="{{ route('alojamientos.index') }}">Alojamientos</a></li>
                            </ul>
                        </li>
                        </ul>
                    </div>

                    <div>
                        <a href="{{ route('bicis.index') }}"  class="text-lg font-semibold text-gray-100 no-underline">
                        {{ __("Catálogo")}}
                    </div>


                    <div >
                        <a href="{{ route('contactanos.index') }}"  class="text-lg font-semibold text-gray-100 no-underline">
                            {{ __("Contacto") }}
                        </a>
                    </div>

                    <div >
                        <a href="/cart"  class="text-lg font-semibold text-gray-100 no-underline">
                            <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                        </a>
                </div>


                <nav class="space-x-4 text-gray-300 text-sm sm:text-base" style="display: flex; flex-direction: column; align-items: center;">
                    @guest
                        <a class="no-underline hover:underline" style="margin-bottom:8px;" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        @yield('content')
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>
