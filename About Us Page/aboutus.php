<?php

session_start()

?>

<!DOCTYPE html>
<html>
<head>
	<title>About Us Page</title>
    <link rel="shortcut icon" href="./website_favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="aboutus.css">

    <script src="https://kit.fontawesome.com/5253132cc4.js" crossorigin="anonymous"></script>
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
				<a href="../Review Page - Gobui/reviewpage.php"><li><i class="fa-solid fa-star"></i>Customer Review</li></a>
				<a href="#"><li class="first_item"><i class="fa-solid fa-people-roof"></i>About Us</li></a>
			</ul>
		</nav>

	</header>

	<body>
		<br><br><br><br><br><br><br><br><br>
    <div class="contactUs">
   
        <!-- Details -->
        <div class="contact form">
            <form>
            <div class="formBox">
                    <div class="row50">
                        <div class="inputBox">
                        	
                            <h1>About Us</h1>   
                        </div>
                    </div>
                    <br><br><h3>Details About Marjhun's Apartelle</h3>
                            <p>Set in the southeast coast of Bohol, Marjhun's Apartelle is a welcoming, family run with a charming sea front of marine sanctuary water of camiguin sea and a fresh sea breeze in a headland. Marjhun's Apartelle offers you the opportunity to Relax and enjoy in a beautiful town of Jagna.</p><br><br> 
            </form>
        </div>

    <!-- info box -->
        <div class="contact info">
            <h3>Contact Info</h3><br>
            <div class="infoBox">
                <div>
                    <span><ion-icon name="location"></ion-icon></span>
                    <p>Burgos St. Cantagay, Jagna <br>Philippines</p>
                </div>
                <div>
                    <span><ion-icon name="mail"></ion-icon></span>
                    <a href="marjhunsapartelle@gmail.com">marjhunsapartelle@gmail.com</a>
                </div>
                <div>
                    <span><ion-icon name="call"></ion-icon></span>
                    <a href="tel:09778271604">+0977 827 1604</a>
                </div>

                <!-- Social Media Links -->

                <ul class="sci">
                    <li><a href="https://www.facebook.com/marjhunsapartelle"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <!-- <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li> -->
                </ul>
            </div>
        </div>

        <!-- map -->
        <div class="contact map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7867.123576153195!2d124.34768014559906!3d9.632946989404124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aa72273926c1af%3A0xddb0986f359e48b1!2sMarjhun&#39;s%20Apartelle!5e0!3m2!1sen!2sph!4v1682430487046!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
             
        </div>
    </div>
</div>

     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>