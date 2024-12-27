<?php
 $conn = new mysqli("localhost", "root", "", "boat");
 
 if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
echo"connection success";
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="sign.css">
</head>
<body>
    <div class="container">
        <h2>Create an Account</h2>
        <form action="signup.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
			<div class="form-group">
                <label for="phone">Phone No</label>
                <input type="text" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
			
			 <div class="form-group">
                <label for="re-pass">Confirm Password</label>
                <input type="password" id="password" name="password" required>
            </div>
			
			 <div class="form-group">
                <label for="gender">Select Gender</label></br>
                <input type="radio" id="male" name="male" value="Male"required>
				<label for="gender">Male</label>
				
				<input type="radio" id="female" name="female" value="female"required>
				<label for="gender">Female</label>

            </div>
			
            <div class="form-group">
                <button type="submit" class="submit-btn">Sign Up</button>
            </div>
        </form>
        <p>Already Have An Account? <a href="login.php">Log In</a></p>
    </div>
</body>
</html>
