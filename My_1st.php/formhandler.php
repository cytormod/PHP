<?php

// var_dump($_SERVER["REQUEST_METHOD"]);

// ! Not suppose to do like this do it in another way)
// if (isset($_POST['submit'])){
// }

// ! Chances of XSS
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $firstname = $_POST["firstname"];
// }

// ? INSTEAD

if($_SERVER['REQUEST_METHOD']=="POST") {
    // ? htmlspecialchars: takes your data, converts your HTML entities, which means you can no longer inject code inside the fields that are posted inside the form.
    // Those are sanitized we don't see it as code, but we will see it as HTML Entities, which means it is not going to be picked up as code
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $favouritepet = htmlspecialchars($_POST['favouritepet']);

    if(empty($firstname)) {
        exit();
        header("Location: ../index.php");
    }

    echo "These are the data, that the user submitted:\n";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;

    // header("Location: ../index.php");
}else {
    // header("Location: ../index.php");
}
