<?php
session_start();
require "../config.php";
 require "../models/db.php";
 require "../models/user.php";
 
 $user = new User;
 if(isset($_POST['submit'])){
     $username = $_POST['username'];
     $password = $_POST['password'];
     $role = $_POST['role'];
     if($user->CheckLogin($username, $password)){
        $_SESSION['user'] = $username;
        if($user->CheckLoginRole($username, $password, $role) && $role == 1){      
         header('location:../admin');
        }
        else{
            header('location:../index.php');
        }
     }
     else{
        header('location:index.php');
     }
 }