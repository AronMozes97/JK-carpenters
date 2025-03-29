<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class HelperController extends Controller
{
    private const SECRET = 'd1f3a8c92eac74b6bf4d23e900fa6521';

    public function removeCache(string $token){

        if ($token === self::SECRET) {
            Artisan::call('config:clear');
            #Artisan::call('cache:clear');
            Artisan::call('view:clear');
            Artisan::call('route:clear');

            echo 'Cache cleared!';
        }

        echo 'Wrong token!';
    }
}
