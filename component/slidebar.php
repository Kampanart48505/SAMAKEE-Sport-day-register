		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile" >
						<a href="javascript:;" data-toggle="nav-profile" style="background-color: #e8ebef;">
							<div class="image image-icon bg-success text-grey-darker" style="width: 120px;height:120px;border-radius:120px">
								<i class="fa fa-user" style="font-size: 50px;color:white"></i>
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								<?php echo $_SESSION["s_fname"]  ; echo $_SESSION["s_name"]; echo "&nbsp;"  ; echo $_SESSION["s_lname"]  ; ?>
								<small><?php echo "ชั้นมัธยมศึกษาปีที่"; echo "&nbsp;" ;echo $_SESSION["s_grade"]; echo "/"; echo $_SESSION["s_room"];?></small>
								<small>เลขประจำตัว : <?php echo $_SESSION["s_idstudent"]; ?></small>
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
							<li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
							<li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
							<li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
						</ul>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
				
				<li class="nav-header">สถานะการลงทะเบียน</li>

				<?php
					$sqlse = "SELECT * FROM student WHERE s_id = '$_SESSION[s_id]'";
					$queryse = mysqli_query($conn,$sqlse);
					$fetchse = mysqli_fetch_array($queryse);
					 if($fetchse['a_id'] == '0'){	  
				?>

					<li class="active">
						<a href="#">
						<i class="fas fa-times"></i>
							<span>ยังไม่ได้ลงทะเบียน</span>
						</a>
					</li>

					<?php }else{ ?>

					<li class="active">
						<a href="#">
						<span>ลงทะเบียนแล้ว</span>
						<i class="fas fa-check"></i>
						
						<span>
							<?php
								$sqlreadact = "SELECT * FROM activity WHERE a_id = '$fetchse[a_id]' ";
								$query = mysqli_query($conn,$sqlreadact);
								$fetchact = mysqli_fetch_array($query);

								echo $fetchact['a_name'];
							?>
							</span>
						</a>
					</li>

					 <?php }?>
				
				
			

				
			
				<hr style="margin-bottom: unset">
					<li class="nav-header">เมนูการใช้งาน</li>
					<li class="">
						<a href="activity-list.php">
						<i class="fas fa-home"></i>
							<span>หน้าหลัก</span>
						</a>
					</li>
					<li class="">
						<a href="process/logout.php">
						<i class="fas fa-sign-out-alt"></i>
							<span>ออกจากระบบ</span>
						</a>
					</li>
					
					</li>
					<!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
					<!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->