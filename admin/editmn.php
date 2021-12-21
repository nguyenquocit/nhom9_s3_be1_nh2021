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
    $manu_id = $_POST['manu_id'];
    $manu_name = $_POST['name'];
    //Xu ly sua san pham
    $manu->editManu($manu_name, $manu_id);
    header("location:manufacture.php");
}