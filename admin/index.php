<html>
<head>
	<meta charset="utf-8">
	<title>eLearning - Free Educational Responsive Web Template </title>
	<link rel="favicon" href="../assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../assets/css/da-slider.css" />
	<link rel="stylesheet" href="../assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php
		include "nav.php";
		$strconn=mysqli_connect("localhost","root","","project");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
		session_start();
		if(isset($_SESSION["username"]))
		{
			$username=$_SESSION["username"];
		}
		else{ echo 'session not started';}
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Admin</h1>
				</div>
			</div>
		</div>
	</header>
	<br>
	<div id="courses">
		<section class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
						<a href="expert.php">
						<img src="https://bluestaffinggroup.com/wp-content/uploads/2019/01/icon-22-1.png" alt='logo' class='logo'>
						<div class="text"><br><br>
							<h3>Add Expert</h3>
							<br>
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<a href="suggestion.php">
						<img src="https://cdn-icons-png.flaticon.com/512/7542/7542450.png" alt="logo" class="logo">
						<div class="text"><br><br>
							<h3>Suggestions</h3><br>
						</div>
						</a>
					</div>
				</div>
				
		</section>
	</div>
	</div>
	<div id="courses">
		<section class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
						<a href="manageuser.php">
						<img src="https://www.neuroneeds.com/wp-content/uploads/2021/03/neuropsychiatric-768x800.png" alt="logo" class="logo">
						<div class="text"><br><br>
							<h3>Manage Users</h3>
							<br>
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<a href="manageexpert.php">
						<img src="https://th.bing.com/th/id/OIP.IZRCVU22ORCOvaBWSQjHzAHaHa?w=499&h=500&rs=1&pid=ImgDetMain" alt="logo" class="logo">
						<div class="text"><br><br>
							<h3>Manage Expert</h3>
							<br>
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="courses">
		<section class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
						<a href="feedback.php">
						<img src="https://cdn-icons-png.flaticon.com/512/8021/8021848.png" alt="logo" class="logo">
						<div class="text"><br><br>
							<h3>Feedback</h3>
							<br>
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		

</body>
</html>