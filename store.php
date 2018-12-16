<?php



      $user_name = $_POST['user_name'];
      $message = $_POST['message'];




$pdo = new PDO("mysql:host=test2; dbname=test", "root", "");
     // добавленик  пользователя и сообщение в бд

       $pdo->beginTransaction();

       $sql = "INSERT INTO users (user_name) VALUES (:user_name)";
       $stmt = $pdo->prepare($sql);
       $stmt->bindParam(':user_name',$user_name);
       $stmt->execute();

// хочу сравнить уже существует такой пользователь или нет

$sql = "SELECT user_name FROM users WHERE user_name =:user_name";
$statement = $pdo->prepare($sql);
$statement->bindParam(':user_name',$user_name);
$statement->execute();

$result = $statement->fetchAll();
var_dump($result);
   die;


 //по последнему инсерту достаем ИД для месседжа
       $message_id = $pdo->lastInsertId();


       $sql = "INSERT INTO messages (message,message_id) VALUES (:message,$message_id)";
       $stmt = $pdo->prepare($sql);
       $stmt->bindParam(':message',$message);
       $stmt->execute();

       $pdo->commit();

















 //$sql = "INSERT INTO users (user_name) VALUES (:user_name)";
 //$stmt = $pdo->prepare($sql);
 //$stmt->bindParam(':user_name',$user_name);
 //$stmt->execute();






    //if($user_name == 0){
         //$sql ="INSERT INTO messages (message,message_id) VALUES (:message,)";
         //$stmt = $pdo->prepare($sql);
         //$stmt->bindParam(':message',$message);
         //$stmt->execute();


   // }

   // else{

   // }











header("Location: /show.php"); exit;
