<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        //something was posted
        $FullName=$_POST['FullName'];
        $PhoneNumber=$_POST['PhoneNumber'];
        $Email=$_POST['Email'];
        $AdditionalInfo=$_POST['AdditionalInfo'];
        $Pick=$_POST['Pick'];
        $Destination=$_POST['Destination'];
        $time=$_POST['time'];
        $date=$_POST['date'];
        $Vehicle=$_POST['Vehicle'];

        if(!empty($FullName) && !empty($PhoneNumber)  && !empty($Email) && !empty($AdditionalInfo)  && !empty($Pick) && !empty($Destination) && !empty($time)  && !empty($date)  && !empty($Vehicle) && !is_numeric($FullName))
        {
            //save to database
            $user_id=random_num(20);
            $query = "insert into service(user_id,FullName,PhoneNumber,Email,AdditionalInfo,Pick,Destination,time,date,Vehicle) values ('$user_id','$FullName','$PhoneNumber','$Email','$AdditionalInfo','$Pick','$Destination','$time','$date','$Vehicle')";
            mysqli_query($con,$query);
            header("location:index.php");
            die;
        }else
        {
            echo "please enter valid digits";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Chauffeur System</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>
        </style>
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.html">
                                <h1>Chauffeur<span>ltd</span></h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <p>Mon - Fri, 8:00 - 9:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p>0705600227</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p>maxwellmurage@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="service.php" class="nav-item nav-link">Service</a>
                            <a href="logout.php" class="nav-item nav-link">logout</a>
                        <div class="ml-auto">
                            <a class="btn btn-custom" href="book.php">Book now</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
</div>
        <!-- Nav Bar End -->
<style>
    .container-1{
    max-width: 700px;
    width: 100%;
    background: #fff;
    padding:20px 30px;
    border-radius: 5px;
    height: 100%;
}
.container-1 .title{
    font-size:25px ;
    font-weight:400 ;
    position: relative;
    margin-top: 10px;
    top: 15px;
    left: 30%;
}
.container-1 .title:before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 100px;
    background: linear-gradient(135deg,#71b7e6,#9b59b6);
}
.container form .user-details{
display: flex;
flex-wrap: wrap;
justify-content: space-between;
width: 600px;
}
form .user-details .input-box{
    margin: 20px 0 12px 0;
width: calc(100% /2 - 20px);
}
.user-details .input-box .details{
    font-weight: 500;
    margin-bottom: 1px;
display: block;
}
.user-details .input-box input{
height: 40px;
width: 100%;
outline: none;
border-radius: 5px;
border: 1px solid #ccc;
padding-left: 15px;
font-size: 16px;
}
form .button{
    height: 45px;
    margin: 45px 0;
    width: 500px;
    padding-left: 20px;
}
form .button input{
    height: 100%;
    width: 100%;
    outline: none;
    color: #fff;
    background: linear-gradient(135deg,#71b7e6,#9b59b6);
    border: none;
    letter-spacing: 1px;
}
form .button input:hover{
    background: linear-gradient(-135deg,#71b7e6,#9b59b6);
}

</style>
        <section class="container">
    <div class="container-1">
        <div class="contain">
    <div class="title"> Booking form</div>
    <form method="post">
        <div class="user-details">
            <div class="input-box">
<div class="user-details">
            <div class="input-box">
                <span class="details">FullName</span>
                <input type="text" name="FullName" placeholder="Enter name"  required>
            </div>
            <div class="input-box">
                <span class="details">PhoneNumber</span>
                <input type="text" name="PhoneNumber" placeholder="Enter phone no" required>
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="Email" name="Email" placeholder="Enter Email" required>
            </div>
            <div class="input-box">
                <span class="details">AdditionalInfo</span>
                <input type="text" name="AdditionalInfo" placeholder="Additional info" required>
            </div>
            <div class="input-box">
                <span class="details">Pick</span>
                <input type="text" name="Pick" placeholder="Enter pick-up" required>
            </div>
            <div class="input-box">
                <span class="details">Destination</span>
                <input type="text" name="Destination" placeholder="Enter destination" required>
</div>
<div class="input-box">
                <span class="details">time</span>
                <input type="time" name="time"  required>
            </div>
            <div class="input-box">
                <span class="details">date</span>
                <input type="date" name="date"  required>
            </div>
            <div class="input-box">
                <span class="details">Vehicle</span>
                <input type="text" name="Vehicle" placeholder="Enter vehicle" required>
            </div>
            </div>
            <div class="button">
            <input type="submit" value="book">
            </div>
</div>
            </div>

        </form>
        </div>
        
</div>
</div>
</section>
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Wetlands , Nairobi, Kenya</p>
                            <p><i class="fa fa-phone-alt"></i>0705600227</p>
                            <p><i class="fa fa-envelope"></i>chauffeur@gmail.com</p>
                            <div class="footer-social">
                                <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">About Us</a>
                            <a href="">Contact Us</a>
                            <a href="">Our Service</a>
                    
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Our Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>copyright chauffeur &copy; 2022.All right Reserved  </p>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
