<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php if(true) {?>
        <p>Some HTML text.</p>
        <?php
    }?> -->
    <!-- echo"This is text written in PHP." -->
    <!-- // We don't incluse the closing tag "?> -->

    <p>This is a <?php echo" Awesome" ?>paragraph!</p>
    <?php echo " This is also a Paagraph!1"?>

    <!-- ! variables -->
     <?php
     $name = "Sahil Gopani";
     echo $name;

    //  DATA
    $string = "Sahil";
    $int = 123;
    $float = 2.553;
    $bool = true;

    // Array Type
    $array = array("Sahil", "Shankar", "Hanuman", "Ram");
    $names = ["Sahil", "Shiv", "Hanuman", "Ram"];

    // Object Type
    // $object = null;

?>


<p>
    Hi! My name is <?php echo $name ?>, and I am learning PHP!  
</p>

<!-- Built-in Super Globals -->
 <!-- You will reference it by Dollar sign with a under_score followed by with the capitalized word -->
<?php
echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo $_SERVER["PHP_SELF"];
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo $_SERVER["REQUEST_METHOD"];
?>

<!-- GET METHOD -->
<?php
echo $_GET['name']; //we can get access to the bunch of data with this GET METHOD

echo $_GET['eyecolor'];
//  Request will look for GET, POST AND COOKIE METHOD, when it comes to looking for the data inside the website

// FILES
echo $_FILES['name'];

// Cookies: It is a small file that your server embeddes in your users computer which means that we have bunch of information that we can save on the user's computer and using this superGlobal we can actually store or grab information about cokkie inside our website 
echo $_COOKIE['name'];

// SESSION:
$_SESSION['username'] = "Gopani";
echo $_SESSION['username'];

$_ENV[''];

// String Operators
$a = "Hello";
$b = "World";
$c = $a . " " . $b;
echo $c;

// Arithmetic Operator

echo 1 + 2;
echo 1 - 2;
echo 1 / 2;
echo 10 % 3;
echo 10 ** 3;
echo 1 + 2 * 4;
echo (1 + 2) * 4;

// Assignment Operators

$a = 2;
$a += 2;

// Comparison Operator
// ==, <, >, <=, >=, ===, !=

// Logical Operators
// and &&, or ||

$bool = true;

$result = match($a) {
    1 => "Variable a is 1",
    2 => "Variable a is 2",
    1, 2, 3 => "Variable last is 1, 2, oder 3",
    default => 'NONE',
};

echo $result;

switch ($a) {
    case 1:
        echo 'The first case is Correct!';
        break;

    case 3:
        echo 'The first case is Correct!';
        break;

    default:
        echo "None";
    
}

if ($a < $b && !$bool) {
    echo "First Condition is true";
} elseif ($a < $b && $bool) {
    echo "Second condition is true.";
}else{
    echo "No";
}

?>

</body>
</html>