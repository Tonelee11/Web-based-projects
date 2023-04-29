<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="CSS.css">
    
    <style>
        body{
            
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: rgb(198, 197, 212);
        }
    </style>
</head>
<body>

<nav>
        <div class="logo">
            <a href="#">CCS</a>
        </div>
        <ul class="nav-links" id="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="Register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
        <div class="menu-icon" id="menu-icon">
            <div class="menu-icon_line"></div>
        </div>
    </nav>



    <div class="register">
    <div class="registering-cotent">
        <div class="heading-title">
    <h4>Welcome to the world of navigating computer devices using only built-in commands. Feel free to sign up to get in the world of troubleshooting, hacking and easy navigating of the programs on your machine, there more to learn.</h4>
    </div>
    </div>
    <div class="registering-cotent">
    <form method="post">
    <div class="container">
        <div class="signup form">
            <h1>Sign up</h1>
            <div class="inputBox">           
            <input type="text" required="required" name="fullname" placeholder="Full Name" required >
            </div>

            <div class="inputBox">
            <input type="email" required="required"   name="email" placeholder="Email" required >
            </div>

            <div class="inputBox">
            <input type="tel" required="required" name="phone" placeholder="Phone No" required >
            </div>

            <div class="inputBox">
                <input type="password" name="password" placeholder="password" required >
            </div>
            
            <div class="inputBox">
                <input type="submit" value="Create Account" name="submit" >
                </div>
             
            <div>
              <p>Already have an Account?  <a href="login.php" class="login">Login</a></p>
            </div>
        </div>
        </div>
    </form>

    </div>


    <?php

    if(isset($_POST['submit'])){
        $link = mysqli_connect("localhost", "root", "", "CCS");

        $Fname = $_POST['fullname'];
        $Email = $_POST['email'];
        $PhoneNo = $_POST['phone'];
        $password = $_POST['password'];

        if($Fname !='' &&  $Email != '' && $PhoneNo !='' && $password != ''){
            $query = "insert into users values('$Fname', '$Email', '$PhoneNo', '$password')";

            $result = mysqli_query($link, $query);

            $_SESSION['email'] = $Email;
            $_SESSION['password'] = $password;

            if($result){
                header('location: login.php');
            }
            else{
                echo mysqli_error($link);
            }
        }
    }
    ?>
</body>
</html>