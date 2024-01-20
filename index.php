<?php
require_once __DIR__ . '/vendor/autoload.php';

$routes = require_once __DIR__ . '/src/config/routes.php';

$uri = str_replace('/moovies', '' , $_SERVER['REQUEST_URI']);

$routes[$uri]();