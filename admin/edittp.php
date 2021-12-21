<?php
 require "config.php";
 require "models/db.php";
 require "models/product.php";
 require "models/manufacture.php";
 require "models/protype.php";
 $product = new Product;
 $manu = new Manufacture;
 $protype = new Protype;

if (isset($_POST['submit'])) {
    $type_id = $_POST['id'];
    $type_name = $_POST['name'];
    //Xu ly sua san pham
    $protype->editType($type_name, $type_id);
    header("location:protype.php");
}