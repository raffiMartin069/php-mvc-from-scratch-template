<?php

namespace MVC\Controllers;

use MVC\Controllers\Controller;
require 'src/Models/DatabaseConnection.php';
require 'src/Models/DataQuery.php';

class LoginController extends Controller {
    
    public function index() {
        $this->Render('index');
    }

    private function LoginRequest() {
        // Please implement CORS configuration found in Config folder.
        // Implement Logic ...      
    }
}