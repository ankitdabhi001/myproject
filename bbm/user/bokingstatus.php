<?php
include("navigation.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Booking Status</title>
    <link rel="stylesheet" href="css/check.css">
</head>
<body>
    <div class="form">
    <div class="container">
        <h4>Check Booking Status</h4>
        <div class="underline"></div>
        <form action="check_status.php" method="post" >
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <button type="submit" class="btn1">Check Now</button>
        </form>
        
    </div>
    </div>
</body>
</html>
<?php
include("fotter.php");
?>