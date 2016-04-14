<!DOCTYPE HTML>
<html>
<head>
    <title>MoMo Box</title>
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
<body class="homepage">
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

    <?php

    $dbh = new PDO('mysql:host=localhost;dbname=MoMo', 'root', 'root');

    $query = "SELECT * FROM MoMo.users";

    $stmt = $dbh->prepare($query);
    $stmt->execute();
    $name = $stmt->fetchAll();






    ?>





    <section id="hero" class="container">
        <header>
            <!--TITLE OF PAGE -->
            <h2>Subscribe To Get Makeup For Each Month</h2>
        </header>
        <p>Get a new set each month.</p>
        <ul class="actions">
            <li><a href="#" class="button">Get this party started</a></li>
        </ul>
    </section>
</div>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <section class="6u feature">
                <div class="image-wrapper first"> <a href="#" class="image full first"><img src="http://sites.psu.edu/siowfa15/wp-content/uploads/sites/29639/2015/09/makeup.jpg" alt=""></a> </div>
                <header>
                    <h2>Team Makeup</h2>
                </header>
                <p>Receive a box full of name brand beauty products and show off your unique glow.</p>
                <ul class="actions">
                    <li><a href="#" class="button">Subscribe Now</a></li>
                </ul>
            </section>
            <section class="6u feature">
                <div class="image-wrapper"> <a href="#" class="image full"><img src="http://www.headmastershairteam.co.uk/wp-content/uploads/2014/09/Hair-Model-Styles-Get-101473.jpg" height="384" alt=""></a> </div>
                <header>
                    <h2>Team Hair<br>
                    </h2>
                </header>
                <p>Receive a box full of name brand hair products for your lovely mane.</p>
                <ul class="actions">
                    <li><a href="#" class="button">Subscribe Now</a></li>
                </ul>
            </section>
        </div>
    </div>
</div>
<div id="promo-wrapper">
    <section id="promo">
        <h2>Why not subscribe today? </h2>
        <a href="#" class="button">Monthly Box</a> </section>
</div>
<div class="wrapper">
    <section class="container">
        <header class="major">
            <h2>Need Some Help?</h2>
            <span>The link below shows you many different types of tutorials found on Pinterest.</span> </header>
        <div class="row features">
            <section class="4u feature">
                <div class="image-wrapper first"> <a href="#" class="image full"><img src="http://i1063.photobucket.com/albums/t512/emilymmeyers13/The_Freckled_fox_hair_tutorial_festival_hairstyle_bohemian_Perfect_messy_bun_mainsmall_zps80152514.jpg" alt=""></a> </div>
                <p>Hairstyles</p>
            </section>
            <section class="4u feature">
                <div class="image-wrapper"> <a href="admin.php" class="image full"><img src="http://newest-makeup.com/wp-content/uploads/2015/07/office-makeup-2015.png" height="370" alt=""></a> </div>
                <p>Makeup</p>
            </section>
            <section class="4u feature">
                <div class="image-wrapper"> <a href="#" class="image full"><img src="http://shaunehayesmakeup.com/blog/wp-content/uploads/2013/03/Vitta2.jpg" width="700" height="370" alt=""></a> </div>
                <p>And More</p>
            </section>
        </div>
        <ul class="actions major">
            <li><a href="https://www.pinterest.com/oceancrazed26/cute-hair-makeup-ideas/" class="button">Tutorials</a></li>
        </ul>
    </section>
</div>
<div id="footer-wrapper">
    <div id="footer" class="container">
        <header class="major">
            <h2>Want To Rate Our Box?</h2>
            <span>Give us a review and share MoMo Box with friends and family.</span> </header>
        <div class="row">
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
                        <div class="12u">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="row half">
                        <div class="12u">
                            <ul class="actions">
                                <li><a href="#" class="button">Send Message</a></li>
                                <li><a href="#" class="button">Clear Form</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </section>
            <section class="6u">
                <div class="row no-collapse-1">
                    <ul class="divided icons 6u">
                        <li class="icon icon-twitter"><a href="#"><span class="extra">twitter.com/</span>untitled</a></li>
                        <li class="icon icon-facebook"><a href="#"><span class="extra">facebook.com/</span>untitled</a></li>
                        <li class="icon icon-dribbble"><a href="#"><span class="extra">dribbble.com/</span>untitled</a></li>
                    </ul>
                    <ul class="divided icons 6u">
                        <li class="icon icon-linkedin"><a href="#"><span class="extra">linkedin.com/</span>untitled</a></li>
                        <li class="icon icon-youtube"><a href="#"><span class="extra">youtube.com/</span>untitled</a></li>
                        <li class="icon icon-pinterest"><a href="#"><span class="extra">pinterest.com/</span>untitled</a></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <div id="copyright" class="container">
        <ul class="menu">
            <li>&copy; MoMo Box. All rights reserved.</li>
        </ul>
    </div>
</div>
</body>





</html>
