<?php

use Illuminate\Support\Facades\Route;


Route::get('rota-a', function(){
    // lógica cabulosa
    Route::route();
    return redirect()->route('rotab');
});


Route::get('rota-b', function(){
    return 'ROTA B';
})->name('rotab');


Route::get('users', function () {
    return 'h3lloWorld!';
})->name('users');

