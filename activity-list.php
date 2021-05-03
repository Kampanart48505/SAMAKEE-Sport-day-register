<?php
    session_start();
	include("connect/connect.php");
	if(!$_SESSION['s_id']){
		header('Location:index.php?status=2');
	}else{
?>
<!DOCTYPE html>
<html lang="en">

        <?php
            include_once('component/header.php')
        ?>

<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
        
        <?php
            include_once('component/navbar.php')
        ?>

        <?php
            include_once('component/slidebar.php')
        ?>
		

		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin page-header -->
			<h1 class="page-header s12">ระบบลงทะเบียนกีฬาคณะสีสามัคคี<small>&nbsp;โรงเรียนยุพราชวิทยาลัย</small></h1>
			<!-- end page-header -->
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading ">
					<h4 class="panel-title">รายชื่อกีฬาคณะสีสามัคคี</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
				<?php
						if(isset($_GET['status'])){
							$status = $_GET['status'];
							if($status == '1'){
					?>
					<div class="alert alert-green text-left">
						<div class="alert-icon">
							<i class="fas fa-newspaper"></i>
							<b class="" style="font-size: 15px">&nbsp; ลงทะเบียนกีฬาแล้ว !</b>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="fas fa-times"></i></span>
							</button>
						</div> 
					</div>
					<?php }else if($status == '2'){?>
					<div class="alert alert-danger text-left">
						<div class="alert-icon">
							<i class="fas fa-newspaper"></i>
							<b class="" style="font-size: 15px">&nbsp; ไม่สามารถลงทะเบียนกีฬาได้ !</b>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="fas fa-times"></i></span>
							</button>
						</div> 
					</div>
				
				
					<?php }else if($status == '3'){?>
					<div class="alert alert-green text-left">
						<div class="alert-icon">
							<i class="fas fa-trash"></i>
							<b class="" style="font-size: 15px">&nbsp; ลบกีฬาแล้ว !</b>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="fas fa-times"></i></span>
							</button>
						</div> 
					</div>

					<?php }else if($status == '4'){?>
					<div class="alert alert-danger text-left">
						<div class="alert-icon">
							<i class="fas fa-trash"></i>
							<b class="" style="font-size: 15px">&nbsp; ไม่สามารถลบกีฬาได้ !</b>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="fas fa-times"></i></span>
							</button>
						</div> 
					</div>
				
					<?php }else if($status == 'cannot'){?>
					<div class="alert alert-warning text-left">
						<div class="alert-icon">
							<i class="fas fa-trash"></i>
							<b class="" style="font-size: 15px">&nbsp; กีฬาที่ต้องการลงเป็นคนละระดับชั้นที่กำหนดไว้ !</b>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="fas fa-times"></i></span>
							</button>
						</div> 
					</div>
				
					<?php }?>
					<?php }?>

                    
                    <?php
                        $sql = "SELECT * FROM activity ORDER BY a_id ASC";
                        $result = mysqli_query($conn,$sql);
                        	echo '<div class="table-responsive">';
							echo'<table class="table table-striped m-b-0 text-center s9" id="data-table-default">';
							echo'<thead>';
							echo'<tr class="fw-700">';
							echo'<th width="400px">ชื่อกีฬา</th>';
						
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
					
                          
								if($row['a_grade']  == '1'){
									echo '<td>รับ ม.ต้น</td>';
								}else if ($row['a_grade'] == '2'){
									echo '<td>รับ ม.ปลาย</td>';
								} 
					
							echo'<td>' . $check. '/' .$row['a_many']. '&nbsp;'. 'คน'. '</td>';
							
							echo"<td><a href=activity-result.php?id=$row[0] class='btn btn-purple' style='font-weight:unset'>รายละเอียด</a> ";
							$sqlse = "SELECT * FROM student WHERE s_id = '$_SESSION[s_id]'";
							$queryse = mysqli_query($conn,$sqlse);
							$fetchse = mysqli_fetch_array($queryse);
							if($fetchse["a_id"]  == '0'){
								if($check == $row['a_many']){
									echo"<td><a href=# class='btn btn-danger' style='font-weight:unset'>เต็ม</a> ";
								}else{
									echo"<td><a href=activity-detail.php?id=$row[0] class='btn btn-pink' style='font-weight:unset'>ลงทะเบียน</a> ";
								}
							
							}else{
								if($row['a_id'] == $fetchse['a_id']){
									echo"<td><a href=process/delete-activityact.php?id=$row[0] class='btn btn-danger' style='font-weight:unset'>ลบกิจกรรม</a></td>";
								}
							}
							echo'</tr>';
                        }
                        echo'</tbody>';
						echo'</table>';
						echo '</div>';
                    ?>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end #content -->

		<?php
			include_once("component/footer.php");

		?>
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
    <!-- end page container -->
    
    <?php
        include_once('component/jslink.php')
    ?>
	
	
</body>
</html>
					
<?php } ?>