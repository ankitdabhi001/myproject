<?php

include('navigation.php');

?>

<?php
$conn = new mysqli("localhost", "root", "", "boat");
/*
 if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
echo"connection success"; */

if (isset($_POST["signup"])) {
    $username = $_POST["name"];

    $phone = $_POST["phone"];

    $email = $_POST["email"];

    $pass = $_POST["password"];

    $confirm = $_POST["confirm"];
    $check_email = "select * from sign where email='$email'";
    $check = $conn->query($check_email);

    if ($check->num_rows > 0) {
        echo "<script>alert('this email is alredy taken please select another email')</script>";
    } else {
        $q = "INSERT INTO sign (username, phone, email, pass, confirm) VALUES ('$username',$phone, '$email', '$pass','$confirm')";
    }

    if ($conn->query($q) === TRUE) {
        echo $success_message = "<script>alert('New record created successfully. You can now log in.')</script>";
    } else {
        "Error: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="css/sign.css">
</head>

<body>
    <div class="container">
        <h3>Create an Account</h3>
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
                <input type="password" id="password" name="confirm" required>
            </div>


            <div class="form-group">
                <button type="submit" name="signup" class="submit">Sign Up</button>
            </div>
        </form>
        <p>Already Have An Account? <a href="login.php">Log In</a></p>
    </div>
</body>

</html>
<?php

include('fotter.php');

?>