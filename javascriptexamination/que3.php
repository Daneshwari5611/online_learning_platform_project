<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>Examination - JavaScript Loops and Strings</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<?php include "nav.php"; ?>

	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Examination</h1>
				</div>
			</div>
		</div>
	</header>
	
	<form method="POST" action="">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1>3. What will the following code output?</h1>
					<p>
						<code>
							let str = "JavaScript";<br>
							let result = "";<br>
							for (let i = str.length - 1; i >= 0; i--) {<br>
								&nbsp;&nbsp;result += str[i];<br>
							}<br>
							console.log(result);
						</code>
					</p>
				</div>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio" value="tpircSavaJ">tpircSavaJ</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio" value="JavaScript">JavaScript</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio" value="Error">Error</label>
			</div>
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
			<br>
		</div>
	</form>
	
	<br>
	
	<?php
		if(isset($_POST['submit'])) {
			$radval=$_POST['optradio'];
			if($radval == "tpircSavaJ") {
				echo '<a href="que4.php" class="btn">Next>></a>';
			} else {
				echo "<div class='alert alert-danger' role='alert'>Incorrect answer. Try Again!</div>";
			}
		}
	?>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
