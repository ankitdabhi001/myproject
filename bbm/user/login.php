<?php
session_start();
include("logcon.php");
<<<<<<< HEAD:bbm/login.php

=======
error_reporting(0);
//echo $_SESSION['log1'];
>>>>>>> 85fa737c1d859c409e8bed9e0a7e894225e6c6f5:bbm/user/login.php
?>


<!DOCTYPE html>

<html lang="en">


<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/log.css">
	
	
</head>
<body>
<?php
include("navigation.php");
?>
    <div id="form">
	
        <h1>login form</h1>
        <form name="form" method="post">
            <label>UserName:</label>
            <input type="text" id="user" name="user"/></br></br>
            <label>Password:</label>
            <input type="password" id="pass" name="pass"/></br></br>
            <button type="submit" name="bt">LOGIN</button>
			   </form>
			<?php
			
			if(isset($_POST["bt"]))
			{
				$user=$_POST["user"];
				$pass=$_POST["pass"];
				$q="SELECT * FROM sign where username='$user' and pass='$pass' " ;
				$qu=mysqli_query($conn,$q);
				if(mysqli_num_rows($qu)==1)
				{	
					echo "<script>alert('Login successfully')</script>";
					header('location:home.php');
<<<<<<< HEAD:bbm/login.php
=======
					$_SESSION['log1']='login';
					echo $_SESSION['log1'];
>>>>>>> 85fa737c1d859c409e8bed9e0a7e894225e6c6f5:bbm/user/login.php
				}
				else
				{
					echo "<script>alert('Incorrect Password or Username')</script>";
					$_SESSION['log1']='logout';
					echo $_SESSION['log1'];	
				}
			}
			?>
     
		<p>You Have No Account? <a href="signup.php">SIGN UP</a></p>
</div>



</body>
</html>

<?php
include("fotter.php");
?>