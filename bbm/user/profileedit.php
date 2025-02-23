
<?php
session_start();
include('logcon.php');

$id = $_SESSION["userid"];

$query = "select * from sign where uid=$id";
$resul1t = mysqli_query($conn, $query);
$row1 = mysqli_fetch_assoc($result1);


if(isset($_POST["submit"]))
{
	 $id = $_GET["id"];
    $name=$_POST["name"];
    $mobile=$_POST["mobile"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $repass=$_POST["repass"];


$query1="UPDATE `sign` SET `phone`=' $mobile',`email`='$email',`pass`='$pass',`confirm`='$repass' WHERE username='$name'";
$result1 = mysqli_query($conn, $query1);
}
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
            <form method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text"   name="mobile" placeholder="Enter phone number">
                </div>
                <div class="form-group">
                    <label>Email ID</label>
                    <input type="email"  name="email" placeholder="Enter email ID">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text"  name="pass" placeholder="Password">
                </div>

                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="text"   name="repass" placeholder="Confirm Password">
                </div>

                <input type="submit" name="submit" id="s1"></input>

              
            </form>
        </div>
    </div>
</body>

</html>