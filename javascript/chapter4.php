<html>
<head>
	<meta charset="utf-8">
	<title>eLearning - JavaScript Arrays</title>
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
					<h1>JavaScript Arrays</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
<h1>JavaScript Arrays</h1>
<p>Arrays are used to store multiple values in a single variable.</p>
<ul>
	<li>An array is a special variable, which can hold more than one value at a time.</li>
	<li>Each value in an array is called an <b>element</b>.</li>
	<li>Elements in an array are accessed using an <b>index</b>, with the first element having an index of 0.</li>
</ul>
<hr>
<h1>Creating an Array</h1>
<p>There are several ways to create an array in JavaScript. The most common method is to use the <b>array literal</b> syntax:</p>
<?php
echo '<pre>';
$str='var fruits = ["Apple", "Banana", "Mango"];';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>Accessing Array Elements</h1>
<p>You can access an array element by referring to the index number:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='var firstFruit = fruits[0]; // Apple';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>Changing Array Elements</h1>
<p>You can change the value of a specific element by accessing the index number:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='fruits[0] = "Kiwi";';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>Array Properties and Methods</h1>
<p>JavaScript arrays have several built-in properties and methods:</p>
<table border=1 class="table">
	<tr>
		<th><b>Property/Method</b></th>
		<th><b>Description</b></th>
	</tr>
	<tr>
		<td>length</td>
		<td>Returns the number of elements in an array</td>
	</tr>
	<tr>
		<td>push()</td>
		<td>Adds one or more elements to the end of an array and returns the new length</td>
	</tr>
	<tr>
		<td>pop()</td>
		<td>Removes the last element from an array and returns that element</td>
	</tr>
	<tr>
		<td>shift()</td>
		<td>Removes the first element from an array and returns that element</td>
	</tr>
	<tr>
		<td>unshift()</td>
		<td>Adds one or more elements to the beginning of an array and returns the new length</td>
	</tr>
	<tr>
		<td>concat()</td>
		<td>Joins two or more arrays and returns a new array</td>
	</tr>
	<tr>
		<td>splice()</td>
		<td>Adds/Removes elements from an array</td>
	</tr>
	<tr>
		<td>slice()</td>
		<td>Returns selected elements in an array, as a new array</td>
	</tr>
</table>
<hr>
<form method="post" action="">
<h1>Quiz</h1>
					<h3><label>1) Which of the following methods adds an element to the end of an array?</label></h3>
					<div class="radio">
						<label><input type="radio" name="optradio" value="a">pop()</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="optradio" value="b">push()</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="optradio" value="c">shift()</label>
					</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="b")
		{
			echo '<a href="chapter5.php" class="btn">Next>></a>';
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
