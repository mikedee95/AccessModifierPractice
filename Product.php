<?php
//namespace Models;
//
//class Product
//{
//    private $name;
//    private $price;
//
//    public function __construct($_name = NULL, $_price = 0)
//    {
//        $this->name = $_name;
//        $this->price = $_price;
//    }
//
//    public function setName($_name)
//    {
//        $this->name = $_name;
//    }
//
//    public function getName(){
//        return $this->name;
//    }
//
//    public function setPrice($_price)
//    {
//        $this->price = $_price;
//    }
//
//    public function getPrice()
//    {
//        return $this->price;
//    }
//}

namespace Models;

class Product{
    private $name;
    private $price;

    public function __construct($_name = NULL, $_price = 0){
        $this->name = $_name;
        $this->price = $_price;
    }

    public function setName($_name)
    {
        $this->name = $_name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice($_price)
    {
        $this->price = $_price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}