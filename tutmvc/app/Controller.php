<?php
namespace Henry;

class Controller{

    protected function display($view, $data=[]){
        // display content
        extract($data);
        // display view
        include "Views/$view.php";
    }
}