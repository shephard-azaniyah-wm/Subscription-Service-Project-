<!DOCTYPE HTML>
<html>
<head>
    <title>MoMo | Admin</title>
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
                        <li><a href="Login.php">Login</a></li>
                    </ul>
                </li>
                <li><a href="left-sidebar.html">Makeup</a></li>
                <li class="break"><a href="right-sidebar.html">Hair</a></li>
                <li><a href="no-sidebar.html">About Us</a></li>
            </ul>
        </nav>
    </div>
</div>

<header>
<h2 align="center">Administration Page | Deleting Account Below</h2>
</header>

<?php

require_once('authorize.php');


if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['email']) && isset($_GET['password'])) {
    // Grab the account data from the GET
    $id = $_GET['id'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];
}
else if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    // Grab the score data from the POST
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}
else {
    echo '<p class="error">Sorry, no account was specified for removal.</p>';
}

if (isset($_POST['submit'])) {
    if ($_POST['confirm'] == 'Yes') {

        // Connect to the database
        $dbh = new PDO('mysql:host=localhost;dbname=MoMo', 'root', 'root');
        // Delete the account data from the database
        $query = "DELETE FROM MoMo.users WHERE id = $id";

        $stmt = $dbh->prepare($query);
        $stmt->execute();
        $name = $stmt->fetchall();

        // Confirm success with the user
        echo '<p>The account of ' . $name . '  ' . $email . ' was successfully removed.';
    }
    else {
        echo '<p class="error">The account was not removed.</p>';
    }
}
else if (isset($id) && isset($name) && isset($email) && isset($password)) {
    echo '<p>Are you sure you want to delete the following Account?</p>';
    echo '<p><strong>Name: </strong>' . $name . '<br /><strong>Email: </strong>' . $email . '</p>';
    echo '<form method="post" action="remove.php">';
    echo '<input type="radio" name="confirm" value="Yes" /> Yes ';
    echo '<input type="radio" name="confirm" value="No" checked="checked" /> No <br />';
    echo '<input type="submit" value="Submit" name="submit" />';
    echo '<input type="hidden" name="id" value="' . $id . '" />';
    echo '<input type="hidden" name="name" value="' . $name . '" />';
    echo '<input type="hidden" name="email" value="' . $email . '" />';
    echo '<input type="hidden" name="password" value="' . $password . '" />';
    echo '</form>';
}

echo '<p><a href="admin.php">&lt;&lt; Back to admin page</a></p>';
?>
