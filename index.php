<?php

$requestUri = $_SERVER['REQUEST_URI'];

// Map URLs to corresponding PHP files
$routes = [
    '/'  => 'theme/home.php'
];

// Check if the requested URL is in the routes
if (isset($routes[$requestUri])) {
    include $routes[$requestUri];
} else {
    // Handle 404 error
    echo '404 Not Found';
}
?>