<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS.css">

    <style>
        form{
           padding-top: 8%; 
           padding-left: 20%;
        }
        body{
            background: rgb(198, 197, 212);
        }
        nav{
           background-color: #37794d;
        }
        .nav-links{
           justify-content: space-around;
           width: 50%;
        }

        @media(max-width: 478px){
            .nav-links{
                width: 100%; 
        }
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



    
    <form method="post">
    <div class="container">
        <div class="signup form">
            <h1>Login</h1>
            <div class="inputBox">
            <input type="email" required="required"   name="email" placeholder="Email">
            </div>

            <div class="inputBox">
                <input type="password" name="password" required="required" placeholder="password">
            </div>
            
            <div class="inputBox">
                <input type="submit" value="Login" name="login">
                </div>
             
            <div>
              <p>Don't have an Account?  <a href="Register.php" class="login">Register </a></p>
            </div>
        </div>
        </div>
    </form>

    </div>
   <?php
      if(isset($_POST['login'])){
        $link = mysqli_connect("localhost", "root", "", "CCS");

        $Email = $_POST['email'];
        $password = $_POST['password'];
         
        if($Email!='' && $password !=''){
        $query = "select * from users where Password ='$password'";
          $query = "select * from users where Email ='$Email'";
          $result = mysqli_query($link, $query);
          
            if(mysqli_num_rows($result)==1){
               $_SESSION['email'] = $Email;
               $_SESSION['password'] = $password;

               $row = mysqli_fetch_array($result);
        
                if($row ['Password']=='Admin@75!' && $row ['Email']== $Email){
                    header('location: CCS.admin.php');

                    if($row ['Password']!='Admin@75!'){
                        echo "invalid Password";
                    }
                }
                else{
                    if($row ['Password'] == $password && $row ['Email']== $Email){
                        header('location: CCS.users.php');
                    }
                    else{
                        echo "Invalid password or username";
                    }
                }
            }
            else{
            echo "<p style=color:red> Invalid Email or password";
            }
        }
        else{
            echo "Please enter all fields";
        }
    }
   ?>
</body>
</html>