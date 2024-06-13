<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/projects', function () {
    return view('projects');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/contact', function () {
    return view('contact');
});


