<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
   <style>
    
    .container img{

       
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
		background-image:url('boat4.jpg');
		height: 800px;
	}

	/* .sun{
		margin-top: 330px;
		margin-left: 590px;
		padding: 10px 24px;
		font-size: 1.2rem;
		color:aliceblue;
		background-color: black;
		border:none;
		border-radius: 30px;
		cursor:pointer;
		box-shadow: 0px 4px 6px rgba(0,0,0,0.3);
		width:120px;
		height: 50px;
		align-items: center;
		justify-content: center;

}
sun:hover{
	background-color: #0077cc;
	transform: scale(1.1);
	transform: 0.3s;
}
	.ant{
		margin-top: 10px 20px;
		
		
		
		
	} */

	 .image1 img {
		 max-width:100%;
		 height:auto;
		 display:block;
		 height:400px;
		 
	}
		
	body{
		font-family:arial,sans-serif;
		margin:0;
		padding:0;
		background-color:#f4f4f4;
		color:#333;
		
		
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
		


	
h6 button{
    color:white;
	border:none;
	outline:none;
	cursor:pointer;
	position:relative;
	z-index:0;
	border-radius:12px;
	transform:translate(-50%,-50%);
	padding:10px 40px;
	margin-top:50px;
	margin-left:700px;
	margin-bottom:-40px;
	
}
h6 button::after{
	content:"";
	z-index:-1;
	position:absolute;
	width:100%;
	height:100%;
	background-color:darkred;
	left:0;
	top:0;
	border-radius:12px;
}

h6 button::before{
content:"";
background:linear-gradient(45deg,red,blue,green,yellow,pink,skyblue,orange);	
position:absolute;
top:-2px;
left:-2px;
background-size:600%;
z-index:-1;
width:calc(100% + 4px);
height:calc(100% + 4px);
filter:blur(8px);
animation:glowing 20s linear infinite;
transition:opacity.3s ease-in-out;
border-radius:12px;
opacity:0;
}

@keyframes glowing{
0%{background-position:0 0;}
50%{background-position:400% 0;}
100%{background-position:0 0;}

	
}

h6 button:hover::before{
	opacity:1; 
}

h6 button:active:after{
background:transparent;
}

h6 button:active{
color:black;
font-weight:bold;
}
		
   </style>
 
</head>
<body>
<h2 class="logo"><img src="download.png"><span>B</span>oat<span>B</span>ooking</h2>

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
  

   <h1>About WaterBoat </h1>

   
  <H6><button type="botton"onclick="contact.php">contect</botton></H6>

  
</div>


<section class="about-us">
    <div classs ="container1">
        <div class="image1">
            <img src="boat6.jpg">
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

