<?php
session_start();
include('logcon.php');

$id = $_SESSION["userid"];

$query = "select * from sign where uid=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings</title>
    <link rel="stylesheet" href="css/profile.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img src="css/images/boat10.jpg" alt="Profile Picture" class="profile-pic">
            <h2 class="profile-name"><?php echo $row['username']; ?></h2>
            <p class="profile-email"><?php echo $row['email']; ?></p>
        </div>
        <div class="profile-form">
            <h2>Profile Settings</h2>
            <form>
                <div class="form-group">
                    <label for="name">Name :- </label> 
					 <input type="text" name="name" id="name" value="<?php echo $row["username"]; ?>" readonly>
                    
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile Number :-</label>
					<input type="text" name="mono" id="phone" minlength="10" maxlength="10" value="<?php echo $row["phone"]; ?>" readonly>
                    
                </div>
                <div class="form-group">
                    <label for="email">Email ID :-</label>
					 <input type="email" name="Email" id="email"  value="<?php echo $row["email"]; ?>" readonly>
                    
</div>

                <a id="save" href="ppp.php">Edit Profile</a>
            </form>
        </div>
    </div>
</body>

</html>