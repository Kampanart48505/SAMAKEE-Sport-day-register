<?php
    include("../connect/connect.php");
    if(isset($_GET['id'])){
        $a_id = $_GET['id'];
        $sql = "DELETE FROM activity WHERE a_id = '$a_id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo 'good';
            echo '<br>';
            $sql2 = "UPDATE student SET a_id = '0' WHERE a_id  = '$a_id' "; 
            $result2 = mysqli_query($conn,$sql2);
            if($result2){
                header("location:../manage-activity.php?status=3");
            }else{
                header("location:../manage-activity.php?status=4");
            }
        }else{
            echo 'false';
            echo '<br>';
        }
    }


?>