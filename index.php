<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    include 'Persons.php';
//    $person1 = new Persons();
//    $person1->age = 15;
//    echo $person1->group;
    echo Persons::getGroup();





?>
</body>
</html>
