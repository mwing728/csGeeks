<html>
    <head>
        <title>CS Geek Question Forum</title>
        <link rel = "stylesheet" type= "text/css" href = "styleQuestions.css">
    </head>

    <body>
        <header>
            <div class = "nav-bar">
                <ul class = "menu">
                    <li><a href = "home.html"> Home</a></li>
                    <li><a href = "csit.html"> CSIT Classes</a></li>
                    <li><a href = "login.html"> Logout</a></li>
                </ul>
            </div>

            <img src = "avatar.jpg" class = "avatar">

        <div class = "q_area">
            <h2>Post Your Questions Here!</h2>
            <p>Ask questions on any CSIT related topic here:</p>
            <form action = "insertingQuestions.php" method = "post">
                <textarea name = "message" rows="5" cols="30" placeholder="Enter question here...">
                </textarea><br>
                <p>Enter the question number you would like to answer:</p>
                <input type = "text" size = "32" placeholder="Enter question number..."><br><br>
                <button type="submit" value="Ask!">Ask Question</button>
            </form>
            <form>
                <button type="submit" value="Answer Question!">Answer Question</button>
            </form>
            <form action = "previousQuestions.php" method = "post">
                <button type = "submit" value = "Refresh">Refresh Previous Questions</button>
            </form>
        </div>

        <h3><i>View Previously Asked Questions:</i></h3>
        <h4><i>View Previously Asnswered Questions:</i></h4>

        <div class = "q_box">
             <?php
                try {
                    $conn = new PDO('mysql:host=127.0.0.1;dbname=matthewwingdatabase', 'matthewwing', 'matthewwingpass');
                }
                catch(PDOException $e){
                    echo $e->getMessage();
                }
                $questionNumber = 0;
                $query = "SELECT * from questions";
                $result = $conn->prepare($query);
                $result->execute();
                $answer = $result->fetch();
                $number = "SELECT ID FROM questions ORDER BY ID DESC LIMIT 1";
                $finish = $conn->prepare($number);
                $getNumber = $finish->execute();
                foreach($conn->query($query) as $row){
                    echo "Question " . $row['ID'] . ":" . $row['question'];
                    echo "<br>";
                    echo "<br>";
                    $questionNumber = $row['ID'];
                }
            ?>
        </div>
        <div class = "a_box">
        </div>
        </header>
    </body>
</html>