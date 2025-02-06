<?php
$conn = new mysqli("localhost", "root", "", "boat");

$query = "select * from sign";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings</title>
    <link rel="stylesheet" href="css/profileedit.css">
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
                    <label>Name</label>
                    <input type="text" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" placeholder="Enter phone number">
                </div>
                <div class="form-group">
                    <label>Email ID</label>
                    <input type="email" placeholder="Enter email ID">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" placeholder="Password">
                </div>

                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="text" placeholder="Confirm Password">
                </div>

                <button type="submit" class="save-btn">Save Profile</button>
            </form>
        </div>
    </div>
</body>

</html>