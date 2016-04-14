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

<h2>Administration Page | Delete An Account</h2>


<?php
require_once('authorize.php');

$dbh = new PDO('mysql:host=localhost;dbname=MoMo', 'root', 'root');

$query = "SELECT * FROM MoMo.users";

$stmt = $dbh->prepare($query);
$stmt->execute();
$name = $stmt->fetchall();

echo'<table>';

echo '<tr><th>Name</th><th>Email</th><th>Password</th>';


foreach ($result as $row) {
    echo '<tr class="users"><td><strong>' . $row['name'] . '</strong></td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['password'] . '</td>';
    echo '<td><a href="remove.php?id=' . $row['id'] . '&amp;name=' . $row['name'] .
        '&amp;password' . '&amp;email=' . $row['email'] . $row['password'] . '">Remove</a>
</td></tr>';

}

echo '</table>';



?>


