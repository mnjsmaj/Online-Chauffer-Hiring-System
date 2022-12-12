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
        //read from database
        $query = "select * from users where user_name='$user_name' limit 1";
        $result = mysqli_query($con, $query);
        if($result)
        {
            if($result && mysqli_num_rows($result) >0)
            {
                $user_data=mysqli_fetch_assoc($result);
                
                if($user_data['password'] ===$password )
                {
                    $_SESSION['user_id'] =$user_data['user_id'];
                    header("location:index.php");
                    die;
               }
            }
        }
      
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
    <title>login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="center">
        <h1>Login Form</h1>
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
<input type="submit" value="login">
<div class="signup">
    Not a member? <a href="signup.php">signup</a>
</div>

        </form>
    </div>
</div>
</body>
</html>