<?php
var_dump($_GET);
die;
$id = $_GET['id'];
$user_name = $_POST['user_name'];
$message = $_POST['message'];


$pdo = new PDO("mysql:host=test2; dbname=test", "root", "");

$sql ="UPDATE messages SET WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id',$id);
$stmt->execute();
$rrt=$stmt->fetch();
var_dump($rrt);

die;
header("Location: /show.php"); exit;



