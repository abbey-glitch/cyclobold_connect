<?php 
// phpinfo();this to view all packages and module in your app
$_user = "root";
$_password = "password";
$_db = "store_db";
$host = "localhost";
try{
    $_conn = mysqli_connect($host, $_user, $_password, $_db);
    define('ROOT_PATH', realpath(dirname(__FILE__)));
    define('BASE_URL', 'http://localhost:8080');
    // if($_conn){
    //    $query = "INSERT INTO `admins`(`position`) VALUES ('publisher')";
    //    $result = mysqli_query($_conn, $query);
    //    if($result){
    //     echo "data inserted";
    //    }
    // }
    
}catch(Exception $e){
    echo $e." unable to connect ";
}

