<?php
declare(strict_types=1);


function is_username_wrong(bool|array $result)// Now, here we are accepting, either boolean or an array as a datatype of var result
{
    if(!$result) {
        return true;
    } else {
        return false;
    }
}

function is_password_wrong(string $pwd, string $hashedPwd){
    if (!password_verify($ped, $hashedPwd)){
        return true;
    } else {
        return false;
    }
}

function is_input_empty(string $username, string $pwd)
{
    if (empty($username) || empty($pwd)) {
        return true;
    } else {
        return false;
    }
}


