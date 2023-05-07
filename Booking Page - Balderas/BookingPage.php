

<!-- <?php

session_start();

?> -->

<!DOCTYPE html>
<html>
<head>
    <title>Room Booking</title>
    <link rel="shortcut icon" href="./logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles.css">
    <script src="https://kit.fontawesome.com/5253132cc4.js" crossorigin="anonymous"></script>
    <style>
        .close{
            color: gray;
            cursor: pointer;
        }
        .close:hover{
            color: lightgray;
        }
    </style>
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
                            <h5>  </h5>

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
        <br><br><br><br><br><br><br><br><br>

        <div class="container">
        <div class="left">
            <h2 style="position: absolute;"> Standard Room A </h2><br><br><br>
            <p>
                <img style="height: 300px; width: 300px;" src="./standarda.jpg" alt="" id="main_pic">
                <h2>Price: 699PHP</h2><br>
                <h2>Amenities:</h2><br>
                 > Air Conditioned Room <br>
                 > Standard sized bed (can accommodate up to 2 people) <br>
                 > Comfort Room with shower and sink <br>
                 > Cable TV <br><br>
            </p> <br>

            <button onclick="document.getElementById('myModal').style.display='block'">BOOK NOW</button>

    
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
                     <h1>Booking Form</h1><br>
                <form>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required><br><br>

                    <label for="checkin">Check-in Date:</label>
                    <input type="date" id="checkin" name="checkin" required><br><br>

                    <label for="checkout">Check-out Date:</label>
                    <input type="date" id="checkout" name="checkout" required><br><br>

                    <label for="numguests">Adults:</label>
                    <input type="number" id="numguests" name="numguests" min="1" max="4" required><br><br>

                    <label for="numguests">Children:</label>
                    <input type="number" id="numguests" name="numguests" min="1" max="4" required><br><br>

                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </form>
                </div>
            </div>

        

        </div>
        <div class="right">
            <br><br>
            <h2 style="position: absolute;"> Standard Room B </h2><br><br><br>
            <p>
                <img style="height: 300px; width: 300px;" src="./standardb.jpg" alt="" id="main_pic">
                <h2>Price: 599PHP</h2><br>
                <h2>Amenities:</h2><br>
                 > Air Conditioned Room <br>
                 > Standard sized bed (can accommodate up to 2 people) <br>
                 > Comfort Room with shower and sink <br>
            </p> <br><br>

            <button onclick="document.getElementById('myModal').style.display='block'">BOOK NOW</button>

    
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
                     <h1>Booking Form</h1><br>
                <form>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required><br><br>

                    <label for="checkin">Check-in Date:</label>
                    <input type="date" id="checkin" name="checkin" required><br><br>

                    <label for="checkout">Check-out Date:</label>
                    <input type="date" id="checkout" name="checkout" required><br><br>

                    <label for="numguests">Adults:</label>
                    <input type="number" id="numguests" name="numguests" min="1" max="4" required><br><br>

                    <label for="numguests">Children:</label>
                    <input type="number" id="numguests" name="numguests" min="1" max="4" required><br><br>

                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </form>
                </div>
            </div>


        </div>
    </div>

    <div class="container">
        <div class="left">
            <h2 style="position: absolute;"> Delux Room A </h2><br><br><br>
            <p>
                <img style="height: 300px; width: 300px;" src="./deluxa.jpg" alt="" id="main_pic">
                <h2>Price: 1,110PHP</h2><br>
                <h2>Amenities:</h2><br>
                  > Air Conditioned Room <br>
                  > Standard sized bed (can accommodate up to 2 people) <br>
                  > Comfort Room with shower and sink <br>
                  > Dining Area <br>
                  > Refrigerator <br>
                  > Cable TV <br>
                  > Cabinet <br><br>
            </p> <br>

            <button onclick="document.getElementById('myModal').style.display='block'">BOOK NOW</button>

    
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
                     <h1>Booking Form</h1><br>
                <form>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required><br><br>

                    <label for="checkin">Check-in Date:</label>
                    <input type="date" id="checkin" name="checkin" required><br><br>

                    <label for="checkout">Check-out Date:</label>
                    <input type="date" id="checkout" name="checkout" required><br><br>

                    <label for="numguests">Adults:</label>
                    <input type="number" id="numguests" name="numguests" min="1" max="4" required><br><br>

                    <label for="numguests">Children:</label>
                    <input type="number" id="numguests" name="numguests" min="1" max="4" required><br><br>

                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </form>
                </div>
            </div>


        </div>
        <div class="right">
            <br><br>
            <h2 style="position: absolute;"> Delux Room B </h2><br><br><br>
            <p>
                <img style="height: 300px; width: 300px;" src="./deluxb.jpg" alt="" id="main_pic">
                <h2>Price: 1,010PHP</h2><br>
                <h2>Amenities:</h2><br>
                 > Air Conditioned Room <br>
                 > Standard sized bed (can accommodate up to 2 people) <br>
                 > Comfort Room with shower and sink <br>
                 > Dining Area <br>
                 > Cable TV <br>
                 > Cabinet <br><br>
            </p> <br>

            <button onclick="document.getElementById('myModal').style.display='block'">BOOK NOW</button>

    
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
                     <h1>Booking Form</h1><br>
                <form>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required><br><br>

                    <label for="checkin">Check-in Date:</label>
                    <input type="date" id="checkin" name="checkin" required><br><br>

                    <label for="checkout">Check-out Date:</label>
                    <input type="date" id="checkout" name="checkout" required><br><br>

                    <label for="numguests">Adults:</label>
                    <input type="number" id="numguests" name="numguests" min="1" max="4" required><br><br>

                    <label for="numguests">Children:</label>
                    <input type="number" id="numguests" name="numguests" min="1" max="4" required><br><br>

                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </form>
                </div>
            </div>


        </div>
    </div>

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

            <button onclick="document.getElementById('myModal').style.display='block'">BOOK NOW</button>

    
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
                     <h1>Booking Form</h1><br>
                <form>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required><br><br>

                    <label for="checkin">Check-in Date:</label>
                    <input type="date" id="checkin" name="checkin" required><br><br>

                    <label for="checkout">Check-out Date:</label>
                    <input type="date" id="checkout" name="checkout" required><br><br>

                    <label for="numguests">Adults:</label>
                    <input type="number" id="numguests" name="numguests" min="1" max="4" required><br><br>

                    <label for="numguests">Children:</label>
                    <input type="number" id="numguests" name="numguests" min="1" max="4" required><br><br>

                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </form>
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
                 > Cabinet 
            </p> <br><br>

            <button onclick="document.getElementById('myModal').style.display='block'">BOOK NOW</button>

    
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
                     <h1>Booking Form</h1><br>
                <form>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required><br><br>

                    <label for="checkin">Check-in Date:</label>
                    <input type="date" id="checkin" name="checkin" required><br><br>

                    <label for="checkout">Check-out Date:</label>
                    <input type="date" id="checkout" name="checkout" required><br><br>

                    <label for="numguests">Adults:</label>
                    <input type="number" id="numguests" name="numguests" min="1" max="4" required><br><br>

                    <label for="numguests">Children:</label>
                    <input type="number" id="numguests" name="numguests" min="1" max="4" required><br><br>

                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </form>
                </div>
            </div>


        </div>
    </div>
    <script>
        window.onclick = function(event) {
            if (event.target == document.getElementById('myModal')) {
                document.getElementById('myModal').style.display = "none";
            }
        }
    </script>
    </body>
