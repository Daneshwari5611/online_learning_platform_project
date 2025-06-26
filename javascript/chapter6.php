<html>
<head>
	<meta charset="utf-8">
	<title>eLearning - JavaScript DOM Manipulation</title>
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
					<h1>JavaScript DOM Manipulation</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
<h1>JavaScript DOM Manipulation</h1>
<p>The DOM (Document Object Model) allows JavaScript to access and manipulate HTML elements and attributes.</p>
<p>Common DOM manipulation tasks include changing content, modifying attributes, and adding or removing elements.</p>

<h1>Accessing DOM Elements</h1>
<p>You can use methods like <b>getElementById</b> or <b>querySelector</b> to access DOM elements:</p>
<?php
echo '<pre>';
$str='document.getElementById("myElement");';
echo htmlspecialchars($str);
echo '</pre>';
?>

<h1>Changing HTML Content</h1>
<p>You can change the inner content of an HTML element using the <b>innerHTML</b> property:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='document.getElementById("myElement").innerHTML = "New Content";';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>

<h1>Changing HTML Attributes</h1>
<p>You can change the attributes of an HTML element using the <b>setAttribute</b> method:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='document.getElementById("myImage").setAttribute("src", "newImage.jpg");';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>

<h1>Adding and Removing Elements</h1>
<p>Use the <b>createElement</b> and <b>appendChild</b> methods to add a new element to the DOM:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='var newElement = document.createElement("p");
newElement.innerHTML = "This is a new paragraph.";
document.body.appendChild(newElement);';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>

<hr>
<form method="post" action="">
<h1>Answer the following question. The correct answer will lead you to the next chapter.</h1>
	<h3><label>1) Which method is used to access an HTML element by its ID?</label></h3>
	<div class="radio">
		<label><input type="radio" name="optradio" value="a">getElementById</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">querySelector</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">getElementsByClassName</label>
	</div>
	<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<?php
if(isset($_POST['submit']))
{
	$radval=$_POST['optradio'];
	if($radval=="a")
	{
		echo '<a href="chapter7.php" class="btn">Next>></a>';
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
