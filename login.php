<?php
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Method: *");
  header("Access-Control-Allow-Headers: *");

// server connection
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = file_get_contents("php://input");
    $request = json_decode($data);
    $username = $request->username;
    $password = $request->password;
    require("./controller/adminLogin.php");
    $feedback = login($username, $password);
    if($feedback){
        echo $feedback;
    }
}