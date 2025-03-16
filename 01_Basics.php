<?php
echo "hi";


//print_r([1, 2, 3]);

// for day and the months

$day = date("F j"); // F = Month, j = day, H = hour

$t = date("H");

if($t < 12) {
    echo "Good Morning";
} elseif($t < 17) {
    echo "Good Afternoon";
} else {
    echo "Good Evening";
}

$post = ["First Post"];

if(empty($posts)) {
    echo $posts[0];
}else {
    echo "No Posts";
}


//Ternnary Operators

echo !empty($posts) ? $posts[0] : 'No Posts';

$firstPost = !empty($posts) ? $posts[0] : 'No Posts';

$firstPost = $posts[0] ?? null; 

echo $firstPost;

// Switches

$favcolor = 'red';
switch($favcolor) {
    case 'red':
        echo "Your favorite color is red";
        break;
    case 'blue':
        echo "Yout favourite color is blue";
        break;
    case 'yellow':
        echo "Your Favourite color is Yellow";
        break;
    default:
        echo "Your favourite color is Unique";
}

//Loops

// For Loop

/*
For Syntax Loop
    for (initialize; condition; increment) {
        code to be execure
    }
*/

for($x = 0; $x <= 10; $x++) {
    echo $x;
}
 
// While Loop

/*
While loop syntax
    while (conditioin) {
        code to be executed
    }
*/

$x = 1;

while($x <= 15) {
    echo "Number ${x} ";
    $x++;
}


// Do-while Loop

/* 
Do while Loop Syntax
do {
    code to be executed
} while (condition);

do...while Loop will always execute the block of code once, even if the condition is false.
 */

 $x = 1;
 do {
    echo "Number ".$x;
    $x++;
} while ($x <=5);

/*
For Each Loop  Syntax
forach ($array as $value) {
    code to be executed;
}
*/

$posts = ['First Post', 'Second Post', 'Third Post'];

// for($x = 0; $x < count($posts); $x++) {
//     echo $posts[$x];
// }

foreach($posts as $post) {
    echo $post;
}

// if you want to have access to the index

foreach($posts as $index => $post) {
    echo $index + 1 . '-'. $post. "<br>";
}

$person = [
    'firsName' => "Sahil",
    'lastName' => "CyTorIty",
    'email' => 'cytor@willrise.inthislife',
];

foreach($person as $key => $value) {
    echo "$key- $value";
}

function registerUser() {
    echo "User Registered";
}

registerUser();

//Argument and Parameters

// function register($email).. Here the word e-mail is an Argument 

// when you passing it as an argument, that's a parameter. For instance when you callout the function and Give the input value tha's the parameter

function sum($n1 = 4, $n2 = 5) {
    return $n1 + $n2;
}

$number = sum(5, 5);
// Search Array 
var_dump(in_array('apple', $fruits));// Bool value

//! Add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');// add at the end of the array
array_unshift($fruits, 'mango');// add at the beginning of the array

//! Remove from Array
array_pop($fruits);//take-off from the end
array_shift($fruits); //Remove from the beginning.
unset($fruits[2]);// Remove manually the specific Item you want it to be removed.

//! Split it into TWO Chunks
$chunked_array = array_chunk($fruits, 2);//here It can be didvided into the given number of the item, 
// for_ex, if we have 16 items, we say array_chunk($nameOfArray, 3). So, it will create 5 different arrays with the 3 items in it, which will make it 15 in total, and One remains as it is.

// !Concatinate /or/ Joining the array

$arr1 = [1,2,3];
$arr2 = [4, 5, 6];

$arr3 =array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

// ? Combine array with Key Value pair

$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'banana'];

$c = array_combine($a, $b);

print_r($c);// It will combine 2 arrays, one as a key and other as value.

// ? KEYS:If you want to have KEYS OF ARRAY.

$keys = $array_keys($c);
print_r($keys);// Here it will print the keys of an Array.

// ? FLIP: If we want to Flip the array
$flipped = array_flip($c);
print_r($flipped); // It will flip the array. Now keys became the value and the value became the keys.

// ? Range: Range of the array 

$numbers = range(1, 20);
print_r($numbers); // It will give the number range from 1 to 20.

// ? Array_map is a map methof like the one in JS.
// ?   

$newNumbers = array_map(function($number) {
    return "Number ${number}";
}, $numbers);

// ? Array_filter: Same as JS Filter
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
print_r($lessThan10);

//? array_reduce(): Same as Reduce in JS
$sum = array_reduce($numbers, fn($carry, $number) =>  $carry + $number);

var_dump($sum);

// ! String Function

$string = "Hello World";

// ? strlen: GEt the string of a length
echo strlen($string);

// ? strpos: Find the position of the first occurrence of a substring in a string.
echo strpos($string, 'o');

// ? strrpos: Find the position of the last occurence of a substring in a string
echo strrpos($string, 'o');

// ?strrev: Reverse a string
echo strrev($string);

// ? strtolower: Convert all characters to lowercase
echo strtolower($string);

// ?strtoupper(): Convert all characters to Uppercase
echo strtoupper($string);

// ? ucwords: Uppercase the first character of each word
echo ucwords($string);

// ?str_replace(): String Replace
echo str_replace('World', "Everyone", $string);

// ?substr: Return portion of a string specified by the offset and length
echo substr($string, 0, 5); //"HELLO "
echo substr($string, 5);//"WORLD ...."no end here, it goes on.

//? str_starts_with: Starts with
if (str_starts_with($string, "Hello")) {
    echo 'YES';
}

//? str_ends_with: Ends With
if (str_ends_with($string, 'ld')) {
    echo "YES";
}

// !!! FOR SECURITY PURPOSE

// ? htmlspecialchars: It will not run the JS code in any form but just will output whatever it is written in there. 
$string2 = '<script>alert(1)</script>';
echo htmlspecialchars(($string2));
echo htmlentities($string2); // ? htmlentities is preety much the same.

// ? printf() : Formatted Strings
printf('%s likes to %s', "Sahil", 'code' ); //%s: String
//OUTPUT: Sahil likes to code.

printf('1+1=%d', 1+1 ); //OUTPUT: It will give you as a 1+1 = 2;

printf('1+1=%f', 1+1); //Float: // 1+1 = 2.000000000







