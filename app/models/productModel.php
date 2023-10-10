<?php
require ('app/models/config.php');

class productModel{
    private $db;
    
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=tpeweb2;charset=utf8', 'root', '');
    }

    public function getCategorys(){
        $query = $this->db->prepare('SELECT * FROM categorys');
        $query->execute();

        $categorys = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $categorys;
    }

    public function getProducts(){
        $query = $this->db ->prepare('SELECT * FROM products');
        $query ->execute();
    
        $tasks = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $tasks;
    }

    public function nameCategory(){
        $query = $this->db ->prepare("SELECT * FROM categorys WHERE Category_id ");
        $query ->execute();

        $tasks = $query->fetchAll(PDO::FETCH_OBJ);

        return $tasks;
    }
    
    public function getCategory(){
        $query = $this->db ->prepare('SELECT * FROM categorys');
        $query ->execute();
    
        $tasks = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $tasks;
    }

    public function getProductsByCategory($id){
        $query = $this->db ->prepare("SELECT * FROM products WHERE Category_id =?");
        $query ->execute([$id]);

        $id = $query->fetchAll(PDO::FETCH_OBJ);

        return $id;
    }
    function deleteProduct($id){
        $query = $this->db-> prepare('DELETE FROM products WHERE Product_id=?');
        $query-> execute([$id]);
    }

    function insertProduct($Product_name, $Milliliters, $Price,$Category_id){

        $query = $this->db->prepare('INSERT INTO products (Product_name, Milliliters, Price,Category_id) VALUES(?,?,?,?)');
        $query->execute([$Product_name, $Milliliters, $Price,$Category_id]);
    
        return $this->db ->lastInsertId();
    }

    function updateProduct($product_name, $Milliliters, $Price, $Category_id,$id){
        $query = $this->db->prepare('UPDATE `products` SET `Product_name` = ?, `Milliliters` = ?, `Price` = ?, Category_id=? WHERE `products`.`Product_id` = ?;');
        $query->execute([$product_name, $Milliliters, $Price, $Category_id,$id]);
    }
    
}

