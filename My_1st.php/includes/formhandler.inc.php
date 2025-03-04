<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST["username"];
    $pwd = $_POST["Password"];
    $email = $_POST["email"];
    try{
        require_once "dbh-inc.php";
        // $query = "INSERT INTO users (username, pwd, email) VALUES ($username, $pwd, $email);";//1
        // $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);"; 
        //? 2 Here ? will act as a placeholder so we later on can actually go in and insert this data or bind the user data to this query after we submitted the query

        //? 3 Using name parameters, because it actually allows us to know inside this query here which data is supposed to be where?

        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";
        //? In name paramaeters it doesn't have to match up the orders

        $stmt = $pdo->prepare($query);//here we are defining the statement

        $stmt-> bindParam(":username", $username);// 3 Here now we have a name parameter bound to an actual data submitted by a user
        $stmt-> bindParam(":pwd", $pwd);
        $stmt-> bindParam(":email", $email);

        $stmt->execute();
        
        //! Here we will create an actual Statement which is a prepared statement that can actually prepare to query this QUERY inside the database.

        // $stmt = $pdo->prepare($query);//? 1 Now, we are submitting query to the database, so it's get run into the database and then afterwards we will say that now we are going to give the data that the user submitted

        // $stmt->execute([$username, $pwd, $email]); //2

        //! 1 Manually close the statement, and also the connection to our database

        $pdo = null;
        $stmt = null;

        header("Location: ../index3.php"); // ? We have send the user back to the front page and we have killed the script here

        die();
        //? There are 2 methods 1: die() 2: exit().
        //? The General rule of Thumb is, 
        // ! IF YOU ARE CLOSING OF THE SCRIPT THAT DOESN'T HAVE ANY SORT OF CONNECTION RUNNINF THEN JUST exit() BUT, 
        // ! IF THERE IS A CONNECTION INSIDE OF IT, THEN USE die(); 
    } catch (PDOException $e){
        die("Query failed: ".$e->getMessage());
    }
}

else{
    header("Location: ../index3.php");
}

