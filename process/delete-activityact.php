<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_GET['id'])){
        $a_id = $_GET['id'];
        $sqlact = "SELECT * FROM activity WHERE a_id = 'a_id'";
        $resultact = mysqli_query($conn,$sqlact);
       if($resultact){
        $s_id = $_SESSION['s_id'];
        $sql2 = "UPDATE student SET a_id = '0' WHERE s_id = '$s_id' ";
        $result2 = mysqli_query($conn,$sql2);
        if($result2){
            header("location:../activity-list.php?status=3");
        }else{
            header("location:../activity-list.php?status=4");
        }
       }
       else{
        echo 'f2';
       }
            

        
    }
    


?>