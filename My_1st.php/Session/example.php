<?php

session_start();
unset($_SESSION["username"]);
session_unset(); //Purge all the session data

session_destroy();//we are stopping from running the session again.
// session_destroy() unsets the sessionId on the server, and not the session ID cookie in the browser. 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    echo $_SESSION["username"]
?>
    
</body>
</html>