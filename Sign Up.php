
<!DOCTYPE HTML>
<html>
<head>
    <title>MoMo | Hair</title>
    <meta charset="utf-8">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600" rel="stylesheet" type="text/css">
    <!--[if lte IE 8]>
    <script src="js/html5shiv.js">
    <![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dropotron.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel-noscript.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-n1.css">
    </noscript>
</head>
<body class="right-sidebar">
<div id="header-wrapper">
    <div id="header" class="container">
        <h1 id="logo"><a href="index.html">MoMo Box</a></h1>
        <nav id="nav">
            <ul>
                <li> <a href="">Sign Up</a>
                    <ul>
                        <li><a href="Sign%20Up.php">Sign Up</a></li>
                        <li><a href="Login.html">Login</a></li>
                        <li><a href="#">Makeup Subscription</a></li>
                        <li><a href="#">Hair Subscription</a></li>
                    </ul>
                </li>
                <li><a href="left-sidebar.html">Makeup</a></li>
                <li class="break"><a href="right-sidebar.html">Hair</a></li>
                <li><a href="no-sidebar.html">About Us</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- Sign Up Info -->
<section class="6u">
    <form method="post" action="#">
        <div class="row half">
            <div class="6u">
                <input name="name" placeholder="Name" type="text" class="text">
            </div>
            <div class="6u">
                <input name="email" placeholder="Email" type="text" class="text">
            </div>
        </div>
        <div class="row half">
            <div class="6u">
                <input name="Password" placeholder="Password" type="password" class="text">
            </div>
        </div>
        <div class="row half">
            <div class="12u">
                <ul class="actions">
                    <li><a href="#" class="button" name="submit">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </form>
</section>
</body>


<?php

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}


if (!empty($username) && !empty($email) && !empty($password)) {

$dbh = new PDO('mysql:host=localhost;dbname=MoMo', 'root', 'root');

$query = "INSERT INTO MoMo.users VALUES (:username, :email, :password, :)";
    
}


?>

</html>





