<html>
<head>
	<meta charset="utf-8">
	<title>eLearning - JavaScript Loops and Strings</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php
		include "nav.php";
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>JavaScript</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
<h1>JavaScript Loops</h1>
<p>JavaScript loops can execute a block of code a number of times.</p>
<p>The most common types of loops in JavaScript are:</p>
<ul>
	<li><?php $str='for'; echo htmlspecialchars($str); ?> loop</li>
	<li><?php $str='while'; echo htmlspecialchars($str); ?> loop</li>
	<li><?php $str='do...while'; echo htmlspecialchars($str); ?> loop</li>
</ul>
<h4><b>Example of a for loop</b></h4>
<?php
echo '<pre>';
$str='for (let i = 0; i < 5; i++) {
    console.log("The number is " + i);
}';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>JavaScript Strings</h1>
<p>JavaScript strings are used for storing and manipulating text.</p>
<p>Strings are written inside double or single quotes:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='let text = "Hello World!";
let text2 = \'Hello World!\';';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<p>You can use backslash to escape special characters:</p>
<p><?php $str='let text = "It\'s a great day!";'; echo htmlspecialchars($str); ?></p>
<hr>
<h1>String Methods</h1>
<p>JavaScript provides many methods to manipulate strings:</p>
<ul>
	<li><?php $str='length'; echo htmlspecialchars($str); ?>: returns the length of a string</li>
	<li><?php $str='toUpperCase()'; echo htmlspecialchars($str); ?>: converts a string to uppercase</li>
	<li><?php $str='toLowerCase()'; echo htmlspecialchars($str); ?>: converts a string to lowercase</li>
</ul>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='let text = "Hello World!";
let length = text.length;
let upper = text.toUpperCase();
let lower = text.toLowerCase();';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr><form method="post" action="">
<h1>Quiz</h1>
					<h3><label>1) Which method is used to convert a string to lowercase?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a"><?php $s='toLowerCase()'; echo htmlspecialchars($s); ?></label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b"><?php $s='toUpperCase()'; echo htmlspecialchars($s); ?></label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c"><?php $s='length'; echo htmlspecialchars($s); ?></label>
	</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="a")
		{
			echo '<a href="chapter4.php" class="btn">Next>></a>';
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
		}
	}
?>
			</div>
			<div class="col-md-2 col-md-pull-9" style="margin-top:10px;">
				<?php include "sidebar.php"; ?>
			</div>
		</div>
	</div>

	
</body>
</html>
