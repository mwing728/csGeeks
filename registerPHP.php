<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <?php
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=matthewwingdatabase', 'matthewwing', 'matthewwingpass');
    }
        catch(PDOException $e){
        echo $e->getMessage();
        }
    $userCheck = "SELECT username FROM registration where username = '{$username}'";
    $userCompare = $conn->prepare($userCheck);
    $userCompare->execute();
    $userResult = $userCompare->fetch();
    if($userResult['username'] == $username){
        echo "
<html>
    <head>
        <title>CS Geek Registration</title>
        <link rel = 'stylesheet' type= 'text/css' href = 'style1Register.css'>
    </head>

    <body>
        <div class = 'registrationbox'>
            <p style = 'color: red; text-align: center'>That username is taken, please make another</p>
                <img src = 'avatar.jpg' class = 'avatar'>
                    <h1>Register for CS Geek!</h1>
                    <form action = 'registerPHP.php' method = post>                  
                        <p>First Name</p>
                        <input type = 'text' name = 'firstName' placeholder = 'Enter first name' required>
                        <p>Last Name</p>
                        <input type = 'text' name = 'lastName' placeholder = 'Enter last name'required>                    
                        <p>MSU Username</p>
                        <input type = 'text' name = 'username' placeholder = 'Enter MSU Username' required><br>
                        <p>Password</p>
                        <input type = 'password' name = 'password' placeholder = 'Enter password' required><br>
                        <input type='radio' name='major' value='CS' checked> CS
                        <input type='radio' name='major' value='IT'> IT<br><br>
                        <input type='submit' value='Register'><br>
                    </form>
            </div>

    </body>
</html>";
        
    }
    else{
        $query = "INSERT INTO registration (firstName, lastName, username, pass) VALUES(?, ?, ?, ?)";
    $result = $conn->prepare($query);
    $result->execute([$firstName, $lastName, $username, $password]);
    echo "<script>location.assign('registrationConfirmation.html')</script>";
    }
    
    ?>
    
</body>
</html>