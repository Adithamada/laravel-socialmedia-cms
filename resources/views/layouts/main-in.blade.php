<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMSA</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark px-4 sticky-top">
        <div class="container-fluid">
            <a class="text-light text-decoration-none" href="#">
                <h1>IMSA</h1>
            </a>
            <div class="navbar-nav" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-4">
                    <a class="nav-link text-light fs-4 nav-icon" aria-current="page" href="#"><i class="bi bi-plus-circle-fill"></i></a>
                    <a class="nav-link text-light fs-4 nav-icon" href="#"><i class="bi bi-bell-fill"></i></a>
                    <a class="nav-link text-light fs-4 nav-icon" href="#"><i class="bi bi-bookmark"></i></a>
                    <a class="nav-link text-light fs-4 nav-icon" href="#">
                        <img src="{{ asset('assets/img/profile.png') }}" alt="Profile Picture" class="img-navbar border">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- MAIN -->
    <div class="container-fluid">
        <div class="row">
            <!-- LEFT BAR -->
            <div class="col-3 bg-second-dark" style="position: fixed; top: 50; left: 0; height: 100%; z-index: 100;">
                <div class="side-nav d-flex flex-column gap-3 mt-4">
                    <a href="/dashboard" class="side-nav-link d-flex justify-content-between @if(Request::is('dashboard')) active-side @endif">Dashboard <i class="bi bi-list"></i></a>
                    <a href="/explore" class="side-nav-link d-flex justify-content-between @if(Request::is('explore')) active-side @endif">Explore <i class="bi bi-compass-fill"></i></a>
                    <a href="/saved" class="side-nav-link d-flex justify-content-between @if(Request::is('saved')) active-side @endif">Saved <i class="bi bi-bookmark-fill"></i></a>
                </div>
            </div>

            <!-- MAIN CONTENT -->
            <div class="main-content container-fluid col-9 bg-dark " style="margin-left: 25%;">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- MAIN -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>