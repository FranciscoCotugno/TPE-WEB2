<?php
require_once './app/models/productModel.php';
require_once './app/views/productView.php';
require_once './app/helper/autHelper.php';
class adminController{
    private $model;
    private $view;

    public function __construct(){
        $this->model= new productModel();
        $this->view= new productView();
    }

    public function removeProduct($id){
        $this->model->deleteProduct($id);
        header('location: '. BASE_URL);//redirigis al home
    }

    public function addProduct(){
        $Product_name= $_POST['Product_name'];
        $Milliliters= $_POST['Milliliters'];
        $Price= $_POST['price'];
        $Category_id= $_POST['Category_id'];

        if(empty($Product_name)||empty($Milliliters)||empty($Price)||empty($Category_id)){
            $this->view->showError("Complete los campos solicitados");
            return;
        }

        $id= $this->model->insertProduct($Product_name, $Milliliters, $Price, $Category_id);

        if($id){
            header('location: '. BASE_URL);
             
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
        
        
        header('location: '. 'administrar');
    }
}