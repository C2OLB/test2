


<?php
// 1. Подключиться к БД
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
// CRUD
//2. Подготовить запрос
$sql = "SELECT * FROM messages";
$statement = $pdo->prepare($sql);
$result = $statement->execute();
$messages = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <tr>
            <?php foreach($messages as $message):?>
            <h1><?= $message['userName'];?></h1> <i>says:</i>
            <h2>
                <?= $message['content'];?>
            </h2>
            <?php endforeach;?>
            <a href="/">Go Back</a>
            </tr>

        </div>
    </div>
</div>
</body>
</html>