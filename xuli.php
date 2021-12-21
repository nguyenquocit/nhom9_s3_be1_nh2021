<?php
/*session_start();
	if(isset($_GET['id'])){
		$id = $_GET['id'];

		if(isset($_SESSION['cart'][$id])){
			$_SESSION['cart'][$id]++;
		}
		else{
			$_SESSION['cart'][$id] = 1;
		}
		if(isset($_POST['capnhap'])){
            function update(){
                foreach($_SESSION['cart'] as $key=>$value){
                    $_SESSION['cart'][$id] = $value;
                }
            }
        }
        header('location:addcart.php');
	}else{
        echo "0";
    }
    