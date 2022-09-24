<?php

include "dbConnection.php";

$sql = $pdo->query("CREATE TABLE IF NOT EXISTS Movies (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    movie_name VARCHAR(30) NOT NULL,
    lead_actor VARCHAR(30) NOT NULL,
    lead_actress VARCHAR(30) NOT NULL,
    year_of_release INT(4) NOT NULL,
    director_name VARCHAR(30) NOT NULL
)");

echo "<h3>Movie Table created successfully.</h3>";
?>