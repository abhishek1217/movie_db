<?php

//Using PDO provided by php for database connection.
try {
    $pdo = new PDO("mysql:host=localhost;port=3306", 'root', '');

    $pdo->exec("CREATE DATABASE mulesoft;");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    die("DB ERROR: " . $e->getMessage());
}

?>