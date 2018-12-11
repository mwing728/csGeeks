<?php
     try {
            $conn = new PDO('mysql:host=127.0.0.1;dbname=matthewwingdatabase', 'matthewwing', 'matthewwingpass');
        }
            catch(PDOException $e){
                echo $e->getMessage();
            }

    $user = $_POST['username'];
    $pass = $_POST['password'];
        

        $query = "SELECT * FROM admin WHERE Username = '{$user}' AND Password = '{$pass}'";
        $result = $conn->prepare($query);
        $result->execute();
        $answer = $result->fetch();
        
        $hash = password_hash($pass, PASSWORD_DEFAULT);
    
    $valid_password = password_verify($answer['Password'], $hash);
    if($valid_password){
        echo "<script>location.assign('homeAdmin.html')</script>";
    }
    else{
        echo"<script>alert('Invalid Username and Password')</script>";
        echo"<script>location.assign('AlexEsposito.html')</script>";
        
    }
?>