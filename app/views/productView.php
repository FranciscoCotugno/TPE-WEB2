
<?php

class productView{

    public function viewHome(){
        require 'templates/header.phtml';
        require 'templates/home.phtml';
        require 'templates/footer.phtml';
    }
    
    public function viewCategorys($categorys){
        require 'templates/header.phtml';
        require 'templates/viewCategorys.phtml';
    }

    public function viewAllProducts($products, $categorys){
        require 'templates/viewAllProducts.phtml';
        require 'templates/footer.phtml';
    }

    public function viewProductsByCategory($products){
        require 'templates/showProductsCategory.phtml';
        require 'templates/footer.phtml';
    }
    public function showError(){
        require 'templates/showError.phtml';
    }
    
    public function viewAdministrar($products, $categorys){
        require 'templates/header.phtml';
        require 'templates/adminProducts.phtml';
    }
}
