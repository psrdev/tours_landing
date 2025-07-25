<?php
// Load Composer's autoloader
require __DIR__ . '/../vendor/autoload.php';

// Load environment variables if you're using vlucas/phpdotenv
if (file_exists(__DIR__ . '/../.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();
}

// You can also initialize any global config or constants here
// Example:
// define('BASE_URL', '/');
