<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="color-fondo min-h-screen leading-none">
    <div id="app">
        <div class="bg-yellow-400">
            <section class="wrapper py-0">
                <nav class="flex items-center justify-between py-0 navbar-sombreado">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Tutoriales</a></li>
                        <li><a href="#">Cursos</a></li>
                        <li><a href="#">Preguntame algo</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                    
                    <div>
                        <div class="icon">
                            <img src="" alt="">
                        </div>
                        <a class="no-underline hover:underline
                      " href="">Brandon Roa</a>
                    </div>
                </nav>
            </section>
    
        </div>
        <nav class="bg-gray-800 py-2">
            <div class="container mx-auto md:px-0">
                <div class="flex items-center justify-around py-4">
                    <a class="text-4xl text-white type-text" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                
                    <nav class="flex-1 text-right">

                        @guest
                            @if (Route::has('login'))
                                    
                                <a class="text-white no-underline hover:underline hover:text-black " href="{{ route('login') }}">{{ __('Login') }}</a>
                                   
                            @endif
                                
                            @if (Route::has('register'))
                                  
                                <a class="text-white no-underline hover:underline hover:text-black" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    
                            @endif
                        @else
                                
                            <span class="text-gray-400 text-sm pr-4">{{ Auth::user()->name }}</span>
                            <a class="no-underline hover:underline text-gray-400 text-sm p-3" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                             
                               
                        @endguest
                    </nav>
                 
                  
                </div>

                
            </div>
        </nav>
        
        @yield('fondo')

        <main class="py-0">
            @yield('content')
        </main>
    </div>
</body>
</html>
