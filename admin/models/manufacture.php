<?php 
class Manufacture extends Db{
    public function getAllManus()
    {
        $sql = self::$connection->prepare("SELECT * FROM `manufactures`");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function addManu($manu_name){
        $sql = self::$connection->prepare("
        INSERT INTO `manufactures`(`manu_name`) VALUES (?)");
        $sql->bind_param("s", $manu_name);
        return $sql->execute();
    }
    public function getManufactureByManuId($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `manufactures` WHERE `manu_id` = ?");
        $sql->bind_param("i", $manu_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function editManu($manu_name, $manu_id){
        $sql = self::$connection->prepare(" UPDATE `manufactures` SET `manu_name`= ? WHERE `manu_id` = ?");
        $sql->bind_param("si", $manu_name,$manu_id);
        //var_dump("UPDATE `products` SET `name`= $name,`manu_id`= $manu_id,`type_id`= $type_id,`price`= $price,`image`= $image,`descriotion`= $desc,`feature`= $feature WHERE `id` = $id");
        //die();
        return $sql->execute();
    }

    public function delManu($manu_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE `manu_id` = ?");
        $sql->bind_param("i", $manu_id);
        return $sql->execute();
    }
}