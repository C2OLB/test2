<?php


$pdo = new PDO("mysql:host=test2; dbname=test", "root", "");
$sql = "INSERT INTO messages (userName, content) VALUES (:userName, :content)";
$statement = $pdo->prepare($sql);
$statement->execute($_POST);

header("Location: /show.php"); exit;
