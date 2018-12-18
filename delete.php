<?php


$del_message = $_GET ['id'];



$pdo = new PDO("mysql:host=localhost; dbname=test3", "root", "");

$sql = "DELETE FROM messages WHERE message_id = :del_message";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':del_message',$del_message);
$stmt->execute();


header("Location: /show.php"); exit;

?>