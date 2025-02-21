<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $test = "Sahil";
    echo $test;

    function myFunction() {
        // Define a local Vatriable
        $localVar = "Hello World";
        // $test;// Error
        // Use the local Variable
        return $localVar; 
    }

    echo myFunction();

    function myFuction2($test) {
        // Define a local variable
        return $test;
    }
    echo myFunction2($test);

    // ! If you don't want to write the global variable name in the functions parameter, then you can use the superGlobal

    function myFunction3() {
        // Define a local global Variable
        return $GLOBALS["test"]; // True. and ther will be output
    };

    // ? Static Function
    function staticFunc() {
        // Declare a static Variable
        static $staticVar = 0; // Here static keyword means, that it can be save the output and if you use the same function again it will continue with it's operation fromt the last output result.

        // ? Let's say for example: call twice the function without static keyword: // OUTPUT: 1  1
        // ? call twice the function with the static Keyword, the Output will be: 1  2

        //Increment the static variable
        $staticVar++;

        // Use the Static Variable;
        return $staticVar;
    }    
    echo staticFunc();

    // ? Class Scope

    class MyClass{
        // ? Define a class Variable
        public $classVar = "Hello PHP";
        // ? Definw a class MEthod
        public function myMethod(){
            //  Use the class Variable
            echo $this->classVar; //Output: Hello PHP
        }
    }

    // ! Constants

    define("PI", 3.14); //Capital !Compulsory, it is just how all use in any prog lang
    define("NAME", "Sahil");
    define("IS_ADMIN", true);
    // echo IS_ADMIN;
    // echo PI;

    function test(){
        echo PI;
    }
    test()
    ?>
</body>
</html>