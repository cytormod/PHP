<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $fruits = array("Apple", 'banana', 'cherry')
    $fruits = ["Apple", "Banana", "Cherry"];

    // unset($fruits[1]);
    array_splice($fruits, 0, 2);
    echo $fruits[0]; //? Accessing
    $fruits[] = "Orange"; //? Assigning the new data.

    $fruits[1] = "Kiwi"; //? Replacing the value

    // --------------KEYS----------
    $tasks = [
        "laundry" => "Daniel",
        "trash" => "Sahil",
        "Dishes" => "Bella",
    ];

    $tasks['dusting'] = 'Tara';
    array_push($fruits, 'Mango');
    print_r($fruits);

    echo $tasks["laundry"];
    print_r($tasks); //?? to check the full array, what's inside the problem

    echo count($tasks); //?This will count an array, how many

    sort($task);
    print_r($tasks);

    $food = [
        array('apple', 'mango'),
        'banana', 'cherry',
        "fruits" => array('apple', 'banana', 'cherry'),
        'meat' => array('no', 'thinking'),
        'vegetables' => array('Cucumber', 'carrot'),
    ];

    echo $food['vegetables'][0];

    ?>
</body>
</html>