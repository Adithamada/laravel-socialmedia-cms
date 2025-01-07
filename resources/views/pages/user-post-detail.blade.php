@extends('layouts.main-in')

@section('content')
<i class="bi bi-arrow-left text-light fs-4 "></i>
<div class="col-12 bg-light px-4 py-3 rounded my-3">
    <div class="row">
        <div class="d-flex flex-row gap-3">
            <a class="nav-link text-light nav-icon" href="#">
                <img src="{{ asset('assets/img/profile.png') }}" alt="Profile Picture" class="img-navbar border">
            </a>
            <div class="">
                <p class="my-0">Adithamada</p>
                <p class="text-secondary" style="font-size: 12px;">11 November 2005</p>
            </div>
        </div>
        <div class="row my-2">
            <h5 class="w-100">Lorem ipsum dolor sit amet consectetur adipisicing</h5>
            <p class="w-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae tempora voluptates quo aspernatur esse suscipit qui exercitationem dicta, earum pariatur totam <span class="text-secondary">Read More</span></p>
        </div>
        <div class="my-2 d-flex justify-content-center">
            <img src="{{ asset('assets/img/content.png') }}" class="img-fluid rounded-3">
        </div>
        <div class="d-flex justify-content-between">
            <div class="d-flex gap-2">
                <i class="bi bi-heart"></i>
                <p>200 Likes</p>
            </div>
            <div class="d-flex gap-2">
                <i class="bi bi-chat"></i>
                <p>10 Comments</p>
            </div>
            <div class="d-flex gap-2">
                <i class="bi bi-bookmark"></i>
                <p>90 Saved</p>
            </div>
        </div>
    </div>
</div>

<div class="col-12 bg-light rounded">
    <div class="card rounded p-3">
        <div class="comment-section d-flex flex-row gap-2 mb-3">
            <i class="bi bi-chat fs-3"></i>
            <form action="" class="d-flex flex-row w-100">
                <input type="text" class="input-comment w-100" placeholder="Comment...">
                <button class="btn btn-secondary">Send</button>
            </form>
        </div>
        <div class="col-12 mb-3">
            <div class="p-3 d-flex justify-content-between flex-row align-items-center gap-3">
                <div class="d-flex gap-3">
                    <a class="nav-link text-light fs-4 nav-icon" href="/user" style="width: fit-content;">
                        <img src="{{ asset('assets/img/profile.png') }}" alt="Profile Picture" class="img-navbar border rounded-pill">
                    </a>
                    <div class="d-flex gap-3">
                        <div class="col">
                            <p class="my-0">Adithamada</p>
                            <p class="text-secondary">11 Nov 2005</p>
                        </div>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, modi. Lorem ipsum dolor sit Lorem, ipsum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi blanditiis eaque vitae laudantium debitis expedita dolorum porro illo atque error?</p>
                    </div>
                </div>
                <div class="">
                    <i class="bi bi-heart"></i>
                </div>
            </div>
        </div>

        <div class="col-12 mb-3">
            <div class="p-3 d-flex justify-content-between flex-row align-items-center gap-3">
                <div class="d-flex gap-3">
                    <a class="nav-link text-light fs-4 nav-icon" href="/user" style="width: fit-content;">
                        <img src="{{ asset('assets/img/profile.png') }}" alt="Profile Picture" class="img-navbar border rounded-pill">
                    </a>
                    <div class="d-flex gap-3">
                        <div class="col">
                            <p class="my-0">Adithamada</p>
                            <p class="text-secondary">11 Nov 2005</p>
                        </div>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, modi. Lorem ipsum dolor sit Lorem, ipsum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi blanditiis eaque vitae laudantium debitis expedita dolorum porro illo atque error?</p>
                    </div>
                </div>
                <div class="">
                    <i class="bi bi-heart"></i>
                </div>
            </div>
        </div>

        <div class="col-12 mb-3">
            <div class="p-3 d-flex justify-content-between flex-row align-items-center gap-3">
                <div class="d-flex gap-3">
                    <a class="nav-link text-light fs-4 nav-icon" href="/user" style="width: fit-content;">
                        <img src="{{ asset('assets/img/profile.png') }}" alt="Profile Picture" class="img-navbar border rounded-pill">
                    </a>
                    <div class="d-flex gap-3">
                        <div class="col">
                            <p class="my-0">Adithamada</p>
                            <p class="text-secondary">11 Nov 2005</p>
                        </div>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, modi. Lorem ipsum dolor sit Lorem, ipsum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi blanditiis eaque vitae laudantium debitis expedita dolorum porro illo atque error?</p>
                    </div>
                </div>
                <div class="">
                    <i class="bi bi-heart"></i>
                </div>
            </div>
        </div>

        <div class="col-12 mb-3">
            <div class="p-3 d-flex justify-content-between flex-row align-items-center gap-3">
                <div class="d-flex gap-3">
                    <a class="nav-link text-light fs-4 nav-icon" href="/user" style="width: fit-content;">
                        <img src="{{ asset('assets/img/profile.png') }}" alt="Profile Picture" class="img-navbar border rounded-pill">
                    </a>
                    <div class="d-flex gap-3">
                        <div class="col">
                            <p class="my-0">Adithamada</p>
                            <p class="text-secondary">11 Nov 2005</p>
                        </div>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, modi. Lorem ipsum dolor sit Lorem, ipsum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi blanditiis eaque vitae laudantium debitis expedita dolorum porro illo atque error?</p>
                    </div>
                </div>
                <div class="">
                    <i class="bi bi-heart"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection