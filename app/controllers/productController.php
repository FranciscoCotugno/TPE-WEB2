<?php
require_once './app/models/productModel.php';
require_once './app/views/productView.php';
require_once './app/helper/autHelper.php';
class controllerProduct{
    private $model;
    private $view;

    public function __construct(){
        $this->model= new productModel();
        $this->view= new productView();
    }

    public function homeController (){
        $this->view->viewHome();
    }
    public function showCategoryes(){
        $categoryes= $this->model->getCategorys();
        $this->view->viewCategoryes($categoryes);
    }
    public function showAllProducts(){
        $products = $this->model->getProducts();
        $this->view->viewAllProducts($products);
    }
    public function showProductsByCategory($id){
        $products = $this->model->getProductsByCategory($id);
        $this->view->viewProductsByCategory($products);
    }
    public function show(){
        $categoryes= $this->model->nameCategory();
        $this->view->viewCategoryes($categoryes);
        
    }
    
    public function showError(){
        $this->view->showError();
    }
    
}