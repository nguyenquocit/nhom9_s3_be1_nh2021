<?php 
class Protype extends Db{
    public function getAllProtype()
    {
        $sql = self::$connection->prepare("SELECT * FROM `protypes`");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function addType($type_name){
        $sql = self::$connection->prepare("
        INSERT INTO `protypes`(`type_name`) VALUES (?)");
        $sql->bind_param("s", $type_name);
        return $sql->execute();
    }

    public function getProtypeByTypeId($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `protypes` WHERE `type_id` = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function editType($type_name, $type_id){
        $sql = self::$connection->prepare(" UPDATE `protypes` SET `type_name`= ? WHERE `type_id` = ?");
        $sql->bind_param("si", $type_name,$type_id);
        //var_dump("UPDATE `products` SET `name`= $name,`manu_id`= $manu_id,`type_id`= $type_id,`price`= $price,`image`= $image,`descriotion`= $desc,`feature`= $feature WHERE `id` = $id");
        //die();
        return $sql->execute();
    }

    public function delType($type_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `protypes` WHERE `type_id` = ?");
        $sql->bind_param("i", $type_id);
        return $sql->execute();
    }
}