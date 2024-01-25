<?php

use App\Controllers\HomeController;
use App\Controllers\MovieController;
use App\Router\Route;

return [

    Route::get('/moovies/home', [HomeController::class, 'index']),

    Route::get('/moovies/movies', [MovieController::class, 'index']),

    Route::get('/moovies/test', function(){
        echo 'Heeloo';
    }),
];