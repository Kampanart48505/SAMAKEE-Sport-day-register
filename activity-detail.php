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
					<h4 class="panel-title">กิจกรรม  <?php echo $row['a_name'] ?>คณะสีสามัคคี</h4>
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
				
					<p style="font-size: 15px"><b class="text-pink">จำนวนที่รับ : &nbsp;</b><?php echo $row['a_many']?> คน</p>
					<br>

					<?php
						$sql2 = "SELECT * FROM student WHERE s_id = '$_SESSION[s_id]' ";
						$result2 = mysqli_query($conn,$sql2);
						$fetch = mysqli_fetch_array($result2);
					?>

					<form action="process/add-activity.php" method="post">

						<div class="form-group row m-b-15" style="display: none">
							<label class="col-form-label col-md-2">ไอดีนักเรียน</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5"  name="s_id" id="s_id" value="<?php echo $fetch['s_id'] ?>" readonly>
								</div>
						</div>

						<div class="form-group row m-b-15" style="display: none">
							<label class="col-form-label col-md-2">ไอดีชุมนุม</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5"  name="a_id" id="a_id" value="<?php echo $row['a_id'] ?>" readonly>
								</div>
						</div>

						<div class="form-group row m-b-15" style="display: none">
							<label class="col-form-label col-md-2">ชั้น</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5"  name="s_grade" id="s_grade" value="<?php echo $fetch['s_grade'] ?>" readonly>
								</div>
						</div>

						<div class="form-group row m-b-15" style="display: none">
							<label class="col-form-label col-md-2">ชั้นรับ</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5"  name="a_grade" id="a_grade" value="<?php echo $row['a_grade'] ?>" readonly>
								</div>
						</div>
						
						<input type="submit" name="submit" class="btn btn-success" style="font-weight: unset" value="ลงทะเบียน">
					</form>
					<br>
				

					<!--div class="col-xl-12" style="font-size:15px">	
					<div class="row" >
									
						<div class="col-xl-4">
							<p><b>สมรรถนะสำคัญของผู้เรียน</b></p>
							<p>1. ความสามารถในการสื่อสาร</p>
							<p>2. ความสามารถในการคิด</p>
							<p>3. ความสามารถในการแก้ปัญหา</p>
							<p>4. ความสามารถในการใช้ทักษะชีวิต</p>
							<p>5. ความสามารถในการใช้เทคโนโลยี </p>
						</div>

						<div class="col-xl-4">
							<p><b>คุณลักษณะอันพึงประสงค์</b></p>
							<p>1. รักชาติ ศาสน์ กษัตริย์</p>
							<p>2. ซื่อสัตย์สุจริต</p>
							<p>3. มีวินัย</p>
							<p>4. ใฝ่เรียนรู้</p>
							<p>5. อยู่อย่างพอเพียง</p>
							<p>6. มุ่งมั่นในการทำงาน</p>
							<p>7. รักความเป็นไทย</p>
							<p>8. มีจิตสาธารณะ</p>
						</div>

						<div class=col-xl-4">
							<p><b>เกณฑ์การประเมินกิจกรรมพัฒนาผู้เรียน ได้</b></p>
							<p>1. มีเวลา<strong>เข้าร่วมกิจกรรมไม่น้อยกว่า 80%</strong></p>
							<p>2. ผ่านการประเมินทุกตัวชี้วัดตามเกณฑ์ของแต่ละกิจกรรม</p>
							<p>3. ผ่านการประเมินสมรรถนะ 4 ใน 5 ข้อ</p>
						</div>
						</div>
						
						
					</div-->

				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end #content -->
		<?php
        	include_once('component/footer.php')
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