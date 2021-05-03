<?php
    session_start();
	include("connect/connect.php");
	if(!$_SESSION['s_id']){
		header('Location:index.php?status=2');
	}else{
?>
<?php
	if(isset($_GET['id'])){
		$a_id = $_GET['id'];
		$sql = "SELECT * FROM activity WHERE a_id = '$a_id'";
		$result = mysqli_query($conn,$sql);
		$row  = mysqli_fetch_array($result);
	}
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
					<h4 class="panel-title">กิจกรรม <?php echo $row['a_name'] ?> ปีการศึกษา 2563 ภาคเรียนที่ 1</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
                    
					<div class="row">
						<div class="col-xl-1 col-3">
							<img src="assets/img/logo.png" class="img-fluid" alt="">
						</div>
						<div class="col-xl-11 col-7 mt-xl-4 mt-xs-2">
							<h3 class="text-danger">กิจกรรม  <?php echo $row['a_name'] ?> คณะสีสามัคคี</h3>
                           
						   <h5>โรงเรียนยุพราชวิทยาลัย</h5>
						</div>
					</div>
					
                    <hr>
                    <p style="font-size: 15px"><b class="text-pink">ชื่อกีฬา : &nbsp;</b><?php echo $row['a_name']?></p>
				
					<p style="font-size: 15px"><b class="text-pink">จำนวนที่รับ : &nbsp;</b><?php echo $row['a_many']?> คน</p>

					
					
				

					<?php
						$sql2 = "SELECT * FROM student WHERE a_id = '$row[a_id]' ";
						$result2 = mysqli_query($conn,$sql2);
						$rows = mysqli_num_rows($result2);
						
						
						echo '<p style="font-size: 15px"><b class="text-pink">มีผู้ลงทะเบียนทั้งหมด :</b>'  .'&nbsp;'.$rows. '&nbsp;' .'คน'. '</p>';
						echo '<br>';
                        echo '<div class="table-responsive">';
                        echo'<table class="table table-striped m-b-0 text-center s9" id="data-table-default">';
                        echo'<thead>';
                        echo'<tr class="fw-700">';
                        echo'<th width="200px">เลขประจำตัว</th>';
						echo'<th width="400px">ชื่อ-สกุล</th>';
						echo'<th width="200px">ชั้น</th>';
						
						

                   
							
							
							echo'</tr>';
							echo'</thead>';
							echo'<tbody>';
							while($fetch = mysqli_fetch_array($result2)){
                            echo'<tr>';
							echo'<td>' .$fetch['s_idstudent'].  '</td>';
							echo'<td>' .$fetch['s_fname']. $fetch['s_name']. '&nbsp;'. $fetch['s_lname'].  '</td>';
                            echo'<td> ' .'ม.' .$fetch['s_grade']. '/' .$fetch['s_room'].  '</td>';
							
							
							echo'</tr>';
							}
                        
                        echo'</tbody>';
						echo'</table>';
						echo '</div>';

						
					?>
					
					<br>
					<p style="font-size: 15px">
						<b class="text-pink">ข้อมูลอัพเดทเมื่อวันที่  : &nbsp;</b>
						<?php
							
							$year = date("Y");
							$date = date("D");
							if($date == 'Tue'){
								echo 'วันอังคาร ที่ ';
							}
							else if($date == 'Wed'){
								echo 'วันพุธ ที่ ';
							}
							else if($date == 'Thr'){
								echo 'วันพฤหัสบดี ที่ ';
							}else if($date == 'Fri'){
								echo 'วันศุกร์ ที่ ';
							}else if($date == 'Sat'){
								echo 'วันเสาร์ ที่ ';
							}else if($date == 'Sun'){
								echo 'วันอาทิตย์ ที่ ';
							}else if($date == 'Mon'){
								echo 'วันจันทร์ ที่ ';
							}

							
 

							
							$time = date("d");
							echo $time;

							$month = date("m");
							if($month == '04'){
								echo ' เมษายน ';
							}else if($month == '05'){
								echo ' พฤษภาคม ';
							}else if($month == '06'){
								echo ' มิถุนายน ';
							}else if($month == '07'){
								echo ' กรกฎาคม ';
							}else if($month == '08'){
								echo ' สิงหาคม ';
							}else if($month == '09'){
								echo ' กันยายน ';
							}else if($month == '10'){
								echo ' ตุลาคม ';
							}else if($month == '11'){
								echo ' พฤศจิกายน ';
							}else if($month == '12'){
								echo ' ธันวาคม ';
							}else if($month == '01'){
								echo ' มกราคม ';
							}else if($month == '02'){
								echo ' กุมภาพันธ์ ';
							}else if($month == '03'){
								echo ' มีนาคม ';
							}
							
							$yearbud = $year += 543;
							echo $yearbud;

							$th=mktime(gmdate("H")+7,gmdate("i"));
							$format="H:i";
							
							$str=date($format,$th);
							echo " เวลา: $str น.";

						?>
					</p>
                    
					

					

					
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