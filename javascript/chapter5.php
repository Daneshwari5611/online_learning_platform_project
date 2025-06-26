<html>
<head>
	<meta charset="utf-8">
	<title>eLearning - JavaScript Functions and Methods</title>
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
					<h1>JavaScript Functions and Methods</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
<h1>JavaScript Functions</h1>
<p>A JavaScript function is a block of code designed to perform a particular task.</p>
<ul>
	<li>A JavaScript function is executed when "something" invokes it (calls it).</li>
	<li>Functions are defined with the <b>function</b> keyword, followed by a name, followed by parentheses ().</li>
	<li>Function names can contain letters, digits, underscores, and dollar signs (same rules as variables).</li>
</ul>
<hr>
<h1>Creating a Function</h1>
<p>Here is how you can create a function in JavaScript:</p>
<?php
echo '<pre>';
$str='function myFunction() {
    console.log("Hello World");
}';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>Calling a Function</h1>
<p>You can call (or invoke) the function by using its name followed by parentheses:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='myFunction();';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>JavaScript Function Parameters</h1>
<p>Functions can take parameters, which are passed inside the parentheses.</p>
<p>Function parameters are the names listed in the function definition. Function arguments are the real values passed to (and received by) the function.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='function myFunction(name) {
    console.log("Hello " + name);
}

myFunction("John"); // Hello John';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>JavaScript Function Return</h1>
<p>The <b>return</b> statement stops the execution of a function and returns a value from that function:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='function add(a, b) {
    return a + b;
}

var sum = add(5, 10); // sum is 15';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>JavaScript Methods</h1>
<p>JavaScript methods are actions that can be performed on objects.</p>
<p>A JavaScript method is a property containing a function definition.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='var person = {
    firstName: "John",
    lastName: "Doe",
    fullName: function() {
        return this.firstName + " " + this.lastName;
    }
};

console.log(person.fullName()); // John Doe';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<form method="post" action="">
<h1>Answer the following question. The correct answer will lead you to the next chapter.</h1>
	<h3><label>1) Which keyword is used to define a JavaScript function?</label></h3>
	<div class="radio">
		<label><input type="radio" name="optradio" value="a">define</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">function</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">func</label>
	</div>
	<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<?php
if(isset($_POST['submit']))
{
	$radval=$_POST['optradio'];
	if($radval=="b")
	{
		echo '<a href="chapter6.php" class="btn">Next>></a>';
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
