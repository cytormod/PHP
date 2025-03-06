<?php

session_start();



$_SESSION["username"] = "Sahil";//which means that this information is going to get remembered on your server on any page that has session_start() at the top of the page.

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Cookie is the information that is stored directly locally inside the browser and not inside the Server -->
    <!-- Whenever you start a session inside your website you actually generate something called SESSION_ID.
    
    Server has to pace the session_id Cookie on our browser to figure out which user we are, and which session_variables we are assign to-->

    <?php
    echo $_SESSION["username"]
    ?>

    
</body>
</html>