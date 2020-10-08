<?php

class Application{
    private $name;
    public static $count = 0;

    public function __construct($_name)
    {
        $this->name = $_name;
        self::$count++;
    }

    public function __toString()
    {
        return $this->name;
    }

}

echo 'The number of application is'. Application::$count.'<br/>';
$app1 = new Application('App1');
echo 'The number of application is'. Application::$count.'<br/>';
$app2 = new Application('App2');
echo 'The number of application is'. Application::$count.'<br/>';

echo $app1;
echo $app2;