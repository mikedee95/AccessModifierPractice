<?php
//
//
//class Application
//{
//        private static $instance;
//
//        public function __construct(){
//
//        }
//
//        public static function getInstance(){
//            if (self::$instance === null){
//                self::$instance = new Application();
//                echo 'hallo';
//            }
//            return self::$instance;
//        }
//}
//
//$app1 = Application::getInstance();
//$app2 = Application::getInstance();
//$app3 = new Application();

class Application{
    private static $instance;

    public function __construct(){

    }

    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new Application();
            echo 'Hallo';
        }
        return self::$instance;
    }

}
//$app1 = Application::getInstance();
//
//$app2 = Application::getInstance();
$app1 = new Application();
Application::getInstance();