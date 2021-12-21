<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
$product = new Product;
$manu = new Manufacture;
$protype = new Protype;
if(isset($_GET['manu_id'])){
    $manu->delManu($_GET['manu_id']);
}
header('location:manufacture.php');