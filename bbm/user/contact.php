<?php
include("navigation.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <div class="contact-container">
        <form action="https://api.web3forms.com/submit" method="POST"class="contact-left">
            <div class="contact-left-title">
                <p>Get In Touch</p>
                <hr>
    </div>
    
    <input type="hidden" name="access_key" value="fe134dae-a5e2-4739-957f-c9c2e8e37881">
    <input type="text" name="name"placeholder="Enter Your Name"class="contact-inputs"required>
    <input type="email" name="email"placeholder="Enter Your Email"class="contact-inputs"required>
    <textarea name="message" placeholder="Enter Your Message"class="contact-inputs"required></textarea>
 <button type="submit">SUBMIT<img src="css/images/arrow_icon" alt=""></button>
        </form>
        <div class="contact-right">
            <img src="css/images/right_img.png"alt="">
        </div>
    </div>
</body>
<?php
include("fotter.php");
?>
</html>

