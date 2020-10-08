<?php
//include_once "Product.php";
//include_once "ProductManager.php";
//
//use Services\ProductManager;
//use Models\Product;
//
//$productManager = new ProductManager();
//$productManager -> add(new Product("laptop"));
//$productManager ->add(new Product("Mobile"));
//
//$products = $productManager->getProduct();
//    foreach ($products as $product){
//        echo $product ->getName()."<br/>";
//    }

include_once "Product.php";
include_once "ProductManager.php";

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();
$productManager->add(new Product('laptop',1000));
$productManager->add(new Product('mobile',2000));

$products = $productManager->getProduct();
        foreach ($products as $product){
            echo $product->getName()."<br/>";
        }