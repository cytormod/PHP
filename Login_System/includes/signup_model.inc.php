<?php

declare(strict_types=1);
// require_once 'dbh.inc.php';

function get_username(object $pdo, string $username) {
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);// Here we are sending our query seprately from the actual data from the user, we now seperated the data from the actual query, which will prevent the SQL injection happening.
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;    
}

function get_email(object $pdo, string $email) {
    $query = "SELECT email FROM users WHERE email = :email;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result; 

}

function set_user(object $pdo, string $pwd, string $username, string $email){
    $query = 'INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);';
    
    $options = [
        'cost' => 12 //this => is assigned
    ];
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);


    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $hashedPwd);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
}
