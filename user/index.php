<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>About - Techro Bootstrap template</title>
	<link rel="favicon" href="../assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen">
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
		else{ echo "<div class='alert alert-danger' role='alert'>Something went wrong try login again.</div>";

		}
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
	<div id="courses">
		<section class="container">
			<h2>Online Courses</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="courses.php">
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQI4urk2NzEJzgEONOAfTqXDrjlyAeQbOX4lQ&s" alt='logo' class='logo' >
					<div class="text">
						<br><br><br>
							<h3> Courses</h3><br>
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="que.php">
                    <img src="data:image/jpeg;base64,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" alt='logo' class='logo' height=70px width=230px>
						<div class="text">
							<br><br>
							<h3>Ask Question to Expert</h3><br>
							
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="manage.php">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQquT7zTVvDMU3ygKxFKXDnAV7b81cRHUzBhbk-QNvFNfi01mXwhTS0Ep6idkN27KEC3o&usqp=CAU" alt="logo" class="logo">
						<div class="text">
							<br><br><br>
							<h3>Manage Profile</h3><br>
							
						</div>
					</a>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../assets/js/custom.js"></script>
</body>
</html>