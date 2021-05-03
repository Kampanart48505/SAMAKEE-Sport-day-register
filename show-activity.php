<?php
    session_start();
	include("connect/connect.php");
	
?>
<!DOCTYPE html>
<html lang="en">

        <?php
            include_once('component/header.php')
        ?>

<body>
	

<?php
            include_once('component/navbar2.php')
        ?>
        
     
		

		
		<!-- begin #content -->
		
			<!-- begin page-header -->
			
			<!-- end page-header -->
            <!-- begin panel -->
            <div class="col-xl-12">
            <h1 class="s12 mt-3">ระบบลงทะเบียนกิจกรรมพัฒนาผู้เรียน<small>&nbsp;โรงเรียนยุพราชวิทยาลัย</small></h1>

           
			<div class="panel panel-inverse">
				<div class="panel-heading ">
					<h4 class="panel-title">รายชื่อกิจกรรมพัฒนาผู้เรียน ปีการศึกษา 2563 ภาคเรียนที่ 1</h4>
					
				</div>
				<div class="panel-body">
				
                    
                    <?php
                        $sql = "SELECT * FROM activity ORDER BY a_id ASC";
                        $result = mysqli_query($conn,$sql);
                        echo '<div class="table-responsive">';
							echo'<table class="table table-striped m-b-0 text-center s9" id="data-table-default">';
							echo'<thead>';
							echo'<tr class="fw-700">';
							echo'<th width="400px">ชื่อชุมนุม</th>';
							echo'<th width="400px">ครูผู้สอน</th>';
							echo'<th width="200px" >ระดับชั้นที่รับ</th>';

							echo'<th width="200px">จำนวนที่รับ</th>';
							echo'<th width="200px" >รายละเอียด</th>';
							echo'<th width="200px">สถานะ</th>';
							echo'</tr>';
							echo'</thead>';
							echo'<tbody>';
                        while($row = mysqli_fetch_array($result)){
							$sqlch = "SELECT * FROM student WHERE a_id = '$row[a_id]' ";
							$querych = mysqli_query($conn,$sqlch);
							$check = mysqli_num_rows($querych);

                            echo'<tr>';
							echo'<td>' .$row['a_name'].  '</td>';
							echo'<td>' .$row['a_teacher'].  '</td>';
                            echo'<td>' .$row['a_grade'].  '</td>';
							echo'<td>' . $check. '/' .$row['a_many']. '&nbsp;'. 'คน'. '</td>';
							
							echo"<td><a href=result-activity.php?id=$row[0] class='btn btn-purple' style='font-weight:unset'>รายละเอียด</a> ";
							
							
								if($check == $row['a_many']){
									echo"<td><a href=# class='btn btn-danger' style='font-weight:unset'>เต็ม</a> ";
								}else{
									echo"<td><a href=# class='btn btn-pink' style='font-weight:unset'>ลงทะเบียน</a> ";
								}
							
							
							echo'</tr>';
                        }
                        echo'</tbody>';
						echo'</table>';
						echo '</div>';
                    ?>
				</div>
            </div>
            </div>
			<!-- end panel -->
	

		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	
    
    <?php
        include_once('component/jslink.php')
    ?>
	
	
</body>
</html>
					
