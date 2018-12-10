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
        $jenq = "Jingfu Jenq";
        $dong = "Boxiang Dong";
        $herman = "Herman Dolezal";
        $li = "Dawei Li";
        $zhou = "Hongbo Zhou";
        $option = $_POST['classes'];
        $optionp = $_POST['professors'];


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
        if($optionp == $jenq){
            echo "<script>location.assign('https://www.montclair.edu/profilepages/view_profile.php?username=jenqj')</script>";
        }
        if($optionp == $dong){
            echo "<script>location.assign('https://www.montclair.edu/profilepages/view_profile.php?username=dongb')</script>";
        }
        if($optionp == $herman){
            echo "<script>location.assign('https://www.montclair.edu/profilepages/view_profile.php?username=dolezalh')</script>";
        }
        if($optionp == $li){
            echo "<script>location.assign('https://www.montclair.edu/profilepages/view_profile.php?username=lida')</script>";
        }
        if($optionp == $zhou){
            echo "<script>location.assign('https://www.montclair.edu/profilepages/view_profile.php?username=zhouh')</script>";
        }

    ?>
</body>
</html>