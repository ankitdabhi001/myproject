<?php
include("logcon.php");
?>

<!DOCTYPE html>

<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" type="text/css" href="log.css">
	
	
</head>
<body>

    <div id="form">
	
        <h1>login form</h1>
        <form name="form" method="post">
            <label>UserName:</label>
            <input type="text" id="user" name="user"/></br></br>
            <label>Password:</label>
            <input type="password" id="pass" name="pass"/></br></br>
            <button type="submit" name="bt">LOGIN</button>
			<?php
			
			if(isset($_POST["bt"]))
			{
				$user=$_POST["user"];
		
				$pass=$_POST["pass"];
				
				$q="SELECT * FROM sign where username='$user' and pass='$pass' " ;
				$qu=mysqli_query($conn,$q);
		
				if(mysqli_num_rows($qu)==1)
				{	
					header('location:navbar.html');
					echo "<script>alert('Login successfully')</script>";
				}
				else
				{
					echo "<script>alert('Incorrect Password or Username')</script>";
				}
			}
			?>
        </form>
		<p>You Have No Account? <a href="signup.php">SIGN UP</a></p>
</div>



</body>
</html>