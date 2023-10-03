<?php

class productView{
    public function viewCategoryes($categoryes){
        require 'templates/viewCategoryes.phtml';
    }

    public function viewAllProducts($products){
        require 'templates/viewAllProducts.phtml';
    }
}
