<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.post');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

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
