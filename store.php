<?php



      $user_name = $_POST['user_name'];
      $message = $_POST['message'];




$pdo = new PDO("mysql:host=test2; dbname=test", "root", "");
     // пользователя в бд
    $sql = "SELECT user_name FROM users WHERE user_name =:user_name";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':user_name',$user_name);
    $stmt->execute();




    if($stmt->rowCount() > 0){
         $sql ="INSERT INTO messages (message,message_id) VALUES (:message,)";
         $stmt = $pdo->prepare($sql);
         $stmt->bindParam(':message',$message);
         $stmt->execute();


    }

    else{
        $pdo->beginTransaction();


        //select * from users WHERE

        $sql = "INSERT INTO users (user_name) VALUES (:user_name)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':user_name',$user_name);
        $stmt->execute();

        $message_id = $pdo->lastInsertId();


        $sql = "INSERT INTO messages (message,message_id) VALUES (:message,$message_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':message',$message);
        $stmt->execute();

        $pdo->commit();
    }











header("Location: /show.php"); exit;
