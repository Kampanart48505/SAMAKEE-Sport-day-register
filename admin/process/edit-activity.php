<?php
    include("../connect/connect.php");

    if($_POST['a_id']== ''){
        header("location:../manage-activity.php?status=5");
    }
    $a_id = $_POST['a_id'];
    $t_id =$_POST['t_id'];
    $a_name  = $_POST['a_name'];
    $a_grade = $_POST['a_grade'];
    $a_many = $_POST['a_many'];
    $a_teacher = $_POST['a_teacher'];
    $a_detail = $_POST['a_detail'];

    $sql = "UPDATE activity SET 
        a_name = '$a_name',
        a_grade = '$a_grade',
        a_many = '$a_many',
        a_teacher = '$a_teacher',
        a_detail = '$a_detail'
        WHERE a_id = '$a_id'";

    $result = mysqli_query($conn,$sql);

    if($result){
        header("location:../manage-activity.php?status=6");
    }else{
        header("location:../manage-activity.php?status=7");
    }



?>