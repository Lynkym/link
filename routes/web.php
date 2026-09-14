<?php

use App\Models\Job;
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
    $jobs = Job::where('status', 'active')->latest()->get();

    return view('job-search', compact('jobs'));
})->name('jobs');

Route::get('/jobs/{job}', function (Job $job) {
    return view('job-details', compact('job'));
})->name('jobs.show');

Route::get('/profile', function () {
    return view('developer-profile');
})->name('profile');
