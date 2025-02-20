<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sayHello(string $name = "Anonymous",) {
        return "Hello" . $name ."!";
    }

    $test = sayHello("Gopani");
    echo $test;

    function calculator(int $num01, int $num02){
        $result = $num01 + $num02;
    }
    $test = calculator(2, 5);
    echo $test;

    // ? Global Sahil

    $globalCy = "Sahil";
    function globalCy() {
        global $globalCy;
        echo $globalCy;
    }
globalCy();

    ?>
</body>
</html>