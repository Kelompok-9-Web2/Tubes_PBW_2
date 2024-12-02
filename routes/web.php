<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home'], ['name' => 'Home']);
});

Route::get('/kuliner', function () {
    return view('kuliner', ['title' => 'Kuliner'], ['name' => 'Kuliner']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About'], ['name' => 'About']);
});
