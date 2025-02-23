<?php
include("config.php");
?>

<!DOCTYPE html>

<html lang="en">


<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/log.css">


</head>

<body>

	<div id="form">

		<h1>Admin Form</h1>
		<form name="form" method="post">
			<label>UserName:</label>
			<input type="text" id="user" name="user" /></br></br>
			<label>Password:</label>
			<input type="password" id="pass" name="pass" /></br></br>
			<button type="submit" name="bt">Admin LOGIN</button>
			<?php

			if (isset($_POST["bt"])) {
				$user = $_POST["user"];

				$pass = $_POST["pass"];

				$queryy = "SELECT * FROM adminn where username='$user' and password='$pass' ";
				$quer = mysqli_query($conn, $queryy);

				if (mysqli_num_rows($quer) == 1) {
<<<<<<< HEAD
					header('location:dashboard.php');
=======
					header('location:admin.php');
>>>>>>> 85fa737c1d859c409e8bed9e0a7e894225e6c6f5
					echo "<script>alert('Login successfully')</script>";
				} else {
					echo "<script>alert('Incorrect Password or Username')</script>";
				}
			}
			?>
		</form>

	</div>



</body>

</html>