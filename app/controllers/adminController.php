<?php
require_once './app/models/adminModel.php';
require_once './app/views/productView.php';
require_once './app/helper/autHelper.php';
class adminController{
    private $model;
    private $view;

    public function __construct(){
        $this->model= new adminModel();
        $this->view= new productView();
    }

    public function removeProduct($id){
        AuthHelper::verify();
        $this->model->deleteProduct($id);
        header('location: '. 'administrar');
    }

    public function addProduct(){
        AuthHelper::verify();
        $Product_name= $_POST['Product_name'];
        $Milliliters= $_POST['Milliliters'];
        $Price= $_POST['Price'];
        $Category_id= $_POST['Category_id'];

        if(empty($Product_name)||empty($Milliliters)||empty($Price)||empty($Category_id)){
            $this->view->showError("Complete los campos solicitados");
            return;
        }

        $id= $this->model->insertProduct($Product_name, $Milliliters, $Price, $Category_id);

        if($id){
            header('location: '. 'administrar');
             
        }else{
            $this->view->showError("404 Error");
        }
        
    }
    
    public function showAdministrar(){
        AuthHelper::verify();
        $products = $this->model->getProducts();
        $categorys = $this->model->getCategory();
        $this->view->viewAdministrar($products, $categorys);
    }
    public function updateProduct(){
        $productName= $_POST['Product_name'];
        $milliliters= $_POST['Milliliters'];
        $price= $_POST['Price'];
        $categoryId= $_POST['Category_id'];
        $id=$_POST['id'];

        $id= $this->model->updateProduct($productName, $milliliters, $price, $categoryId,$id);
        
        /*if(empty($productName)||empty($milliliters)||empty($price)||empty($categoryId)||empty($id)){
            $this->view->showError("Complete todos los campos");
            return;
        }*/

        
        header('location: '. 'administrar');
    }
    
    public function removeCategory($id){
        AuthHelper::verify();
        $this->model->deleteCategory($id);
        header('location: '. 'administrar');
    }
    public function addCategory(){
        AuthHelper::verify();
        $category=$_POST['Category_name'];//momentaneo linkear con el form
        if(empty($category)){
            $this->view->showError("Complete los campos solicitados");
            return;
        }
        $id=$this->model->insertCategory($category);

        
        header('location: '. 'administrar');
    }
    public function updateCategory(){
        $categoryName= $_POST['Category_name'];//momentaneo linkear con el form
        $id=$_POST['id'];//momentaneo linkear con el form
        if(empty($categoryName)||empty($id)){
            $this->view->showError("Complete los campos solicitados");
            return;
        }
        $id= $this->model->updateCategory($categoryName, $id);
        
        header('location: '. 'administrar');
    }
     
}