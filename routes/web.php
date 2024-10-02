<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/**
 * mkdir simple-laravel-docker-example-app
 *
 * install laravel
 * create dockerfile, docker-compose, nginx.conf
 * composer require moonshine/moonshine
 * php artisan moonshine:install
 *fd
 */
