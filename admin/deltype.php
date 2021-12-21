<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
$product = new Product;
$manu = new Manufacture;
$protype = new Protype;
if(isset($_GET['type_id'])){
    $protype->delType($_GET['type_id']);
}
header('location:protype.php');