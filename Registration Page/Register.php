<?php
session_start();

$servername = "localhost";
$database = "suico_baldera_ochavo_gobui_nacario_webdev1_finalproject_database"; 
$dbUsername = "root";
$dbPassword = "";

// Create connection
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Yes";


if (isset($_POST["reg_btn"])) {
    $fsname = $_POST["first"];
    $lsname = $_POST["last"];
    $emails = $_POST["email"];
    $pwd = $_POST["password"];
    $contnumber = $_POST["contact"];

    // Sanitize the input to prevent SQL injection
    $fsname = mysqli_real_escape_string($conn, $fsname);
    $lsname = mysqli_real_escape_string($conn, $lsname);
    $emails = mysqli_real_escape_string($conn, $emails);
    $pwd = mysqli_real_escape_string($conn, $pwd);
    $contnumber = mysqli_real_escape_string($conn, $contnumber);

    // Hash the password for better security
    // $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);

    // Check if the user already exists in the database
    $sql = "SELECT * FROM users WHERE EMAIL = '$emails'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        // Insert the user into the database
        $sql = "INSERT INTO users (FIRST_NAME, LAST_NAME, EMAIL, PASSWORD, CONTACT_NUMBER) VALUES ('$fsname', '$lsname', '$emails', '$pwd', '$contnumber')";
        mysqli_query($conn, $sql);
        // $row = mysqli_fetch_assoc($sql);
        // Set session variable and redirect to home page
        // $_SESSION['email'] = $email;

        // $_SESSION['ID'] = $row['ID'];
        // $_SESSION['FIRST_NAME'] = $row['FIRST_NAME'];
        // $_SESSION['LAST_NAME'] = $row['LAST_NAME'];
        // $_SESSION['CONTACT_NUMBER'] = $row['CONTACT_NUMBER'];
        // $_SESSION['EMAIL'] = $row['EMAIL'];
        // $_SESSION['PASSWORD'] = $row['PASSWORD'];

        header("Location: ../Login - Nacario/login.php");
        // exit;
    } else {
        $error = "User already exists";
    }
}

mysqli_close($conn);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="shortcut icon" type="image/fav-icon" href="img/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-qxvlv8l1KzRLg5o5X5oVJnEmiWb7D1ZZ0nGYgwukH0Qc8ThF7Z1g0KXzUy/6p/1SSwVTusY+tB0iLxshO/zG0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,wght@0,300;0,500;1,200;1,400;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <style>
      *{
        font-family: "Roboto Serif", serif;
      }

      body {
        margin: 0;
        background: linear-gradient(-45deg, #ee7752, #ffde5e, #ffa220, #ff8502);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        font-family: "Roboto Serif", serif;
        overflow: overlay;
      }

      .container {
        position: relative;
        margin-bottom: 50px;
        z-index: 1;
        background-color: rgba(255, 255, 255, 0.6); /* Transparent white color */
        padding-right: 0; /* Remove padding on the right side */
        border-radius: 20px;
        width: 55%; /* Set the width of the container */
        min-height: 900px; /* Set the minimum height of the container */
      }

      h1 {
        margin-top: 3rem;
        font-size: 4rem;
      }

      img {
        border-radius: 10px;
      }
      
      input[type="email"], input[type="password"] {
        width: 100%;
        height: 40px;
        border-radius: 10px;
        padding: 10px;
        margin: 0 auto; 
      }
      
      .form-group {
        margin-top: 20px;
        margin-bottom: 20px; 
      }

      button {
        display: inline-block;
        font-size: 24px;
        width: 250px;
        margin-bottom: 1rem;
        padding: 15px 30px;
        margin-right: 10px;
        outline: none; /* Remove blue outline on button hover */
      }

      button[name="reg_btn"] {

        background-color: #9ACD32; /* Change the background color to light green */
        color: #fff; /* Change the font color to white */
      }

      button[type="button"] {
        margin-top: .5rem;
        background-color: red; /* Change the background color to yellow */
        color: #fff; /* Change the font color to white */
      }

      .logo{
        display: block;
        margin-top: 3mm;
        margin-left: auto;
        margin-right: auto;
        width: 35%;
        height: auto;
      }

      .waveDown{
        width: 100%;
        height: 200px;
      } 
      
      .waveTop{
        width: 100%;
        height: 200px;
        -webkit-transform: scaleX(-1) scaleY(-1);
        transform: scaleX(-1) scaleY(-1);
      }   
      
      .col-md-6.mx-auto {
        margin-top: 40px;
      }

      .lowerForm {
        position: relative;
        top: 20mm;
      }

      .lowerForm img {
        position: absolute;
        left: 5px;
        top: 50%;
        transform: translateY(-50%);
      }

      .buttonGroup {
        position: absolute;
        right: 0;
        left: 35mm;
        top: 45%;
        transform: translateY(-45%);
      }

</style>

<body>
  <!-- <img class="waveTop" src="img/wavesTop.svg" alt="wavesTopSVG"> -->
  <div class="container mt-5">
    <div class="row align-items-center">
      <div class="col-md-6 mx-auto">
        <img class="logo" src="img/logo-removebg.png" alt="logo">

        <form action="" method="POST">
          <div class="form-group">
            <label for="exampleFirstName"> First Name </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="first">
          </div>

          <div class="form-group">
            <label for="exampleLastName1"> Last Name </label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="last">
          </div>

          <div class="form-group">
            <label for="exampleContactNumber"> Contact Number </label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="contact">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1"> Email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          </div>
          
          <div class="form-group">
            <label for="exampleInputPassword1"> Password </label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>

          <div class="form-group">
            <label for="exampleInputConfirmPassword1"> Confirm Password </label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>

          <div class="lowerForm">
            <img src="img/photo_icon.png" alt="photoUpload" width="30%" height=auto>
            <div class="buttonGroup">
              <center>
                <a href="../Login - Nacario/login.php"><button type="button" class="btn btn-primary">Go Back</button></a>
                <button type="submit" class="btn btn-primary" name="reg_btn">Create An Account</button>
              </center>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
  <!-- <img class="waveDown" src="img/wavesBottom.svg" alt="wavesBottomSVG"> -->
</body>
</html>



