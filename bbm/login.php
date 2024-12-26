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
				
				$q="SELECT * FROM log where username='$user' and password='$pass' " ;
				$qu=mysqli_query($conn,$q);
		
				if(mysqli_num_rows($qu)==1)
				{
					echo "Login success fully";
				}
				else
				{
					echo "<script>alert('incorrect Password')</script>";
				}
			}
			?>
        </form>
</div>



</body>
</html>