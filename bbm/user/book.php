
<?php
include("navigation.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book A Boat</title>
    <link rel="stylesheet" href="css/book.css">
</head>
<body>
    <div class="main">
        <div class="im">
            <img src="css/images/boat1.jpg" alt="Boat Image">
        </div>
        <div class="for">
            <a id="boat">Book A Boat</a>
            <form id="ff">
                <div class="inpu">
                    <label>Full Name:</label>
                    <input type="text" required>
                </div>
                <div class="inpu">
                    <label>Number of People:</label>
                    <input type="number" required>
                </div>
                <div class="inpu">
                    <label>Date From:</label>
                    <input type="date" required>
                </div>
                <div class="inpu">
                    <label>Date To:</label>
                    <input type="date" required>
                </div>
                <div class="inpu">
                    <label>Time:</label>
                    <input type="time" required>
                </div>
                <div class="inpu">
                    <label>Email Address:</label>
                    <input type="email" required>
                </div>
                <div class="inpu">
                    <label>Phone Number:</label>
                    <input type="tel" required>
                </div>
                <div class="inpu">
                    <label>Notes:</label>
                    <textarea></textarea>
                </div>
                <div class="bttt">
                <a id="bttt">BOOK NOW</a>
                </div>
            </form>
        </div>
    </div>
   
       
</body>
</html>
<?php
include("fotter.php");
?>