<?php
session_start();
error_reporting(0);
//echo $_SESSION['log1'];
?>
<!DOCTYPE html>

<html>
    <head>
     <meta charset="utf-8">
        <meta name ="viewport" content="width=device-width,initial-scale=1"> 

        <title>menu</title>
        <link rel="stylesheet" type="text/css" href="css/nav.css">
    </head>
    <body><?php
        if($_SESSION['log1']=='login')
        {
            //echo '<a id="log" href="#" class="login-btn">LOGOUT</a></h2>';
            echo '<form method=post>';

            echo '<h2 class="logo"><img src="css/images/download.png"><span>B</span>oat<span>B</span>ooking<input id="logout" type=submit name=log1 value="LOGOUT"></h2>';
            if(isset($_POST['log1']))
            {
                $_SESSION['log1']='logout';
                header('location:home.php');
            }
            
            echo '</form>';
        }
        else
        {

        
            echo '<h2 class="logo"><img src="css/images/download.png"><span>B</span>oat<span>B</span>ooking<a href="signup.php" id="sign" class="submit-btn">SIGN UP</a>';
            echo '<a id="log" href="login.php" class="login-btn">LOGIN</a></h2>';
        }
        ?>  <nav>   
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="service.php">SERVICES</a></li>
                <li><a href="bokingstatus.php">BOOKING STATUS</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <?php
                    if($_SESSION['log1']=='login')
                    { 
                    echo '<li> <a href="profile.php">PROFILE</a></li>' ;
                    }
                ?>
            </ul>
            </nav>