<?php
$servername="localhost";
$username="root";
$password="";
$db_name="boat";
$conn=new mysqli($servername,$username,$password,$db_name);

if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}/*
echo"connection success"; */
if(isset($_POST["sub"]))
{
    $bname=$_POST['boatName'];
    $bsize=$_POST['boatSize'];
    $bcapacity=$_POST['capacity'];
    $bprice=$_POST['price'];
    $bsource=$_POST['source'];
    $bdestination=$_POST['destination'];
    $broute=$_POST['route'];
    $bdescription=$_POST['description'];
    $bimage=$_FILES["boatImage"]['name'];
    move_uploaded_file($_FILES['boatImage']['tmp_name'],"images/".$_FILES['boatImage']['name']);
    $sql="INSERT INTO `boats`(`id`, `boat_name`, `size`, `capacity`, `price`, `source`, `destination`, `route`, `description`, `image`) VALUES ('','$bname','$bsize','$bcapacity','$bprice','$bsource','$bdestination','$broute','$bdescription','$bimage')";
    $result=mysqli_query($conn,$sql);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boat Details Form</title>
    <link rel="stylesheet" href="css/boats.css">
</head>
<body>
    <div class="container">
        <h2>Boat Details</h2>
        <form method="POST" enctype="multipart/form-data">
            <label for="boatName">Name of Boat</label>
            <input type="text" id="boatName" name="boatName" placeholder="Enter Name of Boat">

            <label for="boatImage">Image</label>
            <input type="file" id="boatImage" name="boatImage">

            <label for="boatSize">Size</label>
            <select id="boatSize" name="boatSize">
                <option value="">Choose Size of Boat</option>
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>

            <label for="capacity">Capacity of Person</label>
            <input type="number" id="capacity" name="capacity" placeholder="Enter Capacity of Boat">

            <label for="price">Price Per Person</label>
            <input type="number" id="price" name="price" placeholder="Enter Price Per Person">

            <label for="source">Source</label>
            <input type="text" id="source" name="source" placeholder="Enter Source">

            <label for="destination">Destination</label>
            <input type="text" id="destination" name="destination" placeholder="Enter Destination">

            <label for="route">Route</label>
            <input type="text" id="route" name="route" placeholder="Enter Route">

            <label for="description">Description</label>
            <textarea id="description" name="description" placeholder="Enter Description of Boat"></textarea>

            <button type="submit" name="sub">Submit</button>
        </form>
    </div>
</body>
</html>