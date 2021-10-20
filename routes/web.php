<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('site.index');
})->name("index");

Route::get('/hello', function () {
    return "hello";
})->name("hello");