</html>
<?php
// Check if a session is not already active before starting a new one
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Rest of your code...
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $names = $_POST["name"];
    $emails = $_POST["email"];
    $phones = $_POST["phone"];
    $checkins = $_POST["checkin"];
    $checkouts = $_POST["checkout"];
    $numAdultss = $_POST["numguests"];
    $numChildrens = $_POST["numchildren"];

    // Calculate the total price (you can modify this calculation based on your requirements)
    $totalPrice = calculateTotalPrice($checkins, $checkouts, $numAdultss, $numChildrens);

    // Define the database connection details
    $servername = "localhost";
    $database = "suico_baldera_ochavo_gobui_nacario_webdev1_finalproject_database"; 
    $dbUsername = "root";
    $dbPassword = "";

    $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // ...

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO booking (CUSTOMER_NAME, CUSTOMER_CONTACT_NUMBER, CUSTOMER_EMAIL, START_DATE, END_DATE, NUMBER_OF_ADULTS, NUMBER_OF_CHILDREN, TOTAL_PRICE) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssiid", $names, $phones, $emails, $checkins, $checkouts, $numAdultss, $numChildrens, $totalPrice);

    // Execute the statement and check for success
    if ($stmt->execute()) {
        echo "Booking successfully created.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    mysqli_close($conn);
}

// Function to calculate the total price (you can modify this calculation based on your requirements)
function calculateTotalPrice($checkin, $checkout, $numAdults, $numChildren) {
    // Calculate the number of nights
    $startDate = strtotime($checkin);
    $endDate = strtotime($checkout);
    $numDays = ($endDate - $startDate) / (60 * 60 * 24);

    // Set the price per room per day
    $pricePerRoomPerDay = 100; // Adjust this value as needed

    // Calculate the total price based on the number of days, number of rooms, and price per room
    $totalPrice = $numDays * $pricePerRoomPerDay;

    return $totalPrice;
}
?>
