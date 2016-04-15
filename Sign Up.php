
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

<a class="image full"><img src="http://az835686.vo.msecnd.net/images/gallery/PBB_new.jpg" ></a>

<header><h2>Sign Up</h2></header>



<?php

$from = 'azaniyahs@yahoo.com';
$name = $_POST['newuser'];


if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


if (!empty($name) && !empty($email) && !empty($password)) {

    $dbh = new PDO('mysql:host=localhost;dbname=MoMo', 'root', 'root');


    $query = "INSERT INTO MoMo.users VALUES (0, :name, :email, :password)";


    echo '<p>Thank you for subscribing!!</p>';
    echo '<p><srtong>Name:</srtong> ' . $name . '<br </br />';
    echo '<p><strong>Email:</strong>' . $email . '</p>';
    echo '<p><a href="index.html">&lt;&lt; Return to homepage</a></p>';


    $stmt = $dbh->prepare($query);
    $result = $stmt->execute(
        array(
            'name' => $name,
            'email' => $email,
            'password' => $password,
        )
    );


}else{
?>
    <script>alert("Please add the information needed");</script>
<?php

}

}


?>

<!-- Sign Up Info -->
<section class="6u">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="row half">
            <div class="6u">
                <input name="name" placeholder="Name" type="text" class="text" value="<?php if (!empty($name)) echo $name; ?>">
            </div>
            <div class="6u">
                <input name="email" placeholder="Email" type="text" class="text" value="<?php if (!empty($email)) echo $email; ?>">
            </div>
        </div>
        <div class="row half">
            <div class="6u">
                <input name="password" placeholder="Password" type="password" class="text">
            </div>
        </div>
        <div class="row half">
            <div class="12u">
                <ul class="actions">
                    <li><input type="submit" value="Sign Up" name="submit" class="text"></li>
                </ul>
            </div>
        </div>
    </form>
</section>
</body>




</html>





