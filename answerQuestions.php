<?php
    try {
        $conn = new PDO('mysql:host=127.0.0.1;dbname=matthewwingdatabase', 'matthewwing', 'matthewwingpass');
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    $questionNum = $_POST['questionID'];
    $message = $_POST['message'];
    
    $query = "UPDATE questions SET answer = '{$message}' WHERE ID = '{$questionNum}'";
    $result = $conn->prepare($query);
    $result->execute();

?>
