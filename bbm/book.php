
<?php
include("navigation.php");
?>
<?php



$conn = new mysqli("localhost", "root", "", "boat");
   
if (isset($_POST["book"])) 
{
  
  $name = $_POST["name"];

  $no_of_peple = $_POST["number"];

  $date_from = $_POST["datefrom"];

  $date_to = $_POST["dateto"];

  $time = $_POST["time"];

  $email_id = $_POST["email"];

  $phone_no = $_POST["mono"];

  $notes = $_POST["note"];


 $q = "INSERT INTO services(name, no_of_peple, date_from, date_to, time,email_id, phone_no, notes) VALUES ('$name',$no_of_peple,'$date_from','$date_to','$time','$email_id',$phone_no,'$notes')";
    $qu = mysqli_query($conn, $q);
    if($qu)
    {
            ?><script>alert("insert");</script><?php
    }
}



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
            <form id="ff" method="POST">
                <div class="inpu">
                    <label>Full Name:</label>
                    <input type="text" name="name" required>
                </div>
                <div class="inpu">
                    <label>Number of People:</label>
                    <input type="number" name="number" required>
                </div>
                <div class="inpu">
                    <label>Date From:</label>
                    <input type="date" name="datefrom"required>
                </div>
                <div class="inpu">
                    <label>Date To:</label>
                    <input type="date" name="dateto" required>
                </div>
                <div class="inpu">
                    <label>Time:</label>
                    <input type="time" name="time" required>
                </div>
                <div class="inpu">
                    <label>Email Address:</label>
                    <input type="email" name="email" required>
                </div>
                <div class="inpu">
                    <label>Phone Number:</label>
                    <input type="tel" name="mono" required>
                </div>
                <div class="inpu">
                    <label>Notes:</label>
                    <textarea name="note"></textarea>
                </div>
                <div class="bttt">
                <button id="bttt" type="submit" name="book">BOOK NOW</button>
                </div>
            </form>
        </div>
    </div>
   
       
</body>
</html>
<?php
include("fotter.php");
?>