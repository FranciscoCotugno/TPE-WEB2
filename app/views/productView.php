
<?php

class productView{
    
    public function viewCategoryes($categoryes){
        require 'templates/viewCategoryes.phtml';
    }

    public function showProducts($products){
        require 'templates/viewAllProducts.phtml';
    }

    public function showProductsCategory($products){
        require 'templates/showProductsCategory.phtml';

    }
    public function showError($error){
        require 'templates/showError.phtml';
    }
    
}
