
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // ? For Loop
    $test = 5;
    for ($i = 0; $i <= test; $i++) {
        echo "This is iteration Number". $i . "<br>";
    }

    // ? While Loop
    $test2 = 5;
    $boolean = true;
    while ($test2 < 5) {
        echo $test2;
        $test2 ++;
    }

    // ? Do-While loop
    do{
        echo $test2;
        $test2++;
    } while ( $test< 10 );
    
    $fruits = array("Apple", 'Banana', 'Grapes');
    foreach ($fruits as $fruit) {
        echo "This is a " . $fruit."<br>";
    }

    $fruits2 = array("Apple", 'Banana', 'Grapes');
    foreach ($fruits2 as $fruit=>$color) {
        echo "This is a ". $fruit . ", that has a color of ".$color, "<br>";
    }

    ?>
</body>
</html>