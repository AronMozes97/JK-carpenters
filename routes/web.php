<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/mail/contact', [MailController::class, 'sendContactMail'])->name('send.contact.mail');

Route::get('/{pathMatch?}', function () {
    return view('core');
})->where('pathMatch', '.*')->name('index');
