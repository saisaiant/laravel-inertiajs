<?php

use App\Models\Monitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function() {
    $monitors = Monitor::paginate();
    return Inertia::render('Home', [
        'monitors' => $monitors,
    ]);
});

Route::get('about', function() {
    return Inertia::render('About');
});

Route::get('login', function() {
    return Inertia::render('Login');
});

Route::post('/auth/login', function(Request $request) {
    return Inertia::location('/home');
});

Route::get('site/create', function() {
    return Inertia::render('Site/Create');
});

