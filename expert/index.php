<html>
<head>
	<meta charset="utf-8">
	<title>eLearning - Free Educational Responsive Web Template </title>
	<link rel="favicon" href="assets/images/favicon.png">
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
					<h1>Welcome <?php echo $username;?></h1>
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
						<a href="Answer.php">
						<img src="https://th.bing.com/th/id/OIP._imdwWJawG9X6or8htZE6gHaHa?w=190&h=191&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="logo" class="logo">
						<div class="text"><br><br>
							<h3>Answer Doubts</h3>
							<br>
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<a href="Suggestion.php">
						<img src="https://cdn-icons-png.flaticon.com/512/7542/7542450.png" alt="logo" class="logo">
						<div class="text"><br><br>
							<h3>Suggestion to Admin</h3>
							<br>
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<a href="manage.php">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQquT7zTVvDMU3ygKxFKXDnAV7b81cRHUzBhbk-QNvFNfi01mXwhTS0Ep6idkN27KEC3o&usqp=CAU" alt="logo" class="logo">
						<div class="text"><br><br>
							<h3>Manage Profile</h3>
							<br>
						</div>
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>

</body>
</html>