<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>eLearning - JavaScript Notes</title>
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
                    <h1>JavaScript</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
                <h1>What is JavaScript?</h1><br>
                <p>JavaScript is a versatile scripting language that allows you to create dynamic and interactive content on the web. It is an essential component of web development, enabling you to enhance the functionality and user experience of websites.</p>
                <ul>
                    <li>JavaScript is a core technology of the web, alongside HTML and CSS.</li>
                    <li>It enables real-time updates and interactions without requiring a page reload.</li>
                    <li>JavaScript is primarily used for client-side scripting, but it can also be used on the server-side with environments like Node.js.</li>
                    <li>It allows you to manipulate the DOM (Document Object Model) and handle events.</li>
                    <li>JavaScript code runs in the user's web browser, making it a powerful tool for creating responsive web applications.</li>
                </ul>
                <hr>
                <h1>A Simple JavaScript Example</h1>
                <h4><b>Example</b></h4>
                <?php 
                echo '<pre>';
                $str = '<!DOCTYPE html>
<html>
<head>
    <title>JavaScript Example</title>
</head>
<body>
    <h1>My First JavaScript Example</h1>
    <p id="demo">This is a demonstration of JavaScript.</p>
    <script>
        document.getElementById("demo").innerHTML = "Hello, JavaScript!";
    </script>
</body>
</html>';
                echo htmlspecialchars($str);
                echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
                echo '</pre>';
                ?>
                <h1>Javascript example</h1>
                <ul>
                    <li>The <code>&lt;script&gt;</code> tag is used to include JavaScript code within an HTML document.</li>
                    <li>The <code>document.getElementById("demo").innerHTML</code> line of code updates the content of the HTML element with the ID "demo".</li>
                    <li>JavaScript code inside the <code>&lt;script&gt;</code> tag runs when the page loads or when triggered by events.</li>
                </ul>
                <hr>
                <h1>JavaScript Syntax</h1>
                <p>JavaScript syntax defines the rules for writing JavaScript code:</p>
                <?php 
                echo '<pre>';
                $str = 'var x = 5;
var y = 10;
var z = x + y;
console.log(z); // Output: 15';
                echo htmlspecialchars($str);
                echo '</pre>';
                ?>
                <ul>
                    <li><code>var</code> is used to declare variables. (In modern JavaScript, <code>let</code> and <code>const</code> are preferred.)</li>
                    <li><code>console.log</code> is used to print information to the browser console, useful for debugging.</li>
                    <li>Each JavaScript statement ends with a semicolon, although it is optional in many cases.</li>
                </ul>
                <hr>
                <!--  -->
                <hr>
                <h1>Quiz</h1>
                <form method="post" action="">
                    <h1>Answer the following question correct answer will lead you to next chapter.</h1>
                    <h3><label>1) What does JavaScript stand for?</label></h3>
                    <div class="radio">
                        <label><input type="radio" name="optradio" value="Java Script">Java Script</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio" value="JavaScript">JavaScript</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio" value="Java Scripting">Java Scripting</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $radval = $_POST['optradio'];
                    if ($radval == "JavaScript") {
                        echo '<a href="chapter2.php" class="btn">Next>></a>';
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
