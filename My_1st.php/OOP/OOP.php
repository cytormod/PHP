<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>

<form action="includes/signup.inc.php" method="post">
    <input type="text" name="username">
    <input type="password" name="pwd">
    <button>Signup</button>

<?php
require_once 'Classes/Car.php';
$car01 = new Car("Lambo", "green");
// echo $car01->vehicleTYpe
// echo $car01->getBrand();

$car01->setColor("yellow");
echo $car01->getColor()

?>

</body>
</html>