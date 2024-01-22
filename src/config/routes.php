<?php

return [
    '/moovies/home' => function(){
        include_once APP_PATH . '/src/views/pages/home.php';
    },
    '/moovies/movies' => function(){
        include_once APP_PATH . '/src/views/pages/movies.php';
    },
];