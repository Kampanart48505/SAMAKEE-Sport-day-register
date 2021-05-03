<?php
    session_start();
	include("connect/connect.php");
	if(!$_SESSION['t_id']){
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
					<h4 class="panel-title">ข่าวประชาสัมพันธ์ระบบลงทะเบียนกีฬาคณะสีสามัคคี</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">

					<div class="note note-danger">
						<div class="note-icon"><i class="fa fa-lightbulb"></i></div>
						<div class="note-content">
							<h4><b>ข้อควรแนะนำ</b></h4>
							<p>ควรใช้คอมพิวเตอร์,โน๊ตบุ๊ค,แท็บเล็ต,ไอแพ็ด ในการบริหารจัดการ</p>
						</div>
					</div>

					<hr>

					<a href="manage-activity.php" class="btn btn-success" style="font-weight: unset;color:white">บริหารจัดการกีฬา</a>

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