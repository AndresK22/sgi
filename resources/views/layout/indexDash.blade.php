<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('recursos/js/app.js')

    <title>@yield('title')</title>

    <!-- Fonts
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body class="antialiased">

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper blue-grey darken-2">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i
                        class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
								    <li>                <img src="{{ asset('img/lg.png') }}" style="max-width: 100%" alt="">
										</li>
                    <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"><a
                            href="{{ route('dashboard') }}">Inicio</a></li>
                    @role('administrador')
                        <li class="{{ request()->routeIs('user.*') ? 'active' : '' }}"><a
                                href="{{ route('user.index') }}">Usuarios</a></li>
                    @endrole

                    <li><a href="#">Medicamentos</a></li>
                    <li><a href="#">Entrada de medicamentos</a></li>
                    <li><a href="#">Salida de medicamentos</a></li>
                    <li><a href="#">Venta diaria</a></li>

                    @hasanyrole('administrador')
                        <li class="{{ request()->routeIs('controlMensual.*') ? 'active' : '' }}"><a
                                href="#">Reportes</a></li>
                    @endhasanyrole

                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <li><a href="#" onclick="this.closest('form').submit()">Cerrar sesion</a></li>
                    </form>
                </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}">Inicio</a>
        </li>
        @role('administrador')
            <li class="{{ request()->routeIs('user.*') ? 'active' : '' }}"><a
                    href="{{ route('user.index') }}">Usuarios</a>
            </li>
        @endrole

        @hasanyrole('administrador|gerente')
            <li><a href="#">Medicamentos</a></li>
        @endhasanyrole

        <li><a href="#">Entrada de medicamentos</a></li>
        <li><a href="#">Salida de medicamentos</a></li>
        <li><a href="#">Venta diaria</a></li>

        @hasanyrole('administrador')
            <li><a href="#">Reportes</a></li>
        @endhasanyrole

        <li>
            <div class="divider"></div>
        </li>

        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <li><a href="#" onclick="this.closest('form').submit()">Cerrar sesion</a></li>
        </form>
    </ul>


    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>


    <footer class="page-footer blue-grey darken-3">
			<div class="footer-copyright">
					<div class="container">
							<a class="grey-text text-lighten-4 right" href="#!">Sistema dde Informacion Gerencial © 2023</a>
					</div>
			</div>
	</footer>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    @yield('js_user_page')

</body>

</html>
