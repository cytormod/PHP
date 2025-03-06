<?php

ini_set('session.use_only_cookies', 1);//this is how we can go to our ini file and change our setting through code
ini_set('session.use_strict_mode', 1);//It will make sure that the website use only the session_id that has actually created by our server inside the website and it will also go and make our session_id more complex when they are created, which will make it difficult for people to guess our session_id

session-set_cookie_params([
    'lifetime' => 1800, //it will go inside the cookie, and after certain amount of time is pass inside the website, we make sure to delete this cookies.
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true,
]);// we can set here bunch of parameters

session_start();

session_regenerate_id(true);
session_create_id(); 

if (!isset($_SESSION['last-regeneration'])){
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
}else {
    $interval = 60*30;
    if (time() - $_SESSION['last-regeneration'] >= $interval) {

        session_regenrate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
}
