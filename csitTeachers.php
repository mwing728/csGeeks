<?php
    $option = $_POST['professors'];
    $jing = 'Jingfu Jenq';
    $boxiang = 'Boxiang Dong';
    $dolezal = 'Herman Dolezal';
    $dawei = 'Dawei Li';
    $hongbo = 'Hongbo Zhou';
        if($option == $jing){
            echo '<script>location.assign("https://www.montclair.edu/profilepages/view_profile.php?username=jenqj")</script>';
        }
        if($option == $boxiang){
            echo '<script>location.assign("https://www.montclair.edu/profilepages/view_profile.php?username=dongb")</script>';
        }
        if($option == $dolezal){
            echo '<script>location.assign("https://www.montclair.edu/profilepages/view_profile.php?username=dolezalh")</script>';
        }
        if($option == $dawei){
            echo '<script>location.assign("https://www.montclair.edu/profilepages/view_profile.php?username=lida")</script>';
        }
        if($option == $hongbo){
            echo '<script>location.assign("http://cs.montclair.edu/people/Zhou.html")</script>';
        }
?>