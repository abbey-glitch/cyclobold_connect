<?php
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Method: *");
  header("Access-Control-Allow-Headers: *");
//   header("content-type: Application/Json");
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $request = file_get_contents("php://input");
   $data = json_decode($request);
   $firstname = $data->firstname;
   $lastname = $data->lastname;
   // $username = $data->username;
   $password = $data->password;
   $role_id = $data->role_id;
   require("config.php");
   // if(!$username && !$password){
   //    // echo "invalid data";
   // }
   // $sql = "SELECT * FROM `admins` WHERE `id` = 1";
   // $result = mysqli_query($_conn, $sql);
   // if($result){
   //    $feedback = mysqli_fetch_assoc($result);
   //    echo print_r($feedback);
   // }

   // registered
   $sql = "INSERT INTO `admins`(`fname`, `lastname`, `password`, `role_id`, `created_at`, `registered`) VALUE ('$firstname', '$lastname', SHA('$password'), $role_id, now(), now())";
   $result = mysqli_query($_conn, $sql);
   if($result){
      $id = mysqli_insert_id($_conn);
      echo json_encode([
         "message" => "user registered successfully",
         "type" => "success",
         "insert_id" => $id
      ]);
   }else{
      echo "unable to insert";
      // echo mysqli_error($_conn);
   }

}

