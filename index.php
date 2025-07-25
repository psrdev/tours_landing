<?php

require __DIR__ . '/src/bootstrap.php';

use App\Router;

// Initialize the router
$router = new Router();

// Register routes
$router->get('/', function () {
    ob_start();
    $title = "Home Page";
    include __DIR__ . '/src/views/home.php';
    return ob_get_clean();
});

$router->get('/about', function () {
    ob_start();
    $title = "About Us";
    include __DIR__ . '/src/views/about.php';
    return ob_get_clean();
});

$router->post('/contact', function () {
    // Handle form submission
    // Example: validate, send mail, return JSON or redirect
    return 'Contact form submitted.';
});

// Dispatch request
$router->dispatch();
