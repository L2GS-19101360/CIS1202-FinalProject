<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Review Page</title>
	<!-- <link rel="stylesheet" type="text/css" href="reviewpage.css"> -->
	<link rel="stylesheet" href="./suico-Main_Page-style.css">
	<script src="https://kit.fontawesome.com/5253132cc4.js" crossorigin="anonymous"></script>
	<style>
		*{
			margin: 0%;
			padding: 0%;
			font-family: Arial, Helvetica, sans-serif;
			
		}
		.title_bar{
			background-color: aqua;
			width: 100%;
			padding-top: 20px;
			padding-bottom: 20px;
		}
		.title_bar ul{
			display: flex;
			align-items: center;
			list-style: none;
		}
		#brand_logo{
			height: 100px;
			width: 100px;
			border-radius: 20%;
			margin-left: 20px;
		}
		#brand_name{
			margin-left: 20px;
		}
		#user_pic{
			height: 100px;
			width: 100px;
			border-radius: 20%;
		}
		.user_profile{
			text-align: center;
			position: absolute;
			right: 50px;
			top: 13px;
		}
		.user_profile:hover{
			cursor: pointer;
		}
		.user_menu{
			display: none;
		}
		.user_profile:hover .user_menu{
			display: block;
			position: absolute;
			background-color: rgb(34, 186, 186);
			right: 3px;
		}
		.user_profile:hover .user_menu ul{
			display: block;
		}
		.user_profile:hover .user_menu ul li{
			width: 180px;
			padding: 25px;
			border-bottom: 1px solid;
		}
		.user_profile:hover .user_menu ul a{
			text-decoration: none;
			color: black;
		}
		.user_profile:hover .user_menu ul li:hover{
			background-color: rgb(40, 157, 157);
		}
		.nav_bar{
			background-color: aqua;
			text-align: center;
		}
		.nav_bar ul a{
			text-decoration: none;
			color: black;
		}
		.nav_bar ul{
			display: inline-flex;
			list-style: none;
		}
		.nav_bar ul li{
			width: 230px;
			padding: 10px;
		}
		.nav_bar ul li:hover{
			
			background-color: rgb(34, 186, 186);
			cursor: pointer;
		}
	</style>
</head>
<body style="background-color: rgb(196, 164, 132);">
	<header>
    
		<div class="title_bar">
			<ul>
				<li><img src="./website_favicon.png" alt="" id="brand_logo"></li>
				<li><h2 id="brand_name">Marjhun's Apartelle</h2></li>
				<li>

					<div class="user_profile">
						<img src="./user_profile.png" alt="" id="user_pic">
						<h5> <?php echo $_SESSION['EMAIL'] ?> </h5>

						<div class="user_menu">
							<ul>
								<a href="../User Setting Page - Suico/user_display_page.php"><li><i class="fa-solid fa-gear"></i>Account Setting</li></a>
								<a href="./logout.php"><li><i class="fa-solid fa-right-from-bracket"></i>Logout Account</li></a>
							</ul>
						</div>
					</div>

				</li>
			</ul>
		</div>

		<nav class="nav_bar">
			<ul>
				<a href="../Main Page - Suico/main_page.php"><li><i class="fa-solid fa-house"></i>Home</li></a>
				<a href="../Booking Page - Balderas/booking.php"><li><i class="fa-solid fa-calendar-day"></i>Room Booking</li></a>
				<a href="#"><li class="first_item"><i class="fa-solid fa-star"></i>Customer Review</li></a>
				<a href="../About Us Page/aboutus.php"><li><i class="fa-solid fa-people-roof"></i>About Us</li></a>
			</ul>
		</nav>

	</header>

	<div class="container">
		<div class="header">
			<h1>Customer Review</h1><hr>
		</div>
		<form action="#">
			<div class="textarea">
				<textarea cols="30" placeholder="Describe your experience.."></textarea>
			</div>
			<div class="btn">
				<button type="submit">POST</button>
			</div>	
		</form>	
	</div>	
</body>
</html>