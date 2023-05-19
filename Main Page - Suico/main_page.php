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
                /* font-size: 40px; */
                height: 40px;
                width: 40px;
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
            .content{
                position: absolute;
                top: 150px;
                padding: 30px;
                width: 95%;
            }

            /* Modal styles */
            .modal {
                display: none;
                position: fixed;
                z-index: 9999;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0, 0, 0, 0.7);
            }

            .modal-content {
                display: block;
                margin: auto;
                margin-top: 60px;
                max-width: 90%;
                max-height: 80%;
            }

            .modal-img {
                display: block;
                width: 100%;
                height: auto;
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
                        <a href="../Review Bookings/review_bookings.php"><h1> <img src="./book-solid.png" alt="" class="fa-book"> </i></h1></a>
                    </li>
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
                <li><img src="./pic1.jpg" alt="" class="pictures" onclick="openModal(this)"></li>
                <li><img src="./pic2.jpg" alt="" class="pictures" onclick="openModal(this)"></li>
                <li><img src="./pic3.jpg" alt="" class="pictures" onclick="openModal(this)"></li>
                <li><img src="./pic4.jpg" alt="" class="pictures" onclick="openModal(this)"></li>
                <li><img src="./pic5.jpg" alt="" class="pictures" onclick="openModal(this)"></li>
                </ul>
            </div>
            <br><br>
            <h3 class="sub_name" style="background-color: white;">Marjhun's Apartelle Video Tour</h3><br>
            <center>
                <div class="video_container">
                    <video src="./apartelle-video-info.mp4" controls muted autoplay></video>
                </div>
            </center>
        </div>

        <!-- Modal -->
        <div id="myModal" class="modal">
            <!-- <span class="close" onclick="closeModal()">&times;</span> -->
            <img class="modal-content" id="modalImg">
        </div>

        <script>
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("modalImg");

        function openModal(img) {
            modal.style.display = "block";
            modalImg.src = img.src;

            // Close modal when clicked outside of it
            window.onclick = function(event) {
                if (event.target == modal) {
                    closeModal();
                }
            };
        }

        function closeModal() {
            modal.style.display = "none";
        }
        </script>
    </body>
</html>