<?php   
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products,manufactures,protypes
        WHERE products.manu_id = manufactures.manu_id 
        AND products.type_id = protypes.type_id
        ORDER BY `id` DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i",$id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function getFeaturedProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `feature` = 1");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s",$keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function getProductByManuId($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id = ?");
        $sql->bind_param("i", $manu_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function addProduct($name,$manu_id,$type_id,$price,$image,$desc, $feature){
        $sql = self::$connection->prepare("
        INSERT INTO `products`(`name`, `manu_id`, `type_id`, `price`, `image`, `descriotion`, `feature`) VALUES(?,?,?,?,?,?,?)");
        $sql->bind_param("siiissi", $name,$manu_id,$type_id,$price,$image,$desc,$feature);
        return $sql->execute();
    }
    public function delProducts($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE `id` = ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
}