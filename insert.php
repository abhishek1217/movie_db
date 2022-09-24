<?php

include "dbConnection.php";

if(isset($_POST['name']) && isset($_POST['actor']) && isset($_POST['actress']) && isset($_POST['year']) && isset($_POST['director'])){
    $stmt = "INSERT INTO Movies ( movie_name, lead_actor, lead_actress, year_of_release, director_name ) VALUES (:nm, :la, :lac, :year, :dir)";
    $sql = $pdo->prepare($stmt);

    $sql->execute([
        ':nm' => $_POST['name'],
        ':la' => $_POST['actor'],
        ':lac' => $_POST['actress'],
        ':year' => $_POST['year'],
        ':dir' => $_POST['director']
    ]);
    header('Location: insert.php');
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion</title>
</head>
<body>
    <h3>Insertion of Data</h3>
    <!-- To store details into the Movies table. -->
    <form method="post">
        <label for="name">Movie Name</label>
        <input type="text" name="name"/>

        <label for="actor">Lead Actor</label>
        <input type="text" name="actor"/>

        <label for="actress">Lead Actress</label>
        <input type="text" name="actress"/>

        <label for="year">Year of Release</label>
        <input type="number" name="year"/>

        <label for="director">Director</label>
        <input type="text" name="director"/>

        <input type="submit" value="Insert">
    </form>
</body>
</html>