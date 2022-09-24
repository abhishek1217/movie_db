 <?php

//Using PDO provided by php for database connection.
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=mulesoft','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>