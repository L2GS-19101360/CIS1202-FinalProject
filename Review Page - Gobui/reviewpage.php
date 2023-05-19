<?php

session_start();

$serverName = "localhost:3307";
$username = "root";
$passWord = "";
$databaseName = "apartelle_group1_db";

$est_conn = mysqli_connect($serverName, $username, $passWord, $databaseName);

// if (!$est_conn){
//     echo "No";
// }
// echo "Yes";

$query = "SELECT * FROM review ORDER BY ID DESC";
$result = mysqli_query($est_conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Review Page</title>
	<!-- <link rel="stylesheet" type="text/css" href="reviewpage.css"> -->
	<link rel="shortcut icon" href="./website_favicon.png" type="image/x-icon">
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
		.hover_item{
			background-color: rgb(34, 186, 186);
		}

		.content{
			position: absolute;
			top: 180px;
			padding: 30px;
			width: 95%;
		}
		.content p{
			text-align: justify;
		}

		header{
			position: fixed;
			z-index: 2;
			width: 100%;
		}

		.container{
			position: absolute;
			left: 200px;
			top: 190px;
			width: 350px;
			padding: 20px 20px;
			border: 1px solid #444;
			border-radius: 5px;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			direction: rtl;
			background-color: lightgray;
		}

		.container .header{
			margin: 0;
			padding: 0;
			
			
			display: inline-block;
		}

		.container a{
			font-size: 40px;
			color: #313131;
			transition: 0.3s all;
		}

		.container a:hover{
			color: #F1C40F;
		}
		form header{
			width: 100%;
			font-size: 25px;
			font-weight: 500;
			margin: 5px 0 20px 0;
			text-align: center;
			/* transition: all 0.2s ease; */
		}


		form textarea{
			height: 100%;
			width: 100%;
			outline: none;
			padding: 10px;
			font-size: 17px;	
			resize: none;
			direction: ltr;
			position: relative;
			left: 10px;
		}

		form .btn{
			height: 45px;
			width: 100%;
			margin: 15px 0;
		}

		form .btn button{
			height: 100%;
			width: 100%;
			outline: none;
			background: black;
			color: white;
			font-size: 17px;
			font-weight: 500;
			cursor: pointer;
			transition: all 0.3s ease;
		}

		form .btn button:hover{
			background: #1b1b1b;
		}

		body{
			/* background-image: url('apartelle.png'); */
			background-size: cover;
			background-repeat: no-repeat;
			background-color: rgb(196, 164, 132);
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		.displayReviews{
			background-color: white;
			padding: 15px;
			width: 600px;
			border-bottom: 1px dashed black;
		}
		.name{
			display: flex;
			background-color: lightgray;
		}
		.fname{
			margin-right: 50px;
		}
		.reviews{
			border: 1px solid black;
			padding: 15px;
		}
		.scroll_div{
			background-color: orange;
			position: relative;
			top: 190px;
			left: 700px;
			height: 530px;
			width: 640px;
			overflow: hidden;
			overflow-y: scroll; 
		}
		*{
                text-decoration: none;
                color: black;
            }
            .info_pictures ul li:hover{
                background-color: white;
            }
            .fa-book{
                position: absolute;
                right: 230px;
                top: 40px;
                font-size: 50px;
            }
            .fa-book:hover{
                cursor: pointer;
            }

			#brand_logo{
                height: 60px;
                width: 90px;
                border-radius: 20%;
                margin-left: 20px;
            }
            #user_pic{
                height: 75px;
                width: 75px;
                border-radius: 20%;
            }
			.fa-book{
                position: absolute;
                right: 230px;
                /* font-size: 40px; */
				height: 40px;
				width: 40px;
                font-size: 40px;
            }
            .fa-book:hover{
                cursor: pointer;
            }
	</style>
</head>
<body>
	<header>
    
		<div class="title_bar">
			<ul>
				<li><img src="./website_favicon.png" alt="" id="brand_logo"></li>
				<li><h2 id="brand_name">Marjhun's Apartelle</h2></li>
				<li>
				<a href="../Review Bookings/review_bookings.php"><h1> <img src="./book-solid.png" alt="" class="fa-book"> </i></h1></a>
                    </li>
				<li>

					<div class="user_profile">
						<img src="./user_profile.png" alt="" id="user_pic">
						<h5><?php echo $_SESSION['EMAIL'] ?></h5>

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
				<a href="#"><li  class="hover_item"><i class="fa-solid fa-star"></i>Customer Review</li></a>
				<a href="../About Us Page/aboutus.php"><li><i class="fa-solid fa-people-roof"></i>About Us</li></a>
			</ul>
		</nav>

	</header>
	
	<div class="scroll_div" style="background-color: orange; ">

	<?php while($row = mysqli_fetch_assoc($result)){ ?>

	<div class="displayReviews">
		<div class="name">
			<h3 class="fname">FIRST NAME: <?php echo $row['FIRST_NAME'] ?></h3>
			<h3 class="lname">LAST NAME: <?php echo $row['LAST_NAME'] ?></h3>
		</div>
		<br>
		<div class="reviews" style="margin-bottom: 10px;">
			
			<?php echo $row['INPUT_REVIEWS'] ?>
			<br><br>
			<h5>Date Posted: <?php echo $row['DATE'] ?></h5>
		</div>
	</div>

	<?php } ?>

	</div>

	

	<div class="container">
		<!-- <img src="apartelle.png" width="1500" height="600"> -->
		<div class="header">
			<h1>Customer Review</h1><hr>
		</div>
		<!-- <div class="rating">
			<p>Please rate your experience</p>
			<a class="ion-android-star b1"></a>
			<a class="ion-android-star b2"></a>
			<a class="ion-android-star b3"></a>
			<a class="ion-android-star b4"></a>
			<a class="ion-android-star b5"></a>
		</div> -->
		<form action="#" id="review-form">
			<div class="textarea">
				<textarea cols="30" placeholder="Describe your experience.." id="reviewInput"></textarea>
			</div>
			<div class="btn">
				<button type="submit">POST</button>
			</div>	
		</form>	
	</div>

	<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
	<script>
		
		$(document).ready(function(){
			$('#review-form').submit(function(event){

				event.preventDefault(); // Prevent the form from submitting normally
				var review = $('#reviewInput').val();
				if (review.trim() === '') {
					// alert('Please enter a review.'); // Display an error message if the review is empty
					return;
				}

				var review = $('#reviewInput').val();
				$.ajax({
					url: "./add_new_review.php",
					type: "POST",
					data: {review: review},
					success: function(data){
						location.reload();
					}
				});

			});			
		});
	</script>
</body>
</html>