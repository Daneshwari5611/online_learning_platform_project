<html>
<head>
	<meta charset="utf-8">
	<title>eLearning - Free Educational Responsive Web Template </title>
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
<h1>JavaScript Event Handling</h1>
<p>In JavaScript, events are actions or occurrences that happen in the browser, like clicking a button or submitting a form. JavaScript can respond to these events using event listeners.</p>

<h1>Adding Event Listeners</h1>
<p>You can add an event listener to an HTML element using the <b>addEventListener()</b> method.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='document.getElementById("myButton").addEventListener("click", function() {
  alert("Button was clicked!");
});';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>

<hr>

<h1>Common Events</h1>
<p>JavaScript can handle various events. Here are some of the most common ones:</p>
<ul>
	<li><b>click</b>: Fired when an element is clicked.</li>
	<li><b>mouseover</b>: Fired when the mouse is moved over an element.</li>
	<li><b>mouseout</b>: Fired when the mouse is moved away from an element.</li>
	<li><b>keydown</b>: Fired when a key is pressed down.</li>
	<li><b>keyup</b>: Fired when a key is released.</li>
	<li><b>load</b>: Fired when the page has fully loaded.</li>
</ul>

<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<button id="myButton">Click me</button>
<script>
document.getElementById("myButton").addEventListener("mouseover", function() {
  alert("Mouse over the button!");
});
</script>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>

<hr>

<h1>Event Object</h1>
<p>The event object is automatically passed to event handlers and contains information about the event.</p>
<p>For example, you can get the mouse coordinates during a click event:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='document.addEventListener("click", function(event) {
  alert("X: " + event.clientX + " Y: " + event.clientY);
});';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>

<hr>

<h1>Event Delegation</h1>
<p>Event delegation is a technique where you add a single event listener to a parent element to handle events on multiple child elements.</p>
<p>This is useful when you have many child elements and want to avoid adding individual event listeners to each one.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='document.getElementById("parentDiv").addEventListener("click", function(event) {
  if(event.target.tagName === "BUTTON") {
    alert("Button " + event.target.innerText + " clicked!");
  }
});';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>

<hr>

<h1>Prevent Default</h1>
<p>The <b>preventDefault()</b> method cancels the event if it is cancelable, meaning that the default action that belongs to the event will not occur.</p>
<p>For example, you might want to prevent the default form submission behavior:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='document.getElementById("myForm").addEventListener("submit", function(event) {
  event.preventDefault();
  alert("Form submission prevented!");
});';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>

<hr>

<form method="post" action="">
<h1>Answer the following question. The correct answer will lead you to the next chapter.</h1>
<h3><label>1) Which method is used to add an event listener in JavaScript?</label></h3>
<div class="radio">
	<label><input type="radio" name="optradio" value="a">addEventHandler()</label>
</div>
<div class="radio">
	<label><input type="radio" name="optradio" value="b">attachEventListener()</label>
</div>
<div class="radio">
	<label><input type="radio" name="optradio" value="c">addEventListener()</label>
</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
if(isset($_POST['submit']))
{
	$radval=$_POST['optradio'];
	if($radval=="c")
	{
		//echo 'true';
		echo '<a href="../javascriptexamination\index.php" class="btn">Next>></a>';
	}
	else
	{
		echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
	}
}
?>

<br>
			</div>
			<div class="col-md-2 col-md-pull-9" style="margin-top:10px;">
				<?php include "sidebar.php"; ?>
			</div>
		</div>
	</div>

</body>
</html>
