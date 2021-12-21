<?php   
class Role extends Db
{
    public function getAllRole()
    {
        $sql = self::$connection->prepare("SELECT * FROM `role` ");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}