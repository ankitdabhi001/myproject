<?php

$conn = new mysqli("localhost", "root", "", "boat");
   
if (isset($_POST["check"])) 
{
    $email_id = $_POST["email"];

    $phone_no = $_POST["mono"];

    $query="select id from status where email='$email_id '";
    $res=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($res);
    $uid=$row['id'];

    $query1="select bid from tblbook where phone_no='$phone_no'";
    $res1=mysqli_query($conn,$query1);
    $row1=mysqli_fetch_assoc($res1);
    $bid=$row1['bid'];
  

   $query2="insert into status(id,bid)values($id,$bid)";
  
   $res2=mysqli_query($conn,$query2);

   if($res2){
    ?><script>alert('book request send');</script><?php
   }
else{
    ?><script>alert('book request not send');</script><?php
    }

}

?>

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