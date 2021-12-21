<?php
class Bill extends Db{
    public function addBill($name, $address, $tel, $email){
        $sql = self::$connection->prepare("
        INSERT INTO `tbl_bill`(`name`, `address`, `tel`, `email`) VALUES (?,?,?,?)");
        $sql->bind_param("ssis", $name, $address, $tel, $email);
        return $sql->execute();
    }
}