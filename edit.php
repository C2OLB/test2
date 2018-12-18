<?php
session_start();

$_SESSION['id'] = $_GET['id'];

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
                    <textarea name="user_message" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>