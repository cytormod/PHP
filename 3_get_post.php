<?php

/* --- $_GET & $_POST Superglobals --*/

// GET can be used for URLS and FORMS, $_POST can be used for ONLY FORMS

// We can pass data through urls and forms using the $_GET and $_POST superglobals.


// if(isset($_POST['submit'])) {
//     $name = htmlspecialchars($_POST['name']); 
//     $age = htmlspecialchars($_POST['age']);
//     echo $name;
//     echo $age;
// }

// ! Sanitize using filter_input()

if(isset ($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    // ! 3
    // $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);

}

?>

<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>? name= Sahil&age=30">CLick</a>

<!-- Action is the file where we want to submit the FORM TO -->
 <form action="<?php echo $_SERVER['PHP_SELF'];?>"method="POST">

 <div>
    <label for="name">Name: </label>
    <input type="text" name="name">
 </div>

 <div>
    <label for="age">Age: </label>
    <input type="text" name="age">
 </div>

 <input type="submit" value="Submit" name="submit">

 </form>
