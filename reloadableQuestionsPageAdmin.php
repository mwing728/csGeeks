<html>
    <head>
        <title>CS Geek Question Forum</title>
        <link rel = "stylesheet" type= "text/css" href = "styleQuestions.css">
        <script type = "text/javascript">
            function pushToPreviousQuestions(){
                location.assign("reloadableQuestionsPageAdmin.php");
            }
            function pushToAnswerQuestions(){
                location.assign("answerQuestionsAdmin.php");
            }
            function pushToInsertingQuestions(){
                location.assign("insertingQuestionsAdmin.php");
            }
        </script>
    </head>

    <body>
        <header>
            <div class = "nav-bar">
                <ul class = "menu">
                    <li><a href = "homeAdmin.html"> Home</a></li>
                    <li><a href = "csitAdmin.html"> CSIT Classes</a></li>
                    <li><a href = "index.html"> Logout</a></li>
                </ul>
            </div>

            <img src = "avatar.jpg" class = "avatar">

        <div class = "q_area">
            <h2>Post Your Questions Here!</h2>
            <p>Ask questions on any CSIT related topic:</p>
            <form action = "insertingQuestionsAdmin.php" method = "post">
                <textarea name = "message" rows="5" cols="30" placeholder="Enter question here...">
                </textarea><br><br>
                <button type="submit" value="Ask!">Ask Question</button><br>
            </form>
                <button type = "submit" value = "Refresh" onclick = pushToPreviousQuestions();>Refresh</button>
        </div>
        <div class = "a_area">
            <form action = "answerQuestionsAdmin.php" method ="post">
                <h2>Answer Questions Here!</h2>
                <p>Answer any previously asked questions:</p>
                <textarea name = "answer" rows="5" cols="30" placeholder="Answer question here...">
                </textarea><br>
                <p>Question Number:</p>
                <input type = "number" size = "32" name = "questionID" placeholder="Enter question #..."><br><br>
                <button name = "answerquestion" type="submit" value="Answer Question!">Answer Question</button><br><br>
                <button name = "delete" type = "submit" value = "Delete">Delete</button>
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
                foreach($conn->query($query) as $row){
                    echo "Question " . $row['ID'] . ":" . $row['question'];
                    echo "<br>";
                    echo "<br>";
                    $questionNumber = $row['ID'];
                }
            ?>
        </div>
        <div class = "a_box">
            <?php
                try {
                    $conn = new PDO('mysql:host=127.0.0.1;dbname=matthewwingdatabase', 'matthewwing', 'matthewwingpass');
                }
                catch(PDOException $e){
                    echo $e->getMessage();
                }
                $query2 = "SELECT * from questions";
                $result2 = $conn->prepare($query2);
                $result->execute();
                $answer2 = $result2->fetch();
                foreach($conn->query($query2)as $row){
                    echo "Answer " . $row['ID'] . ":" . $row['answer'];
                    echo "<br>";
                    echo "<br>";
                }
            ?>
        </div>
        </header>
    </body>
</html>