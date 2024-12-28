<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
   <style>
    
   
   *{
	margin: 0px;
	padding:0px;
   }
   
    .about-us {
    width:100%;
    height:100%;
    background-size: 100% 100%;
    }


	.container{
		margin:0;
		padding:0;
		background-size:cover;
		background-position: center;
		background-repeat: no-repeat;
		background-image:url('images/boat4.jpg');
		height: 800px;
	}
	

	 .image1 img {
		 max-width:100%;
		 height:auto;
		 display:block;
		 height:400px;
		 
		}

		
	body{
		margin:0;
		padding:0;	
		}

	
	.about-us{
			display:flex;
			justify-content:center;
			align-items:center;
			padding:50px 20px;		
		}
		
		
	.content {
			padding:20px;
			max-width:600px;
				
			}
		
	.content h6{
			font-size:28px;
			margin-bottom:10px;
			color:#007bff;
			text-align:center;
			}
		
	.content3{
			font-size:28px;
			margin-bottom:20px;
			font-weight:bold;
			}
			
			
	.content p{
				font-size:16px;
				line-height:1.6;
				margin-bottom:10px;
				
			}
		

	.overlay{
		position: absolute;
		top: 0;
		left: 0;
		right: 10;
		bottom: 0;
		display: flex;
		justify-content: center;
		align-items: center;
		color: white;
		font-size: 20px;
		margin-top: 190px;
		
		
	}

	h1{
		font-size: 3rem;
		margin-top: 0;
	}
	
	a{
		display: block;
		top: 0;
		left: 0;
		right: 10;
		bottom: 0;
		display: flex;
		color: white;
		text-align: center;	
	}
		
   </style>
 
</head>
<body>
<h2 class="logo"><img src="images/download.png"><span>B</span>oat<span>B</span>ooking</h2>

            <nav>   
				<ul>
					<li><a href="navbar.html">HOME</a></li>
					<li><a href="about.php">ABOUT US</a></li>
					<li><a href="#">SERVICES</a></li>
					<li><a href="#">BOOKING STATUS</a></li>
					<li><a href="contact.php">CONTACT</a></li>
					<li><a href="#">ADMIN</a></li> 
                </ul>
            </nav>
			<link rel="stylesheet" href="navbar.html">

			
			
			<div class="container">
				
				<div class="overlay">
				<h1>About Water Boat</h1>		
				 	 <a href="navbar.html">home</a> / <a href="contact.php">contact us</a>
				</div>
			</div>





<section class="about-us">
    <div>
        <div class="image1">
           	 <img src="images/boat6.jpg">
		</div>
	</div>
		<div class="content">
        	<h6>about_us</h6>
   			 <h3>welcome to our website</h3>
 			    <div class="content1"> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, illum, quasi. Odit velit deserunt eligendi unde, enim. Enim fugiat.</p></div>
				<div class ="content2"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eius ullam impedit architecto debitis facilis! </p></div>

		</div>

</section>
		 <footer class="foot">
        	<h4>This is Footer</h4>
        	<h4>Welcome To Our Website</h4>
		</footer>
</body>
</html>

