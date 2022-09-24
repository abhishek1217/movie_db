<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    <title>Table Contents</title>
</head>
<body>
    <?php

    include "dbConnection.php";

    $sql = $pdo->query("Select * from Movies");

    echo "<table >";
    echo "<tr><th>Name</th><th>Lead Actor</th><th>Lead Actress</th><th>Year of Release</th><th>Director</th></tr>";
    while($row = $sql->fetch(PDO::FETCH_ASSOC)){
        echo("<tr><td>");
        echo(htmlentities($row['movie_name']));
        echo("</td><td>");
        echo(htmlentities($row['lead_actor']));
        echo("</td><td>");
        echo(htmlentities($row['lead_actress']));
        echo('</td><td>');
        echo(htmlentities($row['year_of_release']));
        echo('</td><td>');
        echo(htmlentities($row['director_name']));
        echo('</td></tr>');
    }
    ?>
</body>
</html>


