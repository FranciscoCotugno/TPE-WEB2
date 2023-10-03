<?php

class productModel{
    private $db;
    
    public function __construct(){
        $this->db= new PDO('mysql:host=localhost;dbname=tpeweb2;charset=utf8', 'root', '');
    }

    public function getCategorys(){
        $query= $this->db->prepare('SELECT * FROM categorys');
        $query->execute();

        $categorys =$query->fetchAll(PDO::FETCH_OBJ);
    
        return $categorys;
    }

    public function getAllProducts(){
        $query= $this->db->prepare('SELECT * FROM products');
        $query->execute();

        $products =$query->fetchAll(PDO::FETCH_OBJ);
    
        return $products;
    }
}