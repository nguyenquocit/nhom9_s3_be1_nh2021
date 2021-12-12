<?php
class User extends Db{
    public function CheckLogin($username, $password)
    {
        $sql = self::$connection->prepare("SELECT * FROM user WHERE `user_name` = ? AND `user_password` = ?");
        $password = md5($password);
        $sql->bind_param("ss", $username, $password);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}