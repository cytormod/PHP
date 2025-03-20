<?php

// ------SESSIONS---------
/**
 * Sessions are a way to store information (in varaibles) to be used across multiple pages.
 * Unlike cookies, session are stored on the server.
 * 
 * Session is where you will use the user's id, you can use their id to get their BlogPost, or receipes or whatever the user has.
 * 
 */

session_start();

if(isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];

    if($username == 'sahil' && $password == 'password'){
        // ? If condition matched then we will create the session variable
        $_SESSION['username'] = $username;
        header('Location: /PHP_TravisMedia/extras/dashboard.php');
    } else {
        echo "Incorrect Login";
    }

    echo $username;
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

<div>
    <label for="username">Username: </label>
    <input type="text" name='username'>
</div>

<div>
    <label for="password">Password: </label>
    <input type="password" name="password">
</div>

<input type="submit" value="Submit" name="submit">

</form>

