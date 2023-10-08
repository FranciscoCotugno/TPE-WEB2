
<?php

class productView{

    public function viewHome(){
        require 'templates/header.phtml';
        require 'templates/home.phtml';
        require 'templates/footer.phtml';
    }
    
    public function viewCategoryes($categoryes){
        require 'templates/header.phtml';
        require 'templates/viewCategoryes.phtml';
    }

    public function viewAllProducts($products){
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
    
    public function viewAdministrar($products){
        require 'templates/header.phtml';
        require 'templates/adminProducts.phtml';
    }
}
