<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
			<li class="hm"><a href="<?php echo BASE_URL ?>admin/">Admin Login</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
			<li class="tol"><a href="#" data-toggle="modal" data-target="#signupmodal">Student Registration |</a></li>
			<li class="sig"><a href="#" data-toggle="modal" data-target="#signinmodal">Login</a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /top-header ---->

<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="<?php echo BASE_URL ?>">Online <span>Test Series</span></a>
		</div>

		<div class="lock fadeInDown animated" data-wow-delay=".5s">
			<li><i class="fa fa-lock"></i></li>
			<li>
				<div class="securetxt">SAFE &amp; SECURE </div>
			</li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
		<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo BASE_URL ?>">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">All Tests <b
										class="caret"></b></a>
								<ul class="dropdown-menu">
									<?php
									$selCourse = $dbh->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
									while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
										<li><a href="#">
												<?php echo $selCourseRow['cou_name']; ?>
											</a></li>
									<?php } ?>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Notifications <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Upcoming Bank Exam</a></li>
									<li><a href="#">Govt. Jobs Notifications</a></li>
									<li><a href="#">Admit Card</a></li>
									<li><a href="#">Result</a></li>
									<li><a href="#">Syllabus</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Notes <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Study Plan</a></li>
									<li><a href="#">Quantitative Aptitude</a></li>
									<li><a href="#">Reasoning Ability</a></li>
									<li><a href="#">English</a></li>
									<li><a href="#">Static Awareness</a></li>
								</ul>
							</li>
							<li>
								<a href="#" data-toggle="modal" data-target="#signupmodal">Student
									Registration</a>
							</li>
							<li>
								<a href="#" data-toggle="modal" data-target="#signinmodal">Student Login</a>
							</li>
						</ul>

					</nav>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>

		<div class="clearfix"></div>
	</div>
</div>