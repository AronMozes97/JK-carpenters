<?php

use Illuminate\Support\Facades\Route;

Route::get('/{pathMatch?}', function () {
    return view('core');
})->where('pathMatch', '.*')->name('index');
