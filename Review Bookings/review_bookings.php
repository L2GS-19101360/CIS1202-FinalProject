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

$sql = "SELECT * FROM booking";
$result = mysqli_query($est_conn, $sql);
$countBook = 0;

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Review Bookings Page</title>
        <link rel="shortcut icon" href="./website_favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="./style.css">
        <script src="https://kit.fontawesome.com/5253132cc4.js" crossorigin="anonymous"></script>
        <style>
            #countRoom{
                position: relative;
                top: -780px;
                margin-left: 20px;
            }
            .bookingList{
                position: relative;
                top: 190px;
                background-color: white;
                padding: 20px;
                width: 700px;
                border-bottom: 1px dashed black;
                left: 400px;
            }
            .bookDetail{
                border: 1px solid black;
                padding: 10px;
            }
            #cancelBooking{
                background-color: orange;
                padding: 7px;
                border: none;
                border-radius: 7px;
                height: 40px;
                margin: 15px;
            }
            #cancelBooking:hover{
                background-color: red;
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
                <a href="../Main Page - Suico/main_page.php"><li class="first_item"><i class="fa-solid fa-house"></i>Home</li></a>
                    <a href="../Booking Page - Balderas/booking.php"><li><i class="fa-solid fa-calendar-day"></i>Room Booking</li></a>
                    <a href="../Review Page - Gobui/reviewpage.php"><li><i class="fa-solid fa-star"></i>Customer Review</li></a>
                    <a href="../About Us Page/aboutus.php"><li><i class="fa-solid fa-people-roof"></i>About Us</li></a>
                </ul>
            </nav>

        </header>

            <?php while($row = mysqli_fetch_assoc($result)){ ?>

                <?php if ($row['CUSTOMER_EMAIL'] == $_SESSION['EMAIL']){ ?>

                    <?php if ($row['STATUS'] == "PENDING"){ ?>

                    <div class="bookingList">
                        Customer Full Name: <?php echo $row['CUSTOMER_NAME'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Customer Email: <?php echo $row['CUSTOMER_EMAIL'] ?><br><br>
                        Customer Contact Number: <?php echo $row['CUSTOMER_CONTACT_NUMBER'] ?><br><br>
                        <div class="bookDetail">
                            Room Type: <?php echo $row['TYPE'] ?><br><br>
                            Number of Adult: <?php echo $row['NUMBER_OF_ADULTS'] ?> &nbsp;&nbsp;&nbsp; Number of Children: <?php echo $row['NUMBER_OF_CHILDREN'] ?><br><br>
                            Start Date: <?php echo $row['START_DATE'] ?> &nbsp;&nbsp;&nbsp; End Date: <?php echo $row['START_DATE'] ?><br><br>
                            Total Payment = <?php echo "Php ".$row['TOTAL_PRICE'] ?> &nbsp;&nbsp;&nbsp;
                            Booking Status: <span style="background-color: lightgray; padding: 5px;"><?php echo $row['STATUS'] ?></span><br><br>
                            <center>
                            <button id="cancelBooking" onclick="cancelBooking(<?php echo $row['ID'] ?>)">Cancel Booking Schedule</button>
                            </center>
                        </div>
                    </div>

                    <?php } else if ($row['STATUS'] == "CANCEL"){?>
                    
                    <div class="bookingList">
                        Customer Full Name: <?php echo $row['CUSTOMER_NAME'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Customer Email: <?php echo $row['CUSTOMER_EMAIL'] ?><br><br>
                        Customer Contact Number: <?php echo $row['CUSTOMER_CONTACT_NUMBER'] ?><br><br>
                        <div class="bookDetail">
                            Room Type: <?php echo $row['TYPE'] ?><br><br>
                            Number of Adult: <?php echo $row['NUMBER_OF_ADULTS'] ?> &nbsp;&nbsp;&nbsp; Number of Children: <?php echo $row['NUMBER_OF_CHILDREN'] ?><br><br>
                            Start Date: <?php echo $row['START_DATE'] ?> &nbsp;&nbsp;&nbsp; End Date: <?php echo $row['START_DATE'] ?><br><br>
                            Total Payment = <?php echo "Php ".$row['TOTAL_PRICE'] ?> &nbsp;&nbsp;&nbsp;
                            Booking Status: <span style="background-color: red; padding: 5px; color: white;"><?php echo $row['STATUS'] ?></span><br><br>
                        </div>
                    </div>
                    
                    <?php } else if ($row['STATUS'] == "APPROVED"){?>
                    
                    <div class="bookingList">
                        Customer Full Name: <?php echo $row['CUSTOMER_NAME'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Customer Email: <?php echo $row['CUSTOMER_EMAIL'] ?><br><br>
                        Customer Contact Number: <?php echo $row['CUSTOMER_CONTACT_NUMBER'] ?><br><br>
                        <div class="bookDetail">
                            Room Type: <?php echo $row['TYPE'] ?><br><br>
                            Number of Adult: <?php echo $row['NUMBER_OF_ADULTS'] ?> &nbsp;&nbsp;&nbsp; Number of Children: <?php echo $row['NUMBER_OF_CHILDREN'] ?><br><br>
                            Start Date: <?php echo $row['START_DATE'] ?> &nbsp;&nbsp;&nbsp; End Date: <?php echo $row['START_DATE'] ?><br><br>
                            Total Payment = <?php echo "Php ".$row['TOTAL_PRICE'] ?> &nbsp;&nbsp;&nbsp;
                            Booking Status: <span style="background-color: green; padding: 5px; color: white;"><?php echo $row['STATUS'] ?></span><br><br>
                        </div>
                    </div>
                    
                    <?php } ?>


                 <?php } ?>

            <?php } ?>
    
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
        function cancelBooking(id){
            // alert(id);
            $.ajax({
                url: "./cancel_booking.php",
                type: "POST",
                data: {id: id},
                success: function(response){
                    alert("Room Booking Schedule is Canceled");
                    location.reload();
                }
            });
        }
    </script>
    </body>
</html>