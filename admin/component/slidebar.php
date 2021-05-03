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
								<?php echo $_SESSION["t_fname"]  ; echo $_SESSION["t_name"]; echo "&nbsp;"  ; echo $_SESSION["t_lname"]  ; ?>
								<small>ผู้ดูแลระบบ</small>
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
				

					<li class="nav-header">เมนูการใช้งาน</li>
					<li class="">
						<a href="activity-list.php">
						<i class="fas fa-home"></i>
							<span>หน้าหลัก</span>
						</a>
					</li>
					<li class="">
						<a href="manage-activity.php">
						<i class="fas fa-table"></i>
							<span>บริหารจัดการกีฬา</span>
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