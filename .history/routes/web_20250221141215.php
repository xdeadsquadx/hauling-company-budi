<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/suraat', function () {
    return view('suraat');
})->name('suraat');
