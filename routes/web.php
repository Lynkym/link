<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('sing-up');
})->name('register');

Route::get('/jobs', function () {
    return view('job-search');
})->name('jobs');

Route::get('/jobs/1', function () {
    return view('job-details');
})->name('jobs.show');

Route::get('/profile', function () {
    return view('developer-profile');
})->name('profile');
