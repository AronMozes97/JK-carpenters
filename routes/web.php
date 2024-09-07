<?php

use Illuminate\Support\Facades\Route;

Route::get('/{pathMatch?}', function () {
    return view('core.core');
})->where('pathMatch', '.*')->name('index');
