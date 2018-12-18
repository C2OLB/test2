<?php
var_dump($_GET);



//$pdo = new PDO("mysql:host=localhost; dbname=test3", "root", "");
//$stmt= $pdo->prepare("SELECT * FROM messages WHERE message_id=:message_id");
//$stmt->execute();


?>

<!doctype html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="update.php" method="post">
                <h1>Message</h1>
                <div class="form-group">
                    <textarea name="message" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
