
<!DOCTYPE html>
<html lang="en">
    <?php
        include_once('component/header.php');
    ?>
<body class="pace-top bg-white">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url(assets/img/02.jpg)"></div>

				<div class="news-caption">
					<h4 class="caption-title"><b>ระบบลงทะเบียนกีฬา</b> (คณะสีสามัคคี)</h4>
					<p>
				
						โรงเรียนยุพราชวิทยาลัย จังหวัดเชียงใหม่ 
					</p>
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin login-header -->
				<div class="login-header">
					<div class="brand text-center">
                        <img src="assets/img/logo.png" alt="" class="img-fluid" width="30%">
                        <br>
						<b style="font-size: 19px" class="text-danger">ระบบลงทะเบียนกีฬา (คณะสีสามัคคี)</b> 
						<small>โรงเรียนยุพราชวิทยาลัย จังหวัดเชียงใหม่</small>
					</div>
					
				</div>
				<br>
				<?php
						if(isset($_GET['status'])){
							$status = $_GET['status'];
							if($status == '1'){
					?>
					<div class="alert alert-danger text-left ">
						<div class="alert-icon">
							<i class="fas fa-newspaper"></i>
							<b class="" style="font-size: 15px">&nbsp; Username หรือ Password ไม่ถูกต้อง !</b>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="fas fa-times"></i></span>
							</button>
						</div> 
					</div>
					<?php }else if($status == '2'){?>
					<div class="alert alert-danger text-left">
						<div class="alert-icon">
							<i class="fas fa-newspaper"></i>
							<b class="" style="font-size: 15px">&nbsp; กรุณาลงชื่อเข้าใช้สู่ระบบ !</b>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="fas fa-times"></i></span>
							</button>
						</div> 
					</div>
				
					<?php }?>
					<?php }?>
				<!-- end login-header -->
				<!-- begin login-content -->
				<div class="login-content" align="center">
					<form action="process/loginact.php" enctype="multipart/form-data" method="post" class="margin-bottom-0 s1">
						<div class="form-group m-b-15">
							<input type="text" class="form-control form-control-lg" placeholder="เลขประจำตัวประชาชน" name="s_username" id="s_username" required />
						</div>
						<div class="form-group m-b-15">
							<input type="password" class="form-control form-control-lg" placeholder="รหัส 5 ตัวท้ายเลขประจำตัวประชาชน" name="s_password" id="s_password" required />
						</div>
						
						<div class="login-buttons">
							<button type="submit" name="submit" class="btn btn-pink btn-block btn-lg" style="font-weight: unset">เข้าสู่ระบบ</button>
						</div>
					
						<hr />

						

						<!--a href="show-activity.php" class="btn btn-purple text-center" style="color: white;font-weight:unset" align="center">ดูกิจกรรมชุมนุม</a-->
						
						<p class="text-center text-grey-darker" style="font-size:13px">
							&copy;<?php echo date("Y") ?> Samakee Sport Register | Kampanart.ch All Rights Reserved
						</p>
					</form>
				</div>
				<!-- end login-content -->
			</div>
			<!-- end right-container -->
		</div>
		<!-- end login -->

	</div>
	<!-- end page container -->
	
    <?php
        include_once('component/jslink.php');
    ?>
</body>
</html>
