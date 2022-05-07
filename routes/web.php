<?php

use Illuminate\Support\Facades\Route;


Route::match(['post'], '/users', function () {
    return 'h3lloWorld!';
});
