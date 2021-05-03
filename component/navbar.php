<!-- begin #header -->
<div id="header" class="header navbar-inverse s1">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="activity-list.php" class="navbar-brand"> <b>ระบบลงทะเบียนกีฬา</b>คณะสีสามัคคี<small>&nbsp;2563</small></a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				
				
				<li class="dropdown navbar-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<div class="image image-icon bg-black text-grey-darker">
							<i class="fa fa-user"></i>
						</div>
						<span class="d-none d-md-inline"><?php echo $_SESSION["s_fname"]  ; echo $_SESSION["s_name"]; echo "&nbsp;"  ; echo $_SESSION["s_lname"]  ; ?></span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						
						<a href="process/logout.php" class="dropdown-item">ออกจากระบบ</a>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->