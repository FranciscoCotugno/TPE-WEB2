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
    public function showCategorys(){
        $categorys = $this->model->getCategorys();
        $this->view->viewCategorys($categorys);
    }
    public function showAllProducts(){
        $products = $this->model->getProducts();
        $categorys = $this->model->getCategorys();
        $this->view->viewAllProducts($products, $categorys);
    }
    public function showProductsByCategory($id){
        $products = $this->model->getProductsByCategory($id);
        $this->view->viewProductsByCategory($products);
    }
    public function show(){
        $categorys = $this->model->nameCategory();
        $this->view->viewCategorys($categorys);
        
    }
    
    public function showError(){
        $this->view->showError();
    }
    
}