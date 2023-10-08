<?php

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
    
    public function getProductsByCategory($id){
        $query = $this->db ->prepare("SELECT * FROM products WHERE Category_id =?");
        $query ->execute([$id]);

        $tasks = $query->fetchAll(PDO::FETCH_OBJ);

        return $tasks;
    }
    function deleteProduct($id){
        $query = $this->db-> prepare('DELETE FROM products WHERE Product_id=?');
        $query-> execute([$id]);
    }
}

