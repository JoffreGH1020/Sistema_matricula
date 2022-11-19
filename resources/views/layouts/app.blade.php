<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md" style="background-color: #4281c6;">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ url('/') }}">
                    <b>{{ config('app.name', 'Laravel') }}</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto navbar-dark">
                        @auth
                        @if (session('tipo')=="administrador")
                        <div class="dropdown container-fluid">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #f0f1f1;">
                                <b>Registrar</b>
                            </button>
                            <ul class="dropdown-menu" style="background-color: #d7d9da;">
                                <li class="nav-item">
                                    <a class="dropdown-item" href="/ver/form/facultad">Registrar Facultad</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="/ver/form/carrera">Registrar Carreras</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="/ver/form/cursos">Registrar Cursos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="/ver/form/mallas">Registrar Malla</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="/ver/form/programas">Registrar Programa</a>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown container-fluid">
                            <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #f0f1f1;">
                                <b>Mostrar</b>
                            </button>
                            <ul class="dropdown-menu" style="background-color: #d7d9da;">
                                <li class="nav-item">
                                    <a class="dropdown-item" href="/ver/facultad">Facultades</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="/ver/carrera">Carreras</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="/ver/cursos">Cursos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="/ver/mallas">Malla</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="/ver/programas">Programa academico</a>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown container-fluid">
                            <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #f0f1f1;">
                                <b>Registar usuarios</b>
                            </button>
                            <ul class="dropdown-menu" style="background-color: #d7d9da;">
                                <li class="nav-item">
                                    <a class="dropdown-item" href="/ver/form/docentes">Registrar Docente</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown container-fluid">
                            <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #f0f1f1;">
                                <b>Mostrar usuarios</b>
                            </button>
                            <ul class="dropdown-menu" style="background-color: #d7d9da;">
                                <li class="nav-item">
                                    <a class="dropdown-item text-dark" href="/ver/docentes">Ver Docentes</a>
                                </li>
                            </ul>
                        </div>
                        @endif
                        @if (session('tipo')!="administrador")
                        <div class="dropdown container-fluid">
                            <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #f0f1f1;">
                                <b>Mostrar</b>
                            </button>
                            <ul class="dropdown-menu" style="background-color: #d7d9da;">
                                <li class="nav-item">
                                    <a class="dropdown-item" href="/ver/cursos">Cursos</a>
                                </li>
                            </ul>
                        </div>
                        @endif
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('login') }}"><b>{{ __('Login') }}</b> </a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('register') }}"><b> {{ __('Register') }}</b></a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <b>{{ Auth::user()->name }}</b>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit(); ">
                                    {{ __('Salir') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-5">
            @yield('content')
        </main>
    </div>
</body>

</html>