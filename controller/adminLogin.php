<?php
require "config.php";
function login($username, $password){
    global $_conn;
    // $hpass = password_hash($password, PASSWORD_BCRYPT);
    mysqli_real_escape_string($_conn, trim($username));
    mysqli_real_escape_string($_conn, trim($password));
    if(empty($username) || empty($password)){
        $empty = "username and password is reqired";
        return json_encode([
            "message" => "user info issue",
            "error" => $empty, 
        ]);
    }
    $sql = "SELECT * FROM `admins` WHERE `password` = SHA('$password')";
    $result = mysqli_query($_conn, $sql);
    if($result){
        $admin_user = mysqli_fetch_assoc($result);
        $active_user = json_encode($admin_user['fname']);
        session_start();
        if($_SESSION['user']['active_user'] = $active_user){
            header("location: dashboard.php");
        }
        
        // 
        // return json_encode([
        //     "message"=>"welcome super admin"
        // ]);
    }
}
