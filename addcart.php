<?php

include "header.php";
?>
<h1 style="text-align:center;">Giỏ Hàng</h1>
<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];

		if(isset($_SESSION['cart'][$id])){
			$_SESSION['cart'][$id]++;
		}
		else{
			$_SESSION['cart'][$id] = 1;
		}
	}
?>
<table border="1" cellspacing="0" cellpadding="5" align="center">
		<th width="40" style="text-align:center;">  ID  </th>
		<th width="350" style="text-align:center;"> Name </th>
		<th width="150" style="text-align:center;"> Image </th>
		<th width="100" style="text-align:center;"> Price </th>
		<th width="50" style="text-align:center;"> Quantily </th>
		<th width="60" style="text-align:center;">  Action </th>
	</tr>
	<?php
	$tong = 0;
	foreach($_SESSION['cart'] as $key=>$value):
		$getProductById = $products->getProductById($key);
        foreach($getProductById as $valuee):
	?>
	<tr style="text-align:center;">
		<th width="40" style="text-align:center;"><?php echo $key ?></th>
		<th width="350" style="text-align:center;"><?php echo $valuee['name'] ?> </th>
		<th width="150" style="text-align:center;"><img src="./img/<?php echo $valuee['image'] ?> " alt="" width="100px"></th>
		<th width="100" style="text-align:center;"> <?php echo number_format($valuee['price']) ?>VND</th>
		<th width="50" style="text-align:center;"><input type="text" value="<?php echo $value ?>" style="width:1cm;text-align:center"></th>
		<th width="60" style="text-align:center;"><a href="de.php?id=<?php echo $key ?>">DELETE</a></th>
	</tr>
	<?php 
	$tong += $valuee['price'] * $value;

	//endif;
	endforeach;
	endforeach;
	
	?>
	<tr style="text-align:center;">
		<th width="40" style="text-align:center;"></th>
		<th width="350" style="text-align:center;">Tổng Tiền : </th>
		<th width="150" style="text-align:center;"><?php echo number_format($tong) ?> VND</th>
		<th width="100" style="text-align:center;"></th>
		<th width="50" style="text-align:center;"></th>
		<th width="60" style="text-align:center;"></th>
	</tr>
</table>
<form action="bill.php" method="post">
	<div class="row">
		<br>
	<h3 style="text-align:center;">THÔNG TIN NHẬN HÀNG</h3>
		<table align="center">
			<tr>
				<td width="20%">Họ Tên </td>
				<td style="text-align:center;"><input type="text" name="hoten" require></td>
			</tr>
			<tr>
				<td width="20%">Địa Chỉ </td>
				<td style="text-align:center;"><input type="text" name="diachi" require></td>
			</tr>
			<tr>
				<td width="20%">Điện Thoại </td>
				<td style="text-align:center;"><input type="text" name="dienthoai" require></td>
			</tr>
			<tr>
				<td width="20%">Email </td>
				<td style="text-align:center;"><input type="text" name="email" require></td>
			</tr>
			
		</table>
		<div style="text-align:center;">
		<br>
			<input  type="submit" value="Đặt Hàng" name="dathang">
		</div>
	</div>
</form>
<br>
<?php include "footer.html" ?>