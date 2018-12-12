<!DOCTYPE html>

<html>
<head>
    
</head>
<body>
    <?php
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        try {
            $conn = new PDO('mysql:host=127.0.0.1;dbname=matthewwingdatabase', 'matthewwing', 'matthewwingpass');
        }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        $query = "SELECT * FROM registration WHERE username = '{$username}' AND pass = '{$password}'";
        $result = $conn->prepare($query);
        $result->execute();
        $answer = $result->fetch();
        
        $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $valid_password = password_verify($answer['pass'], $hash);
    if($valid_password){
        echo "<script>location.assign('home.html')</script>";
    }
    else{
        echo"<script>alert('Invalid Username and Password')</script>";
        echo"<script>location.assign('index.html')</script>";
        
    }
    ?>
    
</body>
</html>