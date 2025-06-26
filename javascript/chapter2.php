<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>eLearning - JavaScript: Operators and Conditional Statements</title>
    <link rel="icon" href="assets/images/favicon.png">
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
    <?php include "nav.php"; ?>
    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>JavaScript: Operators and Conditional Statements</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
                <h1>Operators in JavaScript</h1><br>
                <p>Operators are symbols used to perform operations on variables and values. JavaScript includes several types of operators:</p>
                <ul>
                    <li><b>Arithmetic Operators:</b> Used for mathematical calculations (e.g., +, -, *, /, %).</li>
                    <li><b>Assignment Operators:</b> Used to assign values to variables (e.g., =, +=, -=).</li>
                    <li><b>Comparison Operators:</b> Used to compare values (e.g., ==, ===, !=, >, <, >=, <=).</li>
                    <li><b>Logical Operators:</b> Used to combine conditional statements (e.g., &&, ||, !).</li>
                </ul>
                <hr>
                <h1>Examples of Operators</h1>
                <h4><b>Arithmetic Operators Example</b></h4>
                <?php 
                echo '<pre>';
                $str='var a = 10;
var b = 5;
var sum = a + b; // 15
var difference = a - b; // 5
var product = a * b; // 50
var quotient = a / b; // 2
var remainder = a % b; // 0';
                echo htmlspecialchars($str);
                echo '</pre>';
                ?>
                <hr>
                <h1>Conditional Statements in JavaScript</h1>
                <p>Conditional statements allow you to execute different code based on certain conditions. JavaScript supports several conditional statements:</p>
                <ul>
                    <li><b>if</b> statement: Executes a block of code if a specified condition is true.</li>
                    <li><b>else</b> statement: Executes a block of code if the condition in the <b>if</b> statement is false.</li>
                    <li><b>else if</b> statement: Specifies a new condition if the previous <b>if</b> condition is false.</li>
                    <li><b>switch</b> statement: Allows you to execute different code blocks based on different cases.</li>
                </ul>
                <hr>
                <h1>Example of Conditional Statements</h1>
                <h4><b>if-else Example</b></h4>
                <?php 
                echo '<pre>';
                $str='var age = 18;
if (age >= 18) {
    console.log("You are an adult.");
} else {
    console.log("You are a minor.");
}';
                echo htmlspecialchars($str);
                echo '</pre>';
                ?>
                <hr>
                <h1>Quiz</h1>
                <form method="post" action="">
                    <h1>Answer the following question to proceed to the next chapter.</h1>
                    <h3><label>1) Which operator is used to compare two values for equality?</label></h3>
                    <div class="radio">
                        <label><input type="radio" name="optradio" value="a">+</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio" value="b">==</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio" value="c">&&</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $radval = $_POST['optradio'];
                    if ($radval == "b") {
                        echo '<a href="chapter3.php" class="btn">Next>></a>';
                    } else {
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
