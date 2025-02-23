<?php
include("navigation.php");
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/servic.css">
</head>

<body>

  <div class="img">

  </div>
  <div class="serv">
    <h1 style="align-items:center;">Our Services</h1>
    <?php
    include("logcon.php");
    $sql = "select * from boats";
    $result = mysqli_query($conn, $sql);
    ?>
    <br>
  </div>
  <br>
  <div class="wrap">
  <?php
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<br>";
    $cleanPath = trim($row['image']);
    $image_path = "./css/images/" . $cleanPath;

  ?>



    <div class="text1">
      <img src="<?php echo $image_path; ?>" alt="book image">
      <div class="info">
        <h3><?php echo $row['source']; ?>
          <?php echo $row['destination']; ?>
          <br>
          <button class="book-btn" onclick="location.href='book.php'">BOOK</button>
          <span class="price"><?php echo $row['price']; ?></span>

        </h3>
      </div>

    </div>
  

  <?php
  }
  ?>
</div>




</body>

</html>

<?php
include("fotter.php");
?>