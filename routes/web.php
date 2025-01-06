<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/explore', function () {
    return view('pages.explore');
});

Route::get('/saved', function () {
    return view('pages.saved');
});

Route::get('/user', function () {
    return view('pages.user-profile');
});