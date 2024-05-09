<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Method: *");
header("Access-Control-Allow-Headers: *");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = file_get_contents("php://input");
    $request = json_decode($data);
    $fname = $request->fname;
    $username = $request->lname;
    $email = $request->email;
}