<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;



Route::get('/api/instagram-feed', [ApiController::class, 'getInstagramFeed'])->name('instagram-feed-api');

Route::get('/{pathMatch?}', function () {
    return view('core');
})->where('pathMatch', '.*')->name('index');
