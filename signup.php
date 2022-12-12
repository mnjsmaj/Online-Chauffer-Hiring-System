<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        //something was posted
        $user_name= $_POST['user_name'];
        $password= $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //save to database
            $user_id=random_num(20);
            $query = "insert into users(user_id,user_name,password) values ('$user_id','$user_name','$password')";
            mysqli_query($con,$query);
            header("location:login.php");
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="center">
        <h1>Signup Form</h1>
        <form method="post">
            <div class="text-field">
                <input type="text"name="user_name"required>
                <span></span>
                <label>user_name</label>
            </div>
            <div class="text-field">
                <input type="password"name="password"required>
                <span></span>
                <label>password</label>
</div>
<div class="pass">forget password</div>
<input type="submit" value="signup">
<div class="signup">
    Arleady a member <a href="login.php">Login</a>
</div>

        </form>
    </div>
</div>
</body>
</html>