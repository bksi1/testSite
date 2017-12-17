<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->

    <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/camera.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mobile.customized.min.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.js') }}"></script>
    <script src="{{ asset('js/camera.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/ie.css') }}">
    <![endif]-->
</head>
<body class="index">
<div id="app">
    <header id="header">
        <div id="stuck_container">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <!-- Collapsed Hamburger -->
                        <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>-->
                        <h1><a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'Зоо свят') }}
                            </a><span>място за вашите любимци</span></h1>

                        <nav>
                            <ul class="sf-menu">
                                <li class="current"><a href="{{ url('/') }}">Начало</a>

                                </li>
                                <li><a href="index-2.html">Категории</a>
                                    <ul>
                                        <li><a href="#">Храни/консумативи</a></li>
                                        <li><a href="#">Животни</a>
                                            <ul>
                                                <li><a href="#">Кучета</a></li>
                                                <li><a href="#">Котки</a></li>
                                                <li><a href="#">Гризачи</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Обучения</a></li>
                                    </ul>
                                </li>
                                @foreach ($menuItems as $menuItem)
                                <li ><a href = "index-1.html" > {{$menuItem->title}} </a ></li >
                                @endforeach
                                <!--<li><a href="index-3.html">Услуги</a></li>-->
                                <!--<li><a href="index-4.html">Контакти</a></li>-->
                                @if (Auth::guest())
                                <li><a href="{{ route('login') }}">Login</a></li>
                                @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>


    @yield('content')
</div>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="grid_12 copyright">
                <h2><span>Follow Us</span></h2>
                <a href="#" class="btn bd-ra"><span class="fa fa-facebook"></span></a>
                <a href="#" class="btn bd-ra"><span class="fa fa-tumblr"></span></a>
                <a href="#" class="btn bd-ra"><span class="fa fa-google-plus"></span></a>
                <pre>© <span id="copyright-year"></span> |  Privacy Policy</pre>
                More <a rel="nofollow" href="http://www.templatemonster.com/category.php?category=133&type=1" target="_blank">Advertising Agency Templates at TemplateMonster.com</a>
            </div>
        </div>
    </div>
    <div class="footer_bottom"><a href="http://www.templatemonster.com/" rel="nofollow"><img src="images/footer-logo.png" alt="logo"></a></div>
</footer>

</body>
</html>
