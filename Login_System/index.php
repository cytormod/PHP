<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in System</title>
</head>
<body>
    <!-- MVC Pattern is good to learn -->

    <h3>Login</h3>

    <form action="includes/login.inc.php" method ="post">

    <input type="text" name="username" placeholder = "Username" id="">
    <input type="password" name="pwd" placeholder = "Password" id="">
    <button>Login</button>

    </form>

    <h3>Signup</h3>

    <form action="includes/signup.inc.php" method ="post">
    <?php
    signup_inputs();
    ?>

    <!-- <input type="text" name="username" placeholder = "Username" id="">
    <input type="password" name="pwd" placeholder = "Password" id="">
    <input type="text" name = "email" placeholder = "E-mail"> -->
    <button>Signup</button> 

    </form>

    <?php
    check_signup_errors();
    ?>

</body>
</html>
