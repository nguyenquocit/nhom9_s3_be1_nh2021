<?php
 require "../config.php";
 require "../models/db.php";
 require "../models/user.php";
 $user = new User;

 if(isset($_POST['submit'])){
    $user_name = $_POST['username'];
    $user_password = $_POST['password'];
    $password2 = $_POST['password2'];
    if($user_password == $password2 && $user_name != ""){
     $user->addUser($user_name, $user_password);
     header('location:index.php');
    }else{
        header('location:signup.php');       
    }
    
 }
 else{
     echo "0";
 }
