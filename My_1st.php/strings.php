
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    phpinfo();

    $string = "Hello World!";
    echo strlen($string);//Length of the string
    echo strpos($string, "o"); //getting the postition of the word or letter in the string
    echo strpos($string, "Wo");//check for more than one letters
    echo str_replace("World", "Daniel", $string); //? Replace the word
    echo strtolower($string);// Convert to lower
    echo strtoupper($string);//convert to Uppercase
    echo substr($string, 2, -2);
    echo explode(" ",$string); //? It is kind of split in JS. Here it is with " "
    print_r(explode(" ",$string)); 

    // !math
    $number = -5.5;
    echo abs($number); // Here it will give you 5.5
    echo round($number); // Here it is 6
    echo pow(2, 3); // Here it is 2^3;
    echo sqrt(16);
    echo rand(1, 100);
    $arr = ['apple', 'banana', 'orange'];
    $arr2 = ['Dragon, "Kiwi'];
    echo count($arr);// It will count the data inside the array.
    echo is_array($arr);// To check
    array_push($arr, 'kiwi');
    print_r($arr);
    arr_pop($array);
    print_r($arr);
    print_r(arr_reverse($array));// It will reverse the array
    print_r(array_merge($arr, $arr2));

    // !DATE AND TIME
    echo date("Y-m-d H:i:s");
    echo time();

    $date = "2023-04-11 0";
    echo strtotime($date);//It will not change time constantly, fix-time will be fromm 1970 till the time we have mentioned here

?>
</body>
</html>