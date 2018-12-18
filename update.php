<?php

session_start();

$m = $_POST['user_message'];

$edit_message = $_SESSION ['id'];

$pdo = new PDO("mysql:host=localhost; dbname=test3", "root", "");

$sql ="UPDATE messages SET user_message = :user_message WHERE message_id = :edit_message";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':edit_message',$edit_message);
$stmt->bindParam(':user_message',$m);
$stmt->execute();

header("Location: /show.php");



