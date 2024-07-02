<?php

use Henry\Controller;

class HomeController extends Controller{
    public function index(){
        $this->display('home');
    }
  
}