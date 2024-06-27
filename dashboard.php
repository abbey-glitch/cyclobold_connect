<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Method: *");
header("Access-Control-Allow-Headers: *");
session_start();
if(isset($_SESSION['user']['active_user'])){
    echo "active user";
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        echo "welcome To The Dashboard";
    }
}else{
    header("location: login.php");
}
