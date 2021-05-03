<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
       $s_id =  $_POST['s_id'];
       $a_id =  $_POST['a_id'];
       $s_garde = $_POST['s_grade'];
       $a_grade= $_POST['a_grade'];

       if($a_grade == '1'){

           if($s_garde == '1'){
                  
                $sql = "UPDATE `student` SET `a_id` = '$a_id' WHERE `s_id` = '$s_id'";
                $result = mysqli_query($conn,$sql);
                if($result){
                    $sql2 = "SELECT * FROM activity WHERE a_today";
                    $sql3 = "UPDATE `activity` SET `a_today` = '$sql2' +1 WHERE `a_id` = '$a_id'";
                    $result3 = mysqli_query($conn,$sql3);
                    if($result3){
                        header("location:../activity-list.php?status=1");
                    }else{
                        echo 'false3';
                    }
                }else{
                    echo 'false';
                }
           }else if ($s_garde == '2'){
            $sql = "UPDATE `student` SET `a_id` = '$a_id' WHERE `s_id` = '$s_id'";
            $result = mysqli_query($conn,$sql);
            if($result){
                $sql2 = "SELECT * FROM activity WHERE a_today";
                $sql3 = "UPDATE `activity` SET `a_today` = '$sql2' +1 WHERE `a_id` = '$a_id'";
                $result3 = mysqli_query($conn,$sql3);
                if($result3){
                    header("location:../activity-list.php?status=1");
                }else{
                    echo 'false3';
                }
            }else{
                echo 'false';
            }
           }else if ($s_garde == '2'){
            $sql = "UPDATE `student` SET `a_id` = '$a_id' WHERE `s_id` = '$s_id'";
            $result = mysqli_query($conn,$sql);
            if($result){
                $sql2 = "SELECT * FROM activity WHERE a_today";
                $sql3 = "UPDATE `activity` SET `a_today` = '$sql2' +1 WHERE `a_id` = '$a_id'";
                $result3 = mysqli_query($conn,$sql3);
                if($result3){
                    header("location:../activity-list.php?status=1");
                }else{
                    echo 'false3';
                }
            }else{
                echo 'false';
            }
           }else{
            header("location:../activity-list.php?status=cannot");
           }

       }else if($a_grade == '2'){

            if($s_garde == '4'){
                $sql = "UPDATE `student` SET `a_id` = '$a_id' WHERE `s_id` = '$s_id'";
                $result = mysqli_query($conn,$sql);
                if($result){
                    $sql2 = "SELECT * FROM activity WHERE a_today";
                    $sql3 = "UPDATE `activity` SET `a_today` = '$sql2' +1 WHERE `a_id` = '$a_id'";
                    $result3 = mysqli_query($conn,$sql3);
                    if($result3){
                        header("location:../activity-list.php?status=1");
                    }else{
                        echo 'false3';
                    }
                }else{
                    echo 'false';
                }
            }else if ($s_garde == '5'){
                $sql = "UPDATE `student` SET `a_id` = '$a_id' WHERE `s_id` = '$s_id'";
                $result = mysqli_query($conn,$sql);
                if($result){
                    $sql2 = "SELECT * FROM activity WHERE a_today";
                    $sql3 = "UPDATE `activity` SET `a_today` = '$sql2' +1 WHERE `a_id` = '$a_id'";
                    $result3 = mysqli_query($conn,$sql3);
                    if($result3){
                        header("location:../activity-list.php?status=1");
                    }else{
                        echo 'false3';
                    }
                }else{
                    echo 'false';
                }
            }else if ($s_garde == '6'){
                $sql = "UPDATE `student` SET `a_id` = '$a_id' WHERE `s_id` = '$s_id'";
                $result = mysqli_query($conn,$sql);
                if($result){
                    $sql2 = "SELECT * FROM activity WHERE a_today";
                    $sql3 = "UPDATE `activity` SET `a_today` = '$sql2' +1 WHERE `a_id` = '$a_id'";
                    $result3 = mysqli_query($conn,$sql3);
                    if($result3){
                        header("location:../activity-list.php?status=1");
                    }else{
                        echo 'false3';
                    }
                }else{
                    echo 'false';
                }
            }else{
                header("location:../activity-list.php?status=cannot");
            }

       }

     
    }


?>