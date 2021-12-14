<?php
 require "config.php";
 require "models/db.php";
 require "models/product.php";
 require "models/manufacture.php";
 require "models/orde.php";
 $products = new Product;
 $manu = new Manufacture;
 $order = new Order;

 if(isset($_GET['submit'])){
     echo "hello";
     $name = $_POST['name'];
     $image = $_FILES['image']['name'];
     $price = $_POST['price'];
     $order->orderProduct($name ,$image, $price);
     //xy ly load file
     $target_dir = "../img/";
     $target_file = $target_dir . basename($_FILES["image"]["name"]);
     move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
    
 }
 else{
     echo "0";
 }
 echo "hello";
 //header('location:index.php');