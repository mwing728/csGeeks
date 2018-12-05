<!DOCTYPE html>

<html>
<head>

</head>
    
<body>
    <?php
        $internet = 'Internet Computing';
        $data = 'Data Structures';
        $programming = 'Comp Programming';
        $Net = 'Comp Net';
        $option = $_POST['classes'];
        if($option == $internet){
            echo "<script>location.assign('https://www.w3schools.com/html/')</script>";
        }
        if($option == $data){
            echo "<script>location.assign('http://bigocheatsheet.com/')</script>";
        }
        if($option == $programming){
            echo "<script>location.assign('https://www.w3schools.com/java/default.asp')</script>";
        }
        if($option == $Net){
            echo "<script>location.assign('https://www.youtube.com/watch?v=JvXro0dzJY8&list=PLdFppKg4UodjGN8nAhojxWyncoEdwTfqf')</script>";
        }
    ?>
</body>
</html>