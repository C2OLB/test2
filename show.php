


<?php

$pdo = new PDO("mysql:host=localhost; dbname=test3", "root", "");

$sql = "SELECT * FROM messages m INNER JOIN users u ON m.user_id = u.user_id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="container">
    <form action="search.php" method="post">
        <input name="search_name" placeholder="Search here..." type="search">
        <button type="submit">Search</button>

    </form>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">message</th>
                    <th scope="col">update</th>
                    <th scope="col">delete</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($messages as $message):?>
                    <tr>
                        <td scope="row"><?=$message['user_id'];?></td>
                        <td scope="row"><?=$message['user_name'];?></td>
                        <td scope="row"><?=$message['user_message'];?></td>
                        <td scope="row">
                            <a href="edit.php?id=<?= $message['message_id'];?>" class="btn btn-info">update
                            </a></td>
                        <td scope="row">
                            <a href="delete.php?id=<?= $message['message_id'];?>" class="btn btn-warning">
                                delete
                            </a></td>
                    </tr>

                <?php endforeach;?>


                </tbody>
            </table>

            <a href="/">Go Back</a>
        </div>
    </div>
</div>
</body>
</html>
