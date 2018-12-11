<?php
    try {
        $conn = new PDO('mysql:host=127.0.0.1;dbname=matthewwingdatabase', 'matthewwing', 'matthewwingpass');
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    
    if(isset($_POST['answerquestions'])){
    $questionNum = $_POST['questionID'];
    $message = $_POST['answer'];
    
    $query = "UPDATE questions SET answer = '{$message}' WHERE ID = '{$questionNum}'";
    $result = $conn->prepare($query);
    $result->execute();   
    }
    else if(isset($_POST['delete'])){
        $questionNum2 = $_POST['questionID'];
        $query2 = "DELETE FROM questions WHERE ID = '{$questionNum2}'";
        $result2 = $conn->prepare($query2);
        $result2->execute();
    }
    

?>
<script type = "text/javascript">
    location.assign("reloadableQuestionsPageAdmin.php");
</script>