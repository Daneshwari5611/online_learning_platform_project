<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
    <meta name="author" content="webThemez.com">
    <title>Manage Profile</title>
    <link rel="icon" href="../assets/images/favicon.png">
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
    <style>
        th, td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION["username"])) {
        echo 'Session not started. Please log in.';
        exit;
    }

    $originalUsername = $_SESSION["username"]; // Store the original username

    $strconn = mysqli_connect("localhost", "root", "", "project");
    if (!$strconn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }

    // Fetch the current profile details
    $query = "SELECT FirstName, LastName, Gender, Email_id, UserName, Password FROM user_info WHERE UserName='$originalUsername'";
    $result = mysqli_query($strconn, $query);
    if ($row = mysqli_fetch_array($result)) {
        $fname = $row["FirstName"];
        $lname = $row["LastName"];
        $gender = $row["Gender"];
        $email = $row["Email_id"];
        $password = $row["Password"];
    }
    ?>

    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Manage Profile</h1>
                </div>
            </div>
        </div>
    </header>

    <form method="POST" action="" id="regform">
        <table border="0" align="center">
            <tr>
                <td><label>Change Your First Name :</label></td>
                <td><input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>"></td>
            </tr>
            <tr>
                <td><label>Change Your Last Name :</label></td>
                <td><input type="text" class="form-control" name="lname" value="<?php echo $lname; ?>"></td>
            </tr>
            <div class="checkbox">
                <tr>
                    <td><label>Gender :</label></td>
                    <td>
                        <input type="radio" name="gender" value="male" <?php if ($gender == "male") { echo "checked"; } ?>>Male &nbsp;
                        <input type="radio" name="gender" value="female" <?php if ($gender == "female") { echo "checked"; } ?>>Female
                    </td>
                </tr>
            </div>
            <tr>
                <td><label>Email address :</label></td>
                <td><input type="email" class="form-control" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td><label>Enter User Name :</label></td>
                <td><input type="text" class="form-control" name="username" value="<?php echo $originalUsername; ?>"></td>
            </tr>
            <tr>
                <td><label>Change Password :</label></td>
                <td><input type="password" class="form-control" name="pass" value="<?php echo $password; ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><button class="btn btn-block" name="btn">Update</button></td>
            </tr>
        </table>
    </form>
    <br>
    <?php
    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['fname']) && !empty($_POST['lname'])) {
            if (isset($_POST['btn'])) {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $gender = $_POST['gender'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['pass'];

                $updateQuery = "UPDATE user_info SET FirstName='$fname', LastName='$lname', Gender='$gender', Email_id='$email', UserName='$username', Password='$password' WHERE UserName='$originalUsername'";

                $updateResult = mysqli_query($strconn, $updateQuery);

                if ($updateResult) {
                    // Update the session variable if the username was changed
                    $_SESSION["username"] = $username;
                    echo "<div class='alert alert-success' role='alert'>Profile updated successfully</div>";
                } else {
                    echo "<div class='alert alert-danger' role='alert'>Profile couldn't be updated</div>";
                }
            }
        }
    }

    mysqli_close($strconn); // Close the connection
    ?>
</body>
</html>
