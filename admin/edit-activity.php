<?php
    session_start();
	include("connect/connect.php");
	if(!$_SESSION['t_id']){
		header('Location:index.php?status=2');
	}else{
?>
<?php
    if(isset($_GET['id'])){
        $a_id = $_GET['id'];
        $sqlact = "SELECT * FROM activity WHERE a_id = '$a_id'";
        $queryact = mysqli_query($conn,$sqlact);
        $rowact = mysqli_fetch_array($queryact);
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
                    <h4 class="panel-title">แก้ไขระบบลงทะเบียนกีฬาคณะสีสามัคคี</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
                    <?php
                        $sql = "SELECT * FROM teacher WHERE t_id = '$_SESSION[t_id]'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result);

                    ?>
                    <form action="process/edit-activity.php" method="post">

                        <div class="form-group row m-b-15 d-none">
							<label class="col-form-label col-md-2">ไอดีชุมนุม</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5"  name="a_id" id="a_id" value="<?php echo $rowact['a_id'] ?>" readonly>
								</div>
                        </div>

                        <div class="form-group row m-b-15 d-none">
							<label class="col-form-label col-md-2">ไอดีครู</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5"  name="t_id" id="t_id" value="<?php echo $row['t_id'] ?>" readonly>
								</div>
                        </div>

						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">ชื่อกีฬา</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" placeholder="ชื่อกีฬา" name="a_name" id="a_name" value="<?php echo $rowact['a_name'] ?>">
							
								</div>
                        </div>

                        <div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">ระดับชั้นที่รับ</label>
								<div class="col-md-10">
								<select class="form-control" name="a_grade" id="a_grade">
									<option value="<?php echo $rowact['a_grade'] ?>">
									<?php if($rowact['a_grade'] == '1'){
										echo 'ม.ต้น (1,2,3) สิ่งที่เลือกไว้';
									}else if($rowact['a_grade'] == '2'){
										echo 'ม.ปลาย (4,5,6) สิ่งที่เลือกไว้';
									} ?>
									</option>
									<option value="1">ม.ต้น (1,2,3)</option>
									<option value="2">ม.ปลาย (4,5,6)</option>
								
								</select>
									
								
								</div>
                        </div>
                        
                        <div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">จำนวนที่รับ</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" placeholder="จำนวนที่รับ" name="a_many" id="a_many"  value="<?php echo $rowact['a_many'] ?>">
									
								</div>
                        </div>
                        
                      
                        
                        <input type="submit" class="btn btn-green" style="color: white;font-weight:unset" name="submit" value="แก้ไขกีฬา">

				
                    </form>
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