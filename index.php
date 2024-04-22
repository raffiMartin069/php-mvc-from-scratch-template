<?php
// Remove this code when app is pushed in production.
// This code is for debugging purpose only.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// --------------------------------------------------

require 'vendor/autoload.php';
require 'src/Config/CORS.php';

// This function is for Cross-Origin Resource Sharing (CORS) configuration.
// It is used to configure the allowed origin, methods, and headers.
// This helps to prevent unauthorized access to the server.
// It provides a layer of security to the server.
// This function is called before the request is dispatched to the controller.
// This is to ensure that the request is allowed to access the server.
function CrossOriginResourceSharing() {
    CORS::AllowOrigin(['http://localhost']);
    CORS::AllowMethods(['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS']);
    CORS::AllowHeaders(['Content-Type', 'Authorization']);
}

CrossOriginResourceSharing();

// Prevent unauthorized access to the server.
// This is how we ban requests that are not allowed.
// Check if the request method is GET
// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//     header('HTTP/1.1 405 Method Not Allowed');
//     exit;
// }

// Get the URI of the request.
// This is used to determine the route of the request.
// The route is used to dispatch the request to the appropriate controller.
// The controller then processes the request and returns the response.
// The response is then sent back to the client.
// The client then receives the response and displays it to the user.
// This is the basic flow of the request-response cycle.
function URI() {
    return $_SERVER['REQUEST_URI'];
}

function Router() {
    return require 'src/Routes/routes.php';
}

function Dispatch() {
    try{
        Router()->dispatch(URI());
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


Dispatch();

