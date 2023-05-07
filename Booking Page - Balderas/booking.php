
<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Room Booking</title>
    <link rel="shortcut icon" href="./logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/5253132cc4.js" crossorigin="anonymous"></script>

</head>
<body style="background-color: rgb(196, 164, 132);">

    <header>
    
            <div class="title_bar">
                <ul>
                    <li><img src="./logo.png" alt="" id="brand_logo"></li>
                    <li><h2 id="brand_name">Marjhun's Apartelle</h2></li>
                    <li>

                        <div class="user_profile">
                            <img src="./user_profile.png" alt="" id="user_pic">
                            <h5> <?php echo $_SESSION['EMAIL'] ?> </h5>

                            <div class="user_menu">
                                <ul>
                                    <a href="../User Setting Page - Suico/user_display_page.php"><li><i class="fa-solid fa-gear"></i>Account Setting</li></a>
                                    <a href="../Main Page - Suico/logout.php"><li><i class="fa-solid fa-right-from-bracket"></i>Logout Account</li></a>
                                </ul>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>

           <nav class="nav_bar">
                <ul>
                    <a href="../Main Page - Suico/main_page.php"><li><i class="fa-solid fa-house"></i>Home</li></a>
                    <a href="#"><li class="first_item"><i class="fa-solid fa-calendar-day"></i>Room Booking</li></a>
                    <a href="../Review Page - Gobui/reviewpage.php"><li><i class="fa-solid fa-star"></i>Customer Review</li></a>
                    <a href="../About Us Page/aboutus.php"><li><i class="fa-solid fa-people-roof"></i>About Us</li></a>
                </ul>
            </nav>

        </header>
        <br><br><br><br><br><br><br><br><br><br>

        <div class="container">
        <div class="left">
            <h2 style="position: absolute;"> Standard Room A </h2><br><br><br>
            <p>
                <img style="height: 300px; width: 300px;" src="./standarda.jpg" alt="" id="main_pic">
                <h2>Price: 699PHP</h2><br><br>
                <h2>Amenities:</h2><br>
                 > Air Conditioned Room <br>
                 > Standard sized bed (can accommodate up to 2 people) <br>
                 > Comfort Room with shower and sink <br>
                 > Cable TV <br><br>
            </p>    

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1" style="cursor: pointer; padding: 10px; ">
            BOOK NOW</button>

            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h1>Booking Form</h1><br>

                                Name: <?php echo $_SESSION['LAST_NAME'] .", ". $_SESSION['FIRST_NAME'] ?> <br><br>

                                Email: <?php echo $_SESSION['EMAIL'] ?> <br><br>

                                Phone: <?php echo $_SESSION['CONTACT_NUMBER'] ?> <br><br>
                                
                <form id="bookingForm1" method="post" action="add_room_booking1.php">
                    <strong>STANDARD ROOM A</strong> <br><br>
                    <label for="checkinRoom1">Check-in Date:</label>
                    <input type="date" id="checkinRoom1" name="checkinRoom1" required><br><br>

                    <label for="checkoutRoom1">Check-out Date:</label>
                    <input type="date" id="checkoutRoom1" name="checkoutRoom1" required><br><br>

                    <label for="numAdultsRoom1">Adults:</label>
                    <input type="number" id="numAdultsRoom1" name="numAdultsRoom1" min="1" max="4" required><br><br>

                    <label for="numChildrenRoom1">Children:</label>
                    <input type="number" id="numChildrenRoom1" name="numChildrenRoom1" min="1" max="4" required><br><br>

                    <button type="submit" name="submit">Book Room</button>
                    <input type="reset" value="Reset">
   
                </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="right">
            <br><br>
            <h2 style="position: absolute;"> Standard Room B </h2><br><br><br>
            <p>
                <img style="height: 300px; width: 300px;" src="./standardb.jpg" alt="" id="main_pic">
                <h2>Price: 599PHP</h2><br><br>
                <h2>Amenities:</h2><br>
                 > Air Conditioned Room <br>
                 > Standard sized bed (can accommodate up to 2 people) <br>
                 > Comfort Room with shower and sink <br><br><br>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2" style="cursor: pointer; padding: 10px;">
            BOOK NOW</button>

            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h1>Booking Form</h1><br>

                                Name: <?php echo $_SESSION['LAST_NAME'] .", ". $_SESSION['FIRST_NAME'] ?> <br><br>

                                Email: <?php echo $_SESSION['EMAIL'] ?> <br><br>

                                Phone: <?php echo $_SESSION['CONTACT_NUMBER'] ?> <br><br>
                <form id="bookingForm2" method="post" action="add_room_booking2.php">
                    <strong>STANDARD ROOM B</strong> <br><br>
                    <label for="checkinRoom2">Check-in Date:</label>
                    <input type="date" id="checkinRoom2" name="checkinRoom2" required><br><br>

                    <label for="checkoutRoom2">Check-out Date:</label>
                    <input type="date" id="checkoutRoom2" name="checkoutRoom2" required><br><br>

                    <label for="numAdultsRoom2">Adults:</label>
                    <input type="number" id="numAdultsRoom2" name="numAdultsRoom2" min="1" max="4" required><br><br>

                    <label for="numChildrenRoom2">Children:</label>
                    <input type="number" id="numChildrenRoom2" name="numChildrenRoom2" min="1" max="4" required><br><br>

                    <button type="submit" name="submit">Book Room</button>
                    <input type="reset" value="Reset">
   
                </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <br>
    <div class="container">
        <div class="left">
            <h2 style="position: absolute;"> Delux Room A </h2><br><br><br>
            <p>
                <img style="height: 300px; width: 300px;" src="./deluxa.jpg" alt="" id="main_pic">
                <h2>Price: 1,110PHP</h2><br><br>
                <h2>Amenities:</h2><br>
                  > Air Conditioned Room <br>
                  > Standard sized bed (can accommodate up to 2 people) <br>
                  > Comfort Room with shower and sink <br>
                  > Dining Area <br>
                  > Refrigerator <br>
                  > Cable TV <br>
                  > Cabinet <br><br>
            </p>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3" style="cursor: pointer; padding: 10px;">
            BOOK NOW</button>

            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h1>Booking Form</h1><br>

                                Name: <?php echo $_SESSION['LAST_NAME'] .", ". $_SESSION['FIRST_NAME'] ?> <br><br>

                                Email: <?php echo $_SESSION['EMAIL'] ?> <br><br>

                                Phone: <?php echo $_SESSION['CONTACT_NUMBER'] ?> <br><br>

                <form id="bookingForm3" method="post" action="add_room_booking3.php">
                    <strong>DELUX ROOM A</strong> <br><br>
                    <label for="checkinRoom3">Check-in Date:</label>
                    <input type="date" id="checkinRoom3" name="checkinRoom3" required><br><br>

                    <label for="checkoutRoom3">Check-out Date:</label>
                    <input type="date" id="checkoutRoom3" name="checkoutRoom3" required><br><br>

                    <label for="numAdultsRoom3">Adults:</label>
                    <input type="number" id="numAdultsRoom3" name="numAdultsRoom3" min="1" max="4" required><br><br>

                    <label for="numChildrenRoom3">Children:</label>
                    <input type="number" id="numChildrenRoom3" name="numChildrenRoom3" min="1" max="4" required><br><br>

                    <button type="submit" name="submit">Book Room</button>
                    <input type="reset" value="Reset">
   
                </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="right">
            <br><br>
            <h2 style="position: absolute;"> Delux Room B </h2><br><br><br>
            <p>
                <img style="height: 300px; width: 300px;" src="./deluxb.jpg" alt="" id="main_pic">
                <h2>Price: 1,010PHP</h2><br><br>
                <h2>Amenities:</h2><br>
                 > Air Conditioned Room <br>
                 > Standard sized bed (can accommodate up to 2 people) <br>
                 > Comfort Room with shower and sink <br>
                 > Dining Area <br>
                 > Cable TV <br>
                 > Cabinet <br><br><br>
            </p>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4" style="cursor: pointer; padding: 10px;">
            BOOK NOW</button>

            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h1>Booking Form</h1><br>

                                Name: <?php echo $_SESSION['LAST_NAME'] .", ". $_SESSION['FIRST_NAME'] ?> <br><br>

                                Email: <?php echo $_SESSION['EMAIL'] ?> <br><br>

                                Phone: <?php echo $_SESSION['CONTACT_NUMBER'] ?> <br><br>
                <form id="bookingForm4" method="post" action="add_room_booking4.php">                    
                    <strong>DELUX ROOM B</strong> <br><br>
                    <label for="checkinRoom4">Check-in Date:</label>
                    <input type="date" id="checkinRoom4" name="checkinRoom4" required><br><br>

                    <label for="checkoutRoom4">Check-out Date:</label>
                    <input type="date" id="checkoutRoom4" name="checkoutRoom4" required><br><br>

                    <label for="numAdultsRoom4">Adults:</label>
                    <input type="number" id="numAdultsRoom4" name="numAdultsRoom4" min="1" max="4" required><br><br>

                    <label for="numChildrenRoom4">Children:</label>
                    <input type="number" id="numChildrenRoom4" name="numChildrenRoom4" min="1" max="4" required><br><br>

                    <button type="submit" name="submit">Book Room</button>
                    <input type="reset" value="Reset">
   
                </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <br>
    <div class="container">
        <div class="left">
            <h2 style="position: absolute;"> Fully Furnished Room </h2><br><br><br>
            <p>
                <img style="height: 300px; width: 300px;" src="./fully.jpg" alt="" id="main_pic">
                <h2>Price: 1,950PHP</h2><br>
                <h2>Amenities:</h2><br>
                 > Air Conditioned Two-Story Room <br>
                 > Japanese Style Bedroom (can accommodate up to 2 people) <br>
                 > Comfort Room with shower and sink <br>
                 > One extra Bed <br>
                 > Cable TV <br>
                 > Cabinet <br>
                 > Kitchenette <br>
                 > Dining Area <br>
                 > Refrigerator <br><br>
            </p>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5" style="cursor: pointer; padding: 10px;">
            BOOK NOW</button>

            <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h1>Booking Form</h1><br>

                                Name: <?php echo $_SESSION['LAST_NAME'] .", ". $_SESSION['FIRST_NAME'] ?> <br><br>

                                Email: <?php echo $_SESSION['EMAIL'] ?> <br><br>

                                Phone: <?php echo $_SESSION['CONTACT_NUMBER'] ?> <br><br>
                <form id="bookingForm5" method="post" action="add_room_booking5.php">
                    <strong>FULLY FURNISHED ROOM</strong> <br><br>
                    <label for="checkinRoom5">Check-in Date:</label>
                    <input type="date" id="checkinRoom5" name="checkinRoom5" required><br><br>

                    <label for="checkoutRoom5">Check-out Date:</label>
                    <input type="date" id="checkoutRoom5" name="checkoutRoom5" required><br><br>

                    <label for="numAdultsRoom5">Adults:</label>
                    <input type="number" id="numAdultsRoom5" name="numAdultsRoom5" min="1" max="4" required><br><br>

                    <label for="numChildrenRoom5">Children:</label>
                    <input type="number" id="numChildrenRoom5" name="numChildrenRoom5" min="1" max="4" required><br><br>

                    <button type="submit" name="submit">Book Room</button>
                    <input type="reset" value="Reset">
   
                </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="right">
            <br><br>
            <h2 style="position: absolute;"> Semi-Furnished Room </h2><br><br><br>
            <p>
                <img style="height: 300px; width: 300px;" src="./semi.jpg" alt="" id="main_pic">
                <h2>Price: 1,200PHP</h2><br>
                <h2>Amenities:</h2><br>
                 > Air Conditioned Two-Story Room <br>
                 > Japanese Style Bedroom (can accommodate up to 2 people) <br>
                 > Comfort Room with shower and sink <br>
                 > Dining Area <br>
                 > Refrigerator <br>
                 > Cable TV <br>
                 > Cabinet <br><br><br>
            </p>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal6" style="cursor: pointer; padding: 10px;">
            BOOK NOW</button>

            <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h1>Booking Form</h1><br>

                                Name: <?php echo $_SESSION['LAST_NAME'] .", ". $_SESSION['FIRST_NAME'] ?> <br><br>

                                Email: <?php echo $_SESSION['EMAIL'] ?> <br><br>

                                Phone: <?php echo $_SESSION['CONTACT_NUMBER'] ?> <br><br>

                <form id="bookingForm6" method="post" action="add_room_booking6.php">
                    <strong>SEMI-FURNISHED ROOM</strong> <br><br>
                    <label for="checkinRoom6">Check-in Date:</label>
                    <input type="date" id="checkinRoom6" name="checkinRoom6" required><br><br>

                    <label for="checkoutRoom6">Check-out Date:</label>
                    <input type="date" id="checkoutRoom6" name="checkoutRoom6" required><br><br>

                    <label for="numAdultsRoom6">Adults:</label>
                    <input type="number" id="numAdultsRoom6" name="numAdultsRoom6" min="1" max="4" required><br><br>

                    <label for="numChildrenRoom6">Children:</label>
                    <input type="number" id="numChildrenRoom6" name="numChildrenRoom6" min="1" max="4" required><br><br>

                    <button type="submit" name="submit">Book Room</button>
                    <input type="reset" value="Reset">
   
                </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script>

        $(document).ready(function() {

            $("#bookingForm1").submit(function(event) {

                var checkinRoom1 = $('#checkinRoom1').val();
                var checkoutRoom1 = $('#checkoutRoom1').val();
                var numAdultsRoom1 = $('#numAdultsRoom1').val();
                var numChildrenRoom1 = $('#numChildrenRoom1').val();

                $.ajax({
                type: "POST",
                url: "./add_room_booking1.php",
                data: {
                    checkinRoom1: checkinRoom1,
                    checkoutRoom1: checkoutRoom1,
                    numAdultsRoom1: numAdultsRoom1,
                    numChildrenRoom1: numChildrenRoom1
                },
                success: function(data) {
                    // Handle the response from the server-side PHP script
                }
                });

            });

        });

        $(document).ready(function() {

            $("#bookingForm2").submit(function(event) {

                var checkinRoom2 = $('#checkinRoom2').val();
                var checkoutRoom2 = $('#checkoutRoom2').val();
                var numAdultsRoom2 = $('#numAdultsRoom2').val();
                var numChildrenRoom2 = $('#numChildrenRoom2').val();

                $.ajax({
                type: "POST",
                url: "./add_room_booking2.php",
                data: {
                    checkinRoom2: checkinRoom2,
                    checkoutRoom2: checkoutRoom2,
                    numAdultsRoom2: numAdultsRoom2,
                    numChildrenRoom2: numChildrenRoom2
                },
                success: function(data) {
                    // Handle the response from the server-side PHP script
                }
                });

            });

        });

        $(document).ready(function() {

            $("#bookingForm3").submit(function(event) {

                var checkinRoom3 = $('#checkinRoom3').val();
                var checkoutRoom3 = $('#checkoutRoom3').val();
                var numAdultsRoom3 = $('#numAdultsRoom3').val();
                var numChildrenRoom3 = $('#numChildrenRoom3').val();

                $.ajax({
                type: "POST",
                url: "./add_room_booking3.php",
                data: {
                    checkinRoom3: checkinRoom3,
                    checkoutRoom3: checkoutRoom3,
                    numAdultsRoom3: numAdultsRoom3,
                    numChildrenRoom3: numChildrenRoom3
                },
                success: function(data) {
                    // Handle the response from the server-side PHP script
                }
                });

            });

        });

        $(document).ready(function() {

            $("#bookingForm4").submit(function(event) {

                var checkinRoom4 = $('#checkinRoom4').val();
                var checkoutRoom4 = $('#checkoutRoom4').val();
                var numAdultsRoom4 = $('#numAdultsRoom4').val();
                var numChildrenRoom4 = $('#numChildrenRoom4').val();

                $.ajax({
                type: "POST",
                url: "./add_room_booking4.php",
                data: {
                    checkinRoom4: checkinRoom4,
                    checkoutRoom4: checkoutRoom4,
                    numAdultsRoom4: numAdultsRoom4,
                    numChildrenRoom4: numChildrenRoom4
                },
                success: function(data) {
                    // Handle the response from the server-side PHP script
                }
                });

            });

        });

        $(document).ready(function() {

            $("#bookingForm5").submit(function(event) {

                var checkinRoom5 = $('#checkinRoom5').val();
                var checkoutRoom5 = $('#checkoutRoom5').val();
                var numAdultsRoom5 = $('#numAdultsRoom5').val();
                var numChildrenRoom5 = $('#numChildrenRoom5').val();

                $.ajax({
                type: "POST",
                url: "./add_room_booking5.php",
                data: {
                    checkinRoom5: checkinRoom5,
                    checkoutRoom5: checkoutRoom5,
                    numAdultsRoom5: numAdultsRoom5,
                    numChildrenRoom5: numChildrenRoom5
                },
                success: function(data) {
                    // Handle the response from the server-side PHP script
                }
                });

            });

        });

        $(document).ready(function() {

            $("#bookingForm6").submit(function(event) {

            var checkinRoom6 = $('#checkinRoom6').val();
            var checkoutRoom6 = $('#checkoutRoom6').val();
            var numAdultsRoom6 = $('#numAdultsRoom6').val();
            var numChildrenRoom6 = $('#numChildrenRoom6').val();

                $.ajax({
                type: "POST",
                url: "./add_room_booking6.php",
                data: {
                    checkinRoom6: checkinRoom6,
                    checkoutRoom6: checkoutRoom6,
                    numAdultsRoom6: numAdultsRoom6,
                    numChildrenRoom6: numChildrenRoom6
                },
                success: function(data) {
                    // Handle the response from the server-side PHP script
                }
                });

            });

        });

    </script>
    </body>
</html>