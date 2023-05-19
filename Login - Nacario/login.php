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

$err_msg = "";

if (isset($_POST['login_btn'])){
  // print_r($_POST);

  $email = mysqli_real_escape_string($est_conn, $_POST['email']);
  $password = mysqli_real_escape_string($est_conn, $_POST['password']);

  $query = "SELECT * FROM users WHERE EMAIL = '$email' AND PASSWORD = '$password'";
  

  $sql = mysqli_query($est_conn, $query);

  $num = mysqli_num_rows($sql);

  if ($num > 0){
    // echo "Yes";
    $row = mysqli_fetch_assoc($sql);
    $_SESSION['ID'] = $row['ID'];
    $_SESSION['FIRST_NAME'] = $row['FIRST_NAME'];
    $_SESSION['LAST_NAME'] = $row['LAST_NAME'];
    $_SESSION['CONTACT_NUMBER'] = $row['CONTACT_NUMBER'];
    $_SESSION['EMAIL'] = $row['EMAIL'];
    $_SESSION['PASSWORD'] = $row['PASSWORD'];

    header("Location: ../Main Page - Suico/main_page.php");
    // exit(); // Add this line to prevent further execution of the script
  }
  else{
    // echo "No";
    $err_msg = "Invalid Email and Password";
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login or Register</title>
    <link rel="shortcut icon" href="./website_favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-qxvlv8l1KzRLg5o5X5oVJnEmiWb7D1ZZ0nGYgwukH0Qc8ThF7Z1g0KXzUy/6p/1SSwVTusY+tB0iLxshO/zG0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      .video-background {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        overflow: hidden;
        z-index: -100;
      }
      /* .video-background video {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -100;
        -ms-transform: translateX(-50%) translateY(-50%);
        -moz-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        background-size: cover;
      } */

      
      .container {
  position: relative;
  margin-top: 100px;
  z-index: 1;
  background-color: rgba(255, 255, 255, 0.5);
  padding-right: 0;
  border-radius: 20px;
}



      
  input[type="email"], input[type="password"] {
  width: 70%;
  height: 45px;
  border-radius: 20px;
  padding: 10px;
  margin: 0 auto; 
}.form-group {
  margin-bottom: 20px; 
}

button {
  font-size: 24px;
  width: 300px;
  padding: 15px 30px;
  margin-right: 10px;
}


h1 {
  font-family: "Edwardian Script ITC", cursive;
  font-size: 5em;
}

img {
  
  border-radius: 10px;
}
</style>


  </head>
  <body style="background-color: rgb(255, 190, 70);">
  <!-- <div class="video-background">
  <video autoplay loop muted>
  <source src="nature.mp4" type="video/mp4">
  </video>
</div> -->


<div class="container mt-5 text-center">
  <div class="row align-items-center">
    <div class="col-md-6 order-2 order-md-1">
      <h1 class="mb-5">Marjhun's Apartelle</h1>
      
      <form action="login.php" method="POST">

        <div class="form-group">
          <label for="email">
            <i class="material-icons">person</i> Email
          </label>

          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter User Email" require = "">
        </div>

        <div class="form-group">
          <label for="password">
            <i class="material-icons">lock</i>Password
          </label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter User Password" require = "">
        </div>
        <br>

        <button type="submit" class="btn btn-primary mr-3" name="login_btn">Login</button>

      </form>
      <br>
      <a href="../Registration Page/Register.php"><button class="btn btn-primary" name="reg_btn" style="text-decoration: none;">Register</button></a>

    <br><br>
    <div class="error">
      <h3 style="background-color: red;
                 color: white;"><?php echo $err_msg ?></h3>  
    </div>

    </div>
    <div class="col-md-6 order-1 order-md-2">
      <div class="d-flex justify-content-center align-items-center h-100">
        <img src="newton.png" alt="your-image-alt" class="img-fluid">
      </div>
    </div>
  </div>
</div>

  </body>
</html>

