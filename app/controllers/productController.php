<?php
require_once './app/models/productModel.php';
require_once './app/views/productView.php';

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
}