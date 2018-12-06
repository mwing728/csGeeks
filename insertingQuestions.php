<?php
    try {
        $conn = new PDO('mysql:host=127.0.0.1;dbname=matthewwingdatabase', 'matthewwing', 'matthewwingpass');
        }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    $query = "SELECT * from questions";
    foreach($conn->query($query) as $row){
            $questionNumber = $row['ID'];
    }
            $questionNumber = $questionNumber + 1;
    $message = $_POST['message'];
    $insertion = "INSERT INTO questions (ID, question) VALUES(?, ?)";
    $insert = $conn->prepare($insertion);
    $insert->execute([$questionNumber, $message]);
?>