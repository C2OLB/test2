


<?php

$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$sql = "SELECT * FROM users JOIN messages ON users.id = messages.message_id";
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
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">message</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($messages as $message):?>
                <tr>
                    <th scope="row"><?=$message['id'];?></th>
                    <td scope="row"><?=$message['user_name'];?></td>
                    <td scope="row"><?=$message['message'];?></td>
                </tr>

                <?php endforeach;?>
                </tbody>
            </table>


        </div>
    </div>
</div>
</body>
</html>
