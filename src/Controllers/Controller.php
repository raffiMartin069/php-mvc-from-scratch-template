<?php

namespace MVC\Controllers;

// This is the main controller of this project.
// Changes are only made IF NECESSARY, consult the team before doing further changes.
// This controller is responsible for rendering the views and redirecting the user to another page.
// This controller is abstract, meaning it cannot be instantiated but can be extended by other folders.
abstract class Controller {

    protected function Render($view, $data = []) {
        extract($data);
        try {
            include "src/Views/$view.php";
        } catch (\Throwable $th) {
            echo "<h1>{$th->getMessage()}</h1>";
        }
    }
    protected function Redirect($url) {
        header("Location: $url");
        exit;
    }
}
    