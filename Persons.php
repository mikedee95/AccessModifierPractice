<?php


class Persons
{
    private $name;
    private $age;
    public static $group = 'C0820H1';

    public static function getGroup(){
        return self::$group;

    }

    public function __get($property)
    {
        return $property;
    }

    public function __set($property,$value){
        $this->$property = $value;

    }
//    function setAge($_age){
//        $this->age = $_age;
//    }
//    function setName($_name){
//        $this->name = $_name;
//    }
//    function getAge(){
//        return $this->age;
//    }
//    function getName(){
//        return $this->name;
//    }

}