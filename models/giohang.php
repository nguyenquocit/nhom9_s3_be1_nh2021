<?php
class GioHang extends Db{
    public function addCart($namesp, $image, $price, $soluong, $thanhtien){
        $sql = self::$connection->prepare("
        INSERT INTO `giohang`(`namesp`, `image`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES (?,?,?,?,?,2)");
        $sql->bind_param("ssiii", $namesp, $image, $price, $soluong, $thanhtien);
        return $sql->execute();
    }
}