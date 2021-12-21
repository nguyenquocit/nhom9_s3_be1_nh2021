<?php
 require "config.php";
 require "models/db.php";
 require "models/product.php";
 require "models/manufacture.php";
 require "models/protype.php";
 $product = new Product;
 $manu = new Manufacture;
 $protype = new Protype;

 if(isset($_POST['submit'])){
     $type_name = $_POST['name'];
     $protype->addType($type_name);
 }
 else{
     echo "0";
 }
 header('location:protype.php');