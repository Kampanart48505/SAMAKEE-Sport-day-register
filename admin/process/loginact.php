<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
    
        $t_username = $_POST['t_username'];
        $t_password = $_POST['t_password'];

        $sql = "SELECT * FROM teacher WHERE t_username  = '".$t_username."' AND t_password = '".$t_password."'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        if($row>0){
            $_SESSION["t_id"] = $row["t_id"] ;
            $_SESSION["t_fname"] = $row["t_fname"] ;
            $_SESSION["t_name"] = $row["t_name"] ;
            $_SESSION["t_lname"] = $row["t_lname"];
            $_SESSION["t_activity"] = $row["t_activity"];
           header('location:../activity-list.php');
        }else{
            header('location:../index.php?status=1');
        }
    }


?>