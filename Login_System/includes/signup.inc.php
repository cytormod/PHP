<?php

if ($_SERVER["REQUEST_METHOD"]==="POST") {

    $username = $_POST["username"];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    // htmlspecialchars()//! Not a good practise until and unless you don't output something in your website or store something in your website

    try {
        //code...

        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        // ERROR HANDLERS

        $errors = [];

        if(is_input_empty($username, $pwd, $email)) {
            $errors["empty_input"] = "Fill in all fields1!";
        }
        if (is_email_invalid($email)) {   
            $errors["invalid_email"] = "Invalid email used!";
        }
        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Username already taken!";
        }
        if(is_email_registered($pdo, $email)) {
            $errors["email_used"] = "Email already registered!";
        }

        require_once 'config_session.inc.php'; //? We could have done session_start() but this is more secure way, because we have assign all the security parameters in the config_session.inc,php file
        
        if($errors){// This will return true, if there is data instide the array, and if there is no data inside the array, it will return false.
            $_SESSION["errors_signup"] = $errors;

            $signupData = [
                "username" => $username,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signupData;

            header("Location: ../index.php");
            die();
        }

        create_user($pdo, $pwd, $username, $email);

        header("Location: ../index.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
    die();
}