<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
require "models/user.php";
$user = new User;
$product = new Product;
$manu = new Manufacture;
$protype = new Protype;
if(isset($_GET['user_id'])){
    $user->delUser($_GET['user_id']);
}
header('location:user.php');