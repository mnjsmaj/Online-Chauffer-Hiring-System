<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online chauffeur hiring</title>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="header">
    <nav>
        <a href="index.php"></a>
        <label class="logo">Hello <?php echo $user_data['user_name'] ?></label>
        <div class="nav-links">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="book.php">BOOK</a></li>
                <li><a href="">MANAGE</a></li>
                <li><a href="services.php">SERVICES</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </div>
    </nav>
    </section>
    <section class="service">
        <div class="head">
        <h1>BEST TOUR SERVICE</h1>
            <p>Your tour is our priority</p>
        </div>
    </section>
    <div class="booking">
    <h1>FLEET</h1>
    <P>OUR AFFORDABLE CARS</P>
    In need of car<a href="book.php"> book one</a>
    </div>
    
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-row">
                    <h4>HELP</h4>
                    <ul>
                        <li><a href="book.php">BOOK TOUR</a></li>
                        <li><a href="signup.php">SIGN UP</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-row">
                    <h4>CONTACT</h4>
                    <div class="social-links"></div>
                    <ul>
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/login"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://ke.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </ul>
                </div>
                <div class="footer-row">
                    <h4>OFFICE</h4>
                    <div class="office">
                        <ul>
                        <li><a href="#">Nairobi</a></li>
                        <li><a href="signup.php">Thika</a></li>
                        <li><a href="#">Nyeri</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>