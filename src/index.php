<?php
require_once "./config/config.php";

require_once './db/db-connect.php';

// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Route it up!
switch ($request_uri[0]) {
    // Home page
    case APPROOT.'/':
        require_once './views/home.php';
        break;
    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        require_once './views/404.php';
        break;
}