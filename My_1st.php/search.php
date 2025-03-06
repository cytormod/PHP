<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];
    
    try {
        require_once "includes/dbh-inc.php";

        $query = "SELECT * FROM commentss WHERE username = :usersearch;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch", $userSearch);
    
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;

        // header("Location: ../index5.php");
        // die();

    }catch(PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index5.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <h3>Search Results: </h3>
    
    <?php 
    if(empty($results)) {
        echo "<div>";
        echo "<p> There were no Results!</p>";
        echo "</div>";
    }
    else{
        // var_dump($results);
        foreach ($results as $row) {
            echo "<div>";
            echo "<p>" . htmlspecialchars($row["username"]) . "</p>";
            echo "<h4>" . htmlspecialchars($row['comment_text']) . "</h4>";//inserting data from our website into the database, we santize here.
            echo "<p>" . htmlspecialchars($row["created_at"]) ."</p>";

            echo "/<div>";
             
        }

    }
    ?>
</body>
</html>
