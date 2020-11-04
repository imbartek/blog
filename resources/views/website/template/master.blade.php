<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Zdalna przyszłość</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/hamburger.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- Navigation -->
    <nav class="main_nav">
        <div class="main_container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/website/img/logo.png" alt="logo">
            </a>
            <!--PC navigation-->
            <ul class="nav_pc">
                @php($pages = getPages())
                @foreach($pages as $page)
                <li>
                    <a href="{{ url('page/' . $page->slug) }}">{{ $page->title }}</a>
                </li>
                @endforeach

                <li>
                    <a href="{{ route('contact.show') }}">Contact</a>
                </li>
                <li>
                    <a href="#">Współpraca</a>
                </li>
            </ul>
            <div class="menu-btn">
                <div class="menu-btn__burger"></div>
            </div>
        </div>
        <!--Mobile navigation-->
        <ul class="nav_mobile">
            @php($pages = getPages())
            @foreach($pages as $page)
            <li>
                <a href="{{ url('page/' . $page->slug) }}">{{ $page->title }}</a>
            </li>
            @endforeach

            <li>
                <a href="{{ route('contact.show') }}">Contact</a>
            </li>
            <li>
                <a href="#">Współpraca</a>
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
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('website/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('website/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('website/js/clean-blog.min.js') }}"></script>
    <script src="js/menu.js"></script>

</body>

</html>