<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Zdalna przyszłość - blog, który pomoże i wyjaśni jak pracować zdalnie! Pokażemy Ci, że taki rodzaj pracy jest bardzo przyjemny i moze przynieść Ci wiele korzyści.">
    <meta name="keywords" content="zdalnaprzylosc, zdalnaprzyszlosc.pl, zdalna przyszlosc, zdalna przyszłość, zdalnie, praca zdalna, jak pracowac zdalnie, porady, blog">
    <meta name="author" content="im.bartek@o2.pl">
    <meta name="robots" content="index/follow">
    <title>Zdalna przyszłość - blog o pracy zdalnej</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/hamburger.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/91ced36fc1.js" crossorigin="anonymous"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZW1C1JK4MZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ZW1C1JK4MZ');
    </script>
    <style>
        body {
            font-family: 'Roboto Condensed', sans-serif;
        }

        a {
            color: #966f34;
        }

        a:hover {
            text-decoration: none;
            color: #966f34;
        }

        li {
            color: #966f34;
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="main_nav">
        <div class="main_container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/website/img/logov2.png" alt="logo" width="100%">
            </a>
            <!--PC navigation-->
            <ul class="nav_pc">
                <li>
                    <a href="{{ url('/') }}">Strona główna</a>
                </li>
                @php($pages = getPages())
                @foreach($pages as $page)
                <li>
                    <a href="{{ url('page/' . $page->slug) }}">{{ $page->title }}</a>
                </li>
                @endforeach
                <li>
                    <a href="{{ route('table-of-contents') }}">Spis treści</a>
                </li>
                <li>
                    <a href="#">Podcast</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">O nas</a>
                </li>
                <li>
                    <a href="{{ route('contact.show') }}">Współpraca</a>
                </li>
            </ul>
            <div class="menu-btn">
                <div class="menu-btn__burger"></div>
            </div>
        </div>
        <!--Mobile navigation-->
        <ul class="nav_mobile">
            <li>
                <a href="{{ url('/') }}">Strona główna</a>
            </li>
            @php($pages = getPages())
            @foreach($pages as $page)
            <li>
                <a href="{{ url('page/' . $page->slug) }}">{{ $page->title }}</a>
            </li>
            @endforeach
            <li>
                <a href="{{ route('table-of-contents') }}">Spis treści</a>
            </li>
            <li>
                <a href="#">Podcast</a>
            </li>
            <li>
                <a href="{{ route('about')}}">O nas</a>
            </li>
            <li>
                <a href="{{ route('contact.show') }}">Współpraca</a>
            </li>
        </ul>
    </nav>

    @yield('content')

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <p>Znajdź nas na:</p>
                            <a href="https://www.facebook.com/Zdalna-przysz%C5%82o%C5%9B%C4%87-108982874389056" target="blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Created by <a href="mailto:im.bartek@o2.pl">im.bartek</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="/js/menu.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>