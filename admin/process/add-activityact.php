<?php
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
        $t_id = $_POST['t_id'];
        $a_name = $_POST['a_name'];
        $a_grade = $_POST['a_grade'];
        $a_many = $_POST['a_many'];
        $a_teacher = $_POST['a_teacher'];
        $a_detail = $_POST['a_detail'];
        $a_today = $_POST['a_today'];

        $sql = "INSERT INTO `activity` (`a_id`, `t_id`, `a_name`, `a_grade`, `a_many`, `a_teacher`, `a_detail`, `a_today`) 
        VALUES (NULL, '$t_id', '$a_name', '$a_grade', '$a_many', '$a_teacher', '$a_detail', '0')";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location:../manage-activity.php?status=1");
        }else{
            header("location:../manage-activity.php?status=2");
        }
    }



?>