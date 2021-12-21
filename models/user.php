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

    public function CheckLoginRole($username, $password, $role)
    {
        $sql = self::$connection->prepare("SELECT * FROM user WHERE `user_name` = ? AND `user_password` = ? AND `role_id` = ?");
        $password = md5($password);
        $sql->bind_param("ssi", $username, $password, $role);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function CheckRolo($role)
    {
        $sql = self::$connection->prepare("SELECT * FROM user WHERE `role_id` = ?");
        $password = md5($password);
        $sql->bind_param("i", $role);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function addUser($user_name, $user_password){
        $sql = self::$connection->prepare("
        INSERT INTO `user`(`user_name`, `user_password`, `role_id`) VALUES (?,?,2)");
        $user_password = md5($user_password);
        $sql->bind_param("ss", $user_name, $user_password);
        return $sql->execute();
    }
}