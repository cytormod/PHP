<?php

$pwdSignup = "Sahil";

// password_hash($pwd, PASSWORD_DEFAULT);//it is inbuild function, and it will automatically do hashing for us.

$options = [
    'cost'=>12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);// Default has change to Bcrypt

$pwdLogin = "Sahil";
password_verify($pwdLogin, $hashedPwd);

if (password_verify($pwdLogin, $hashedPwd)) {
    echo "They are the same";
} else {
    echo "They are not the same!";
}

