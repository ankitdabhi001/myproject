
<?php
session_start();
include('logcon.php');

$id = $_SESSION["userid"];

$query = "select * from sign where uid=$id";
$resul1t = mysqli_query($conn, $query);
$row1 = mysqli_fetch_assoc($result1);
if(isset($_POST["update"])){

$errors=[];
$imgname=$_FILES["image"]["name"];

$size=$_FILES["image"]["size"];

$tmp=$_FILES["image"]["tmp_name"];

$dst="profileupload/".$_FILES["image"]["name"];

$ext=explode(".",$imgname);

$ss=end($ext);
$extension=array("jpg","jpeg","png");

if($size>600000)
{
  $errors[]="size is very large";
}

if(in_array($ss,$extension)==false)
{
  $errors[]="only allow jpg,jpeg,png ";
}

$errupload=count($errors);

if($errupload==0){

move_uploaded_file($tmp,$dst);
$id = $_GET["id"];
$name=$_POST["name"];
$email=$_POST["Email"];
$mono = $_POST["mono"];
$city=$_POST["city"];
$img= $imgname;

$query="update signup set fullname='$name',email='$email',mobileno=$mono,image='$img',City='$city' where uid=$id"; 

$result= mysqli_query($conn,$query);

if(!$result){
?><script>alert('update profile not successfully');</script><?php
}
else{
header("location:profile.php");
}
}

}

?>


<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>PROFILE</title>

<link rel="stylesheet" href="css/update-profile.css">
</head>
<body>
<?php include('main.php');?>





    
        <div class="modal-content">

            <div class="modal-header">
                <h4 claon type="butss-modal-title">Update Profile</h4>
        
            </div>

            <div class="modal-body">

                <form  method="POST" id="myForm" enctype="multipart/form-data">
                    

               
                  <!-- profile image show -->

                  <div class="imgholder">

               
<img src="profileupload/<?php echo $result['image']; ?>" >

         </div>  
                     <!-- Detail image show -->


                    <div class="inputField">
                        <div>
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" value="<?php echo $result['fullname']; ?>" required>
                        </div>
                    
                        
                        <div>
                            <label for="email">E-mail:</label>
                            <input type="email" name="Email" id="email"  value="<?php echo $result['email']; ?>" required>
                        



                        </div>
                        <div>
                            <label for="phone"> Mobile No:</label>
                            <input type="text" name="mono" id="phone" minlength="10" maxlength="10" value="<?php echo $result['mobileno']; ?>" required>
                        </div>
                        <div>
                            <label for="email">City:</label>
                            <input type="city" name="city" id="email"  value="<?php echo $result['City']; ?>" required>
                        



                        </div>
                       
                        <!-- <div>
                            <label for="password">password:</label>
                            <p>Don't have a account? <a href="signin.php">sign-in </a></p>
                             <input type="button" name="" id="post" required> 
                        </div> -->
                    
                    </div>

              
            </div>
            
        
        <div class="footer">
            
        
        <input type="file" form="myForm" name="image" class="btn btn-primary submit">
        <button type="submit" form="myForm" name="update" class="btn btn-primary submit">UPDATE</button>
        </div>
        </form>
          <div class="modal-footer">
             
     
         </div>
         <div class="copyRight_container">
&copy; 2024 Hiren & Anand Library. All rights reserved
</div>
 

</body>
</html>