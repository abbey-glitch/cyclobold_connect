<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Method: *");
header("Access-Control-Allow-Headers: *");
if($_SERVER["REQUEST_METHOD"] == "GET"){
    echo "welcome home";
}