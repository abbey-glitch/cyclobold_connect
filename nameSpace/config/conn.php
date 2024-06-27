<?php
$_host = "localhost";
$_user = "root";
$_pass = "password";
$_db = "store_db";

try{
    $_conn = mysqli_connect($_host, $_user, $_pass, $_db);
}catch(Exception $e){
    echo $e->getMessage();
}
