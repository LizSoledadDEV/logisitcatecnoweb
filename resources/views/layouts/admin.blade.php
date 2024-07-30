<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DATACOM SRL</title>
    <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
</head>

<body>
    <div id="container">
        <nav>
            <div id="logo">DATACOM <span>SRL</span></div>
            <ul id="menu">
                <div class="perfil">
                    <img src="{{ asset('foto.jpg') }}" alt="" class="foto" />
                    <span></span>
                    <p></p>
                </div>
                <li><a href="{{ route('gestions.index') }}">Gestiones</a></li>

            </ul>
        </nav>
        <header>
            <div id="links">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </header>
        <main id="main">
            <!-- <div id="maximize"></div> -->
            <div id="action-container">

                @yield('content')

            </div>
        </main>
    </div>
    <script src="js/panel.js"></script>
</body>

</html>
