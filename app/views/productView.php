
<?php

class productView{

    public function viewHome(){
        require 'templates/header.phtml';
        require 'templates/home.phtml';
        require 'templates/footer.phtml';
    }
    
    public function viewProducts($products, $categorys){
        require 'templates/header.phtml';
        require 'templates/products.phtml';
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
