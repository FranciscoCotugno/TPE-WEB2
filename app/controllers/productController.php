<?php
require_once './app/models/productModel.php';
require_once './app/views/productView.php';
require_once './app/helper/autHelper.php';
class controllerTask{
    private $model;
    private $view;

    public function __construct(){
       
        $this->model= new productModel();
        $this->view= new productView();
    }

    public function homeController (){
        require ('templates/header.phtml');
        require ('templates/footer.phtml');
    }
    public function showCategoryes(){
        $categoryes= $this->model->getCategorys();
        $this->view->viewCategoryes($categoryes);
        
    }
    public function showProducts(){
        AuthHelper::verify();
        $products = $this->model->getProducts();
        $this->view->showProducts($products);
    }
    public function showProductsByCategory($id){
        AuthHelper::verify();

        $products = $this->model->getProductsByCategory($id);
        
        $this->view->showProductsCategory($products);
    }
    
    public function showError(){
        $this->view->showError("Error 404");
    }
    
    
}