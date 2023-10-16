<?php
require_once './app/models/adminModel.php';
require_once './app/views/productView.php';
require_once './app/helper/autHelper.php';
class adminController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new adminModel();
        $this->view = new productView();
    }

    public function removeProduct()
    {
        AuthHelper::verify();
        $id = $_POST['id'];
        if (empty($id)) {
            $this->view->showError("Elija un id");
            return;
        }
        $this->model->deleteProduct($id);
        header('location: ' . 'administrar');
    }

    public function removeCategory()
    {
        AuthHelper::verify();
        $categoryId = $_POST['Category_id'];
        if (empty($categoryId)) {
            $this->view->showError("Complete los campos solicitados");
            return;
        }
        $this->model->deleteCategory($categoryId);
        header('location: ' . 'administrar');
    }

    public function addProduct()
    {
        AuthHelper::verify();
        $Product_name = $_POST['Product_name'];
        $Milliliters = $_POST['Milliliters'];
        $Price = $_POST['Price'];
        $Category_id = $_POST['Category_id'];
        if (empty($Product_name) || empty($Milliliters) || empty($Price) || empty($Category_id)) {
            $this->view->showError("Complete los campos solicitados");
            return;
        }
        if ($Milliliters >= 1 && $Price >= 0) {
            $id = $this->model->insertProduct($Product_name, $Milliliters, $Price, $Category_id);
            header('location: ' . 'administrar');
        } else {
            $this->view->showError();
            return;
        }
    }

    public function showAdministrar()
    {
        AuthHelper::verify();
        $products = $this->model->getProducts();
        $categorys = $this->model->getCategory();
        $this->view->viewAdministrar($products, $categorys);
    }

    public function updateProduct()
    {
        AuthHelper::verify();
        $productName = $_POST['Product_name'];
        $milliliters = $_POST['Milliliters'];
        $price = $_POST['Price'];
        $categoryId = $_POST['Category_id'];
        $id = $_POST['id'];

        if (empty($productName) || empty($milliliters) || empty($price) || empty($categoryId) || empty($id)) {
            $this->view->showError();
            return;
        }
        if ($milliliters >= 1 && $price >= 0) {
            $id = $this->model->updateProduct($productName, $milliliters, $price, $categoryId, $id);
            header('location: ' . 'administrar');
        } else {
            $this->view->showError();
            return;
        }
    }

    public function addCategory()
    {
        AuthHelper::verify();
        $category = $_POST['Category_name'];
        if (empty($category)) {
            $this->view->showError("Complete los campos solicitados");
            return;
        }
        $this->model->insertCategory($category);
        header('location: ' . 'administrar');
    }

    public function updateCategory()
    {
        AuthHelper::verify();
        $categoryName = $_POST['Category_name'];
        $id = $_POST['Category_id'];
        if (empty($categoryName) || empty($id)) {
            $this->view->showError("Complete los campos solicitados");
            return;
        }
        $id = $this->model->updateCategory($categoryName, $id);
        header('location: ' . 'administrar');
    }
}
