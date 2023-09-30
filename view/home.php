<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/a676914d6c.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/slideshow.css">

<head>
	<title>Homepage</title>
	<style>
                   body{
						background-color:#f8f9fa;
					}

        /*  style for alumni search */
					.search-box {
					display: flex;
					align-items: center;
					justify-content: center;
					margin-top: 20px;
					}

					input[type="number"] {
					border: none;
					border: 2px solid #ddd;
					padding: 10px;
					font-size: 16px;
					margin-right: 10px;
					width: 30%;
					}

					button[type="submit"] {
					background-color: #4CAF50;
					color: white;
					border: none;
					padding: 10px 20px;
					font-size: 16px;
					cursor: pointer;
					border-radius:5px;
					}

					button[type="submit"]:hover {
					background-color: green;
					
					}

 


		/* Style for the header */
		
		.header {
			position: fixed;
			top: 0;
			left: 5%;
			width: 90%;
			margin: auto;
			background-color: #fb980a;
			color: #fff;
			padding: 10px;
			display: flex;
			align-items: center;
			justify-content: space-between;
			z-index: 999;
			border-bottom-left-radius: 10px;
			border-bottom-right-radius: 10px;
		}

		/* Style for the logo */
		.logo {
			font-size: 24px;
			font-weight: bold;
			text-transform: uppercase;
			letter-spacing: 2px;
		}

		/* Style for the menu */
		.menu {
			display: flex;
			align-items: center;

		}

		.menu a {
			color: #333;
			margin: 0 10px;
			text-decoration: none;
			font-weight: bold;
			transition: all 1s ease-in-out;
			position: relative;
			letter-spacing: 20px;
			text-align: center;
		}

   
	.profile img:hover{
		transform: scale(1.2);
		transition: transform 2s;
	}
	
@media screen and (max-width: 799px) {
  body {
    background-color: black;
  }
  .header{
	flex-direction: column;
  }
 
}



@media screen and (max-width: 850px){
	
	.profile{
	flex-direction: column;
  }
}



		.menu a::before {
			content: "";
			position: absolute;
			bottom: -5px;
			left: 0;
			height: 2px;
			width: 100%;
			background-color: #333;
			transform: scaleX(0);
			transform-origin: left;
			transition: all 0.3s ease-in-out;
		}

		.menu a:hover::before {
			transform: scaleX(0.6);
			background-color: white;
     
		}

		/* Style for the profile */
		.profile {
			display: flex;
			align-items: center;
		}

		.profile img {
			width: 40px;
			height: 40px;
			border-radius: 50%;
			margin-right: 10px;
		}


		.logout-btn {
			background-color: red;
			color: #fff;
			padding: 5px 10px;
			border-radius: 5px;
			text-decoration: none;
			margin-left: 10px;
			font-size: 14px;
		}

		.logout-btn:hover {
			background-color: #ff5733;
			color: #fff;
			padding: 5px 10px;
			border-radius: 5px;
			text-decoration: none;
			margin-left: 10px;
			font-size: 14px;
		}

		/* Style for the container */
		.container {
			width: 90%;
			margin: 100px auto;
			font-size: 20px;
			line-height: 1.5;
            background-color:#f8f9fa;
		}
	</style>














</head>









<body>
	<header class="header">
		<div class="logo"><img src="images/CAS_logo.png" height="80px" width="250px"></div>
		<div class="menu">
			<abbr title="Home"><a href="home.php"><i class="fas fa-home" style="font-size: 30px;"></i> </a></abbr>
			<abbr title="profile"><a href="profile.php"><i class="fas fa-user" style="font-size: 30px;"></i> </a></abbr>
			<abbr title="alumni"><a href="alumni.php"><i class="fa-solid fa-people-group" style="font-size: 30px;"></i> </a></abbr>
			<abbr title="Eligibility Check"><a href="eligibility.php"><i class="fa-solid fa-arrows-to-eye" style="font-size: 30px;"></i> </a></abbr>
			<abbr title="Job"><a href="job.php"><i class="fa-solid fa-person-walking-luggage" style="font-size: 30px;"></i> </a></abbr>
			<abbr title="Summary"><a href="summary.php"><i class="fa-sharp fa-solid fa-chart-simple" style="font-size: 30px;"></i> </a></abbr>
		</div>
		<div class="profile">
			<?php 
                session_start();
				if(!isset($_SESSION['name']))
				{
				   header('location:index.php');
				}
			?>
			<img src="images/<?php echo $_SESSION['id']; ?>.png" alt="Profile Image">
			<div style="text-align:center">
				<p>

					<?php
                     
                    
                    
                      echo '<span style="font-size:14px;">'.$_SESSION['name'].'</span>';
					  echo "<br>";
					  $id=$_SESSION['id'];
					  echo '<i style="color:black;font-size:15px;font-family:calibri ;">'.
					        $id.' </i> ';
                      //session_destroy();
                    
      

                   ?>
				</p>
				<a href="../controller/destroy.php" class="logout-btn">Logout</a>
			</div>
		</div>
	</header>


     <!-- header part end here -->






	<div class="container" style="padding-top:20px">

                     
                        <!--  alumni search form  -->

						<form action="find_alumni.php" method="GET">
							<div class="search-box">
							<input type="number" placeholder="Enter ID" name="id" />
							<button type="submit">Find Alumni</button>
							</div>
						</form>

	                

					<div class="slideshow-container">

						<div class="mySlides fade">
						<div class="numbertext">1 / 3</div>
						<img src="images/image4.jpg" style="width:100%">
						<div class="text"></div>
						</div>

						<div class="mySlides fade">
						<div class="numbertext">2 / 3</div>
						<img src="images/image5.jpg" style="width:100%">
						<div class="text"></div>
						</div>

						<div class="mySlides fade">
						<div class="numbertext">3 / 3</div>
						<img src="images/image6.jpg" style="width:100%">
						<div class="text"></div>
						</div>

						<a class="prev" onclick="plusSlides(-1)">❮</a>
						<a class="next" onclick="plusSlides(1)">❯</a>

						</div>
						<br>

						<div style="text-align:center">
						<span class="dot" onclick="currentSlide(1)"></span> 
						<span class="dot" onclick="currentSlide(2)"></span> 
						<span class="dot" onclick="currentSlide(3)"></span> 
						</div>

						<script>
						let slideIndex = 1;
						showSlides(slideIndex);

						function plusSlides(n) {
						showSlides(slideIndex += n);
						}

						function currentSlide(n) {
						showSlides(slideIndex = n);
						}

						function showSlides(n) {
						let i;
						let slides = document.getElementsByClassName("mySlides");
						let dots = document.getElementsByClassName("dot");
						if (n > slides.length) {slideIndex = 1}    
						if (n < 1) {slideIndex = slides.length}
						for (i = 0; i < slides.length; i++) {
							slides[i].style.display = "none";  
						}
						for (i = 0; i < dots.length; i++) {
							dots[i].className = dots[i].className.replace(" active", "");
						}
						slides[slideIndex-1].style.display = "block";  
						dots[slideIndex-1].className += " active";
						}
						</script> 





				
    
	</div>
















	</html>








	 