<?php

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $username = $_POST["username"];
    $pwd = $_POST['pwd'];
    // $email = $_POST['email'];
    // $id = $_POST['id'];

    try{
        require_once 'dbh-inc.php';

        $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $pwd);
        
        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index4.php");

        die();
    }catch(PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index4.php");
}