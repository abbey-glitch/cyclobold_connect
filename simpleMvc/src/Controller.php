<?php
// Controller.php inside src/ folder

namespace App;

class Controller
{
    // Method to render views
    protected function render($view, $data = [])
    {
        // Extract data for use in the view
        extract($data);

        // Include the view file
        include "Views/$view.php";
    }
}
