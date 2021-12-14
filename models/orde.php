<?php   
class Order extends Db
{
    public function orderProduct($name ,$image, $price){
        $sql = self::$connection->prepare("
        INSERT INTO `giohang`(`name`, `image`, `price`) VALUES (?,?,?)");
        $sql->bind_param("ssi", $name ,$image, $price);
        return $sql->execute();
    }
}
?>