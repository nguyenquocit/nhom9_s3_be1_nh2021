<?php
//session_start();
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/bill.php";
require "models/giohang.php";
$products = new Product;
$manu = new Manufacture;
$bill = new Bill;
$giohang = new GioHang;
if(isset($_POST['dathang'])){
    $name = $_POST['hoten'];
    $address = $_POST['diachi'];
    $tel = $_POST['dienthoai'];
    $email = $_POST['email'];
    $bill->addBill($name, $address, $tel, $email);
    echo "Hàng nè đặt đi!"; 
}
?>