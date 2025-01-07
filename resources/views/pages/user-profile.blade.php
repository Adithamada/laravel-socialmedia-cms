@extends('layouts.main-in')

@section('content')
<i class="bi bi-arrow-left text-light fs-4"></i>
<div class="text-center d-flex flex-column align-items-center justify-content-center">
    <div class="mt-4 mb-3">
        <a class="nav-link text-light nav-icon" href="#" style="width: fit-content;">
            <img src="{{ asset('assets/img/profile.png') }}" alt="" class="img-rightbar rounded-pill border">
        </a>
    </div>
    <a href="" class="text-decoration-none text-light fs-4">Adithamada</a>
    <div class="row mt-3 w-50">
        <div class="col-4 text-center text-light">
            <p class="lh-1 mb-2 fs-5">10</p>
            <p class="fs-5 lh-1">Posts</p>
        </div>
        <div class="col-4 text-center text-light">
            <p class="lh-1 mb-2 fs-5">1 Million</p>
            <a href="/user/follower" class="nav-link"><p class="fs-5 lh-1">Follower</p></a>
        </div>
        <div class="col-4 text-center text-light">
            <p class="lh-1 mb-2 fs-5">604</p>
            <p class="fs-5 lh-1">Following</p>
        </div>
    </div>
    <!-- Center the button -->
    <div class="row mt-2 w-100">
        <a class="btn btn-light mx-auto" style="width: fit-content;">Edit Profile</a>
    </div>
</div>
<div class="my-5">
    <div class="card bg-light p-3">
        <div class="row mb-3">
            <h4 class="text-dark">Posts</h4>
            <div class="col-3">
                <div class="card">
                    <a href="#">
                        <img src="{{ asset('assets/img/content.png') }}" class="img-post w-100 rounded">
                    </a>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <a href="#">
                        <img src="{{ asset('assets/img/content.png') }}" class="img-post w-100 rounded">
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <a href="#">
                        <img src="{{ asset('assets/img/content.png') }}" class="img-post w-100 rounded">
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <a href="#">
                        <img src="{{ asset('assets/img/content.png') }}" class="img-post w-100 rounded">
                    </a>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                <div class="card">
                    <a href="#">
                        <img src="{{ asset('assets/img/content.png') }}" class="img-post w-100 rounded">
                    </a>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <a href="#">
                        <img src="{{ asset('assets/img/content.png') }}" class="img-post w-100 rounded">
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <a href="#">
                        <img src="{{ asset('assets/img/content.png') }}" class="img-post w-100 rounded">
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <a href="#">
                        <img src="{{ asset('assets/img/content.png') }}" class="img-post w-100 rounded">
                    </a>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3">
                <div class="card">
                    <a href="#">
                        <img src="{{ asset('assets/img/content.png') }}" class="img-post w-100 rounded">
                    </a>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <a href="#">
                        <img src="{{ asset('assets/img/content.png') }}" class="img-post w-100 rounded">
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <a href="#">
                        <img src="{{ asset('assets/img/content.png') }}" class="img-post w-100 rounded">
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <a href="#">
                        <img src="{{ asset('assets/img/content.png') }}" class="img-post w-100 rounded">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection