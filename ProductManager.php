<?php namespace Services;


//class ProductManager
//{
//    private $products;
//
//    public function __construct(){
//        $this->products = [];
//    }
//
//    public function add($_product)
//    {
//        $this->products[] = $_product;
//    }
//
//    public function getProduct(){
//        return $this->products;
//    }
//}

class ProductManager{
    private $products;

    public function __construct(){
        $this->products = [];
    }

    public function add($_product)
    {
        $this->products[]= $_product;
    }

    public function getProduct()
    {
        return $this->products;
    }
}