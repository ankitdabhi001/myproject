<?php
include("navigation.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
<div class="img">
        Welcome To Our Website
        </div>
        <section class="home">
        <div class="serv">
  <h1 align="center">Our Destinations</h1>

<div class="i">
        <div class="image1">
                 <img src="css/images/boat1.jpg">
        <div class="text1">
      <h3>Dwarka-Gomti</h3>
    </div>
    </div>

    <div class="image2">
          <img src="css/images/boat2.jpg">
          <div class="text2">
      <h3>dwarka-gomti</h3>
    </div>
    </div>

    <div class="image3">
          <img src="css/images/boat3.jpg">
          <div class="text3">
      <h3>dwarka-gomti</h3>
    </div>
    </div>

    <div class="image4">
          <img src="css/images/boat4.jpg">
          <div class="text4">
      <h3>dwarka-gomti</h3>
    </div>
    </div>
</div>


<div class="x">
        <div class="image5">
                 <img src="css/images/boat5.jpg">
        <div class="text5">
      <h3>Dwarka-Gomti</h3>
    </div>
    </div>

    <div class="image6">
          <img src="css/images/boat6.jpg">
          <div class="text6">
      <h3>dwarka-gomti</h3>
    </div>
    </div>

    <div class="image7">
          <img src="css/images/boat7.jpg">
          <div class="text7">
      <h3>dwarka-gomti</h3>
    </div>
    </div>

    <div class="image8">
          <img src="css/images/boat8.jpg">
          <div class="text8">
      <h3>dwarka-gomti</h3>
    </div>
    </div>
</div>
</div> 



        </section>
        <section class="team-section">
        <h4>Our Team</h4>
        <p>Lacus vestibulum sed arcu non sit eru racdi odio euismod.</p>
        <div class="team-container">
            <?php
            // Define the team members
            $team = [
                [
                    "name" => "Chavda Gaurav",
                    "role" => "Back-End Devloper",
                    "image" => "css/images/boat4.jpg",
                    "social" => [
                        "youtube" => "#",
                        "facebook" => "#",
                        "instagram" => "#",
                        "twitter" => "#"
                    ]
                ],
                [
                    "name" => "Dhabhi Ankit",
                    "role" => "Front-End Devloper",
                    "image" => "css/images/download.png",
                    "social" => [
                        "youtube" => "#",
                        "facebook" => "#",
                        "instagram" => "#",
                        "twitter" => "#"
                    ]
                ],
                [
                    "name" => "Proya Agarval",
                    "role" => "Customer Support",
                    "image" => "css/images/boat6.jpg",
                    "social" => [
                        "youtube" => "#",
                        "facebook" => "#",
                        "instagram" => "#",
                        "twitter" => "#"
                    ]
                ],
                [
                    "name" => "Shorya Khacher",
                    "role" => "Product-Manager",
                    "image" => "css/images/boat7.jpg",
                    "social" => [
                        "youtube" => "#",
                        "facebook" => "#",
                        "instagram" => "#",
                        "twitter" => "#"
                    ]
                ]
            ];

            // Generate the HTML for each team member
            foreach ($team as $member) {
                echo "
                <div class='team-member'>
                    <div class='profile-image'>
                        <img src='{$member['image']}' alt='{$member['name']}'>
                    </div>
                    <h3>{$member['name']}</h3>
                    <p>{$member['role']}</p>
                    <div class='social-icons'>";
                foreach ($member['social'] as $platform => $link) {
                    echo "<a href='$link' class='icon-$platform'><i class='fab fa-$platform'></i></a>";
                }
                echo "</div>
                </div>";
            }
            ?>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
     
</body>
</html>
<?php
include("fotter.php");
?>