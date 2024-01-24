<?php

use App\Router\Route;


return [

    Route::get('/moovies/home', function(){
        include_once APP_PATH . '/src/views/pages/home.php';
    }),

    Route::get('/moovies/movies', function(){
        include_once APP_PATH . '/src/views/pages/movies.php';
    })
];