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
                    <a href="" class="side-nav-link active-side d-flex justify-content-between">Dashboard <i class="bi bi-list"></i></a>
                    <a href="" class="side-nav-link d-flex justify-content-between">Explore <i class="bi bi-compass-fill"></i></a>
                    <a href="" class="side-nav-link d-flex justify-content-between">Saved <i class="bi bi-bookmark-fill"></i></a>
                </div>
            </div>

            <!-- MAIN CONTENT -->
            <div class="container-fluid main-content col-6 offset-3 bg-second-dark px-4">
                <div class="d-flex justify-content-center" style="position: fixed; top: 60px; left: 50%; transform: translateX(-50%); z-index: 1000; width: 35%;">
                    <div class="bg-light my-4 rounded w-100" style="height: fit-content;">
                        <form action="">
                            <div class="d-flex justify-content-evenly shadow">
                                <input type="text" class="input-search" placeholder="Search...">
                                <button class="btn-search"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Content Section -->
                <div style="margin-top: 80px;">
                    @yield('content')
                </div>
            </div>
            <!-- RIGHT BAR -->
            <div class="col-3 bg-second-dark text-center" style="position: fixed; top: 50; right: 0; height: 100%; z-index: 100;">
                <div class="mt-4 mb-3">
                    <a class="nav-link text-light nav-icon" href="#">
                        <img src="{{ asset('assets/img/profile.png') }}" alt="" class="img-rightbar rounded-pill border">
                    </a>
                </div>
                <a href="" class="text-decoration-none text-light fs-4">Adithamada</a>
                <div class="row mt-3">
                    <div class="col-4 text-center text-light">
                        <p class="lh-1 mb-2 fs-5">10</p>
                        <p class="fs-5 lh-1 ">Posts</p>
                    </div>
                    <div class="col-4 text-center text-light">
                        <p class="lh-1 mb-2 fs-5">258</p>
                        <p class="fs-5 lh-1 ">Follower</p>
                    </div>
                    <div class="col-4 text-center text-light">
                        <p class="lh-1 mb-2 fs-5">604</p>
                        <p class="fs-5 lh-1 ">Following</p>
                    </div>
                </div>
                <!-- Center the button -->
                <div class="row mt-2">
                    <button class="btn btn-light mx-auto" style="width: fit-content;">View Profile</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MAIN -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>