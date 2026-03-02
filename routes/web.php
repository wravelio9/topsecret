<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/material', function(){
    return view('material');
});

Route::get('/banksoal', function(){
    return view('banksoal');
});

Route::get('about', function(){
    return view('about');
});