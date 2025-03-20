<?php

// --------__Exception--------
/**
 * PHP has an exception model similar to that of other programming languages. An exception can be thrown, and cauught("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
 */

 function inverse($x) {
    if(!$x) {
        throw new Exception('Division by zero');
    }

    return 1/$x;
 }

//  try...catch helps to run the code further, even there is an unexpected input, it will just show what is the error, and will not stop the whole, page from loading.

 try {
     echo inverse(10);
    echo inverse(0);
 } catch (Exception $e) {
    echo "Caught Exception", $e->getMessage(), ' '; 
 } finally{
    echo "First Finally";
 }




 echo "hello World";
