<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Marjhun's Apartelle</title>
        <link rel="shortcut icon" href="./website_favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="./user_setting_style.css">
        <script src="https://kit.fontawesome.com/5253132cc4.js" crossorigin="anonymous"></script>
        <style>
            #hover_btn{
                /* display: none; */
                width: 150px;
                padding: 10px;
                background-color: rgb(40, 186, 40);
                cursor: pointer;
                margin-top: 50px;
                border-radius: 10px;
            }
            #hover_btn:hover{
                background-color: green;
            }
            #cancel_btn{
                width: 150px;
                padding: 10px;
                background-color: rgb(241, 61, 61);
                cursor: pointer;
                border-radius: 10px;
            }
            #cancel_btn:hover{
                background-color: red;
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

                        <!-- <div class="user_profile">
                            <img src="./user_profile.png" alt="" id="user_pic">
                            <h5> <?php echo $_SESSION['EMAIL'] ?> </h5>

                            <div class="user_menu">
                                <ul>
                                    <a href="../User Setting Page - Suico/user_setting_page.html"><li><i class="fa-solid fa-gear"></i>Account Setting</li></a>
                                    <a href="./logout.php"><li><i class="fa-solid fa-right-from-bracket"></i>Logout Account</li></a>
                                </ul>
                            </div>
                        </div> -->

                    </li>
                </ul>
            </div>

            <nav class="nav_bar">
                <ul>
                    <a href="../Main Page - Suico/main_page.php"><li class="first_item"><i class="fa-solid fa-house"></i>Home</li></a>
                    <a href="../Booking Page - Balderas/booking.php"><li><i class="fa-solid fa-calendar-day"></i>Room Booking</li></a>
                    <a href="../Review Page - Gobui/reviewpage.php"><li><i class="fa-solid fa-star"></i>Customer Review</li></a>
                    <a href="../About Us Page/aboutus.php"><li><i class="fa-solid fa-people-roof"></i>About Us</li></a>
                </ul>
            </nav>

        </header>
        <br><br><br>
        <center>
            <div id="setting_box">

                <div class="pic_box" style="position: relative;
                                            left: -330px;
                                            width: 440px;
                                            height: 550px;
                                            background-color: rgb(188, 255, 251);">
                    <img src="./user_profile.png" alt="" style="position: relative;
                                                                top: 80px;">
                </div>

                <div class="type_box" style="position: relative;
                                                     top: -500px;
                                                     left: 180px">
                    <h3 style="width: 200px;
                               height: 20px;
                               padding: 7px;
                               border-radius: 10px;
                               margin-bottom: 25px;">First Name: <?php echo $_SESSION['FIRST_NAME'] ?></h3>
                    <h3 style="width: 200px;
                               height: 20px;
                               padding: 7px;
                               border-radius: 10px;
                               margin-bottom: 25px;">Last Name: <?php echo $_SESSION['LAST_NAME'] ?></h3>
                    <h3 style="width: 300px;
                               height: 20px;
                               padding: 7px;
                               border-radius: 10px;
                               margin-bottom: 25px;">Contact Number: <?php echo $_SESSION['CONTACT_NUMBER'] ?></h3>
                    <h3 style="width: 400px;
                               height: 20px;
                               padding: 7px;
                               border-radius: 10px;
                               margin-bottom: 25px;">Email: <?php echo $_SESSION['EMAIL'] ?></h3>
                    <h3 style="width: 200px;
                               height: 20px;
                               padding: 7px;
                               border-radius: 10px;
                               margin-bottom: 25px;">Password: <?php echo $_SESSION['PASSWORD'] ?></h3>

                    <a href="./user_setting_page.php"><button id="hover_btn">Change User Data</button></a><br><br><br>

                    <a href="./logout.php"><button id="cancel_btn">Logout User</button></a>

                </div>
        </center>

        

    </body>
</html>