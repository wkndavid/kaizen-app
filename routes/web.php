<?php

use Illuminate\Support\Facades\Route;


Route::get('users', function () {
    return 'h3lloWorld!';
})->name('users');

