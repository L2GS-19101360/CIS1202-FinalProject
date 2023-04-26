<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Marjhun's Apartelle</title>
        <link rel="shortcut icon" href="./website_favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="./suico-Main_Page-style.css">
        <script src="https://kit.fontawesome.com/5253132cc4.js" crossorigin="anonymous"></script>
        <style>
            .info_pictures ul li:hover{
                background-color: white;
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
                    <a href="#"><li class="first_item"><i class="fa-solid fa-house"></i>Home</li></a>
                    <a href="../Booking Page - Balderas/booking.php"><li><i class="fa-solid fa-calendar-day"></i>Room Booking</li></a>
                    <a href="../Review Page - Gobui/reviewpage.php"><li><i class="fa-solid fa-star"></i>Customer Review</li></a>
                    <a href="../About Us Page/aboutus.php"><li><i class="fa-solid fa-people-roof"></i>About Us</li></a>
                </ul>
            </nav>

        </header>

        <div class="content">
            <p>
                <img src="./Main_Pic.jpg" alt="" id="main_pic">
                Marjhun's Apartelle, located on the southeast coast of Bohol, is a pleasant, family-run
                establishment with a charming sea front of marine sanctuary water of Camiguin Sea and a fresh
                sea breeze in the headland. Marjhun's Apartelle provides you with the opportunity to rest and
                enjoy yourself in the charming town of Jagna. But, in order for it to be widely known and
                available to the general public, the developers intend to create a website that will be visible to
                customers nationally. Customers from afar can view the specifics, different sorts of
                accommodations, and the very heartwarming sunset that greets them on this website. With a
                simple click of a button, it is now possible to book digitally with ease and convenience, while the
                personnel prepare for and await their arrival, providing the necessary hospitality.
            </p>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <h3 class="sub_name" style="background-color: white;">Images of Marjhun's Apartelle</h3>
            <div class="info_pictures">
                <ul>
                    <li><img src="./pic1.jpg" alt="" class="pictures"></li>
                    <li><img src="./pic2.jpg" alt="" class="pictures"></li>
                    <li><img src="./pic3.jpg" alt="" class="pictures"></li>
                    <li><img src="./pic4.jpg" alt="" class="pictures"></li>
                    <li><img src="./pic5.jpg" alt="" class="pictures"></li>
                </ul>
            </div>
            <br><br>
            <h3 class="sub_name" style="background-color: white;">Marjhun's Apartelle Annoucements</h3><br>
            <center>
                <div class="video_container">
                    <video src="./apartelle-video-info.mp4" controls muted autoplay></video>
                </div>
            </center>
        </div>

    </body>
</html>