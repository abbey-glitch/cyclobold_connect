<?php

namespace MyNamespace\Controllers;

use MyNamespace\Controller;

class HomeController extends Controller
{
    public function index()
    {

        $this->render('index');
    }
}
