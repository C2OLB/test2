<?php

$search_name = $_POST['search_name'];


$pdo = new PDO("mysql:host=localhost; dbname=test3", "root", "");

$sql = "SELECT user_id FROM users WHERE user_name =:search_name ";
$statement = $pdo->prepare($sql);
$statement->bindParam(':search_name',$search_name);
$statement->execute();
$result=$statement->fetch();

if($result[0] ==! 0){
  $sql = "SELECT * FROM messages WHERE user_id =:searched_id";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':searched_id',$result[0]);
  $stmt->execute();
  $src = $stmt->fetchAll();

}
else{
    $m = "NO USER FOUND";
    echo "<script type='text/javascript'>alert('$m');
    window.location.href = '/show.php';
</script>";

}
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
                <?php foreach ($src as $search):?>
                <tr>
                    <td scope="row"><?=$search['user_id'];?></td>
                    <td scope="row"><?=$search_name;?></td>
                    <td scope="row"><?=$search['user_message'];?></td>
                    <?php endforeach;?>
                </tbody>

            </table>
            <a href="/">Go Back</a></br>
            <a href="/show.php">Show all</a>
        </div>
    </div>
</div>

</body>
</html>