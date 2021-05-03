<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
    
        $s_username = $_POST['s_username'];
        $s_password = $_POST['s_password'];

        $sql = "SELECT * FROM student WHERE s_username  = '".$s_username."' AND s_password = '".$s_password."'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        if($row>0){
            $_SESSION["s_id"] = $row["s_id"] ;
            $_SESSION["s_fname"] = $row["s_fname"] ;
            $_SESSION["s_name"] = $row["s_name"] ;
            $_SESSION["s_lname"] = $row["s_lname"];
            $_SESSION["s_grade"] = $row["s_grade"];
            $_SESSION["s_room"] = $row["s_room"];
            $_SESSION["s_idstudent"] = $row["s_idstudent"];
            $_SESSION["a_id"] = $row["a_id"];
           header('location:../activity-list.php');
        }else{
            header('location:../index.php?status=1');
        }
    }


?>