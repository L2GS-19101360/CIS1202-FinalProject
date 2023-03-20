<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login or Register</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
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
      .video-background video {
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
      }

      
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
  <body>
  <div class="video-background">
  <video autoplay loop muted>
  <source src="nature.mp4" type="video/mp4">
  </video>
</div>


<div class="container mt-5 text-center">
  <div class="row align-items-center">
    <div class="col-md-6 order-2 order-md-1">
      <h1 class="mb-5">Marjhun's Apartelle</h1>
      <form action="" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">
            <i class="material-icons">person</i> Email
          </label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          <small id="emailHelp" class="form-text text-muted">I'll never share your email with anyone else. no cap</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">
            <i class="material-icons">lock</i>Password
          </label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="reg_btn">Register</button>
        <button type="submit" class="btn btn-primary mr-3" name="login_btn">Login</button>
      </form>
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



<?php
session_start();

$servername = "localhost";
$database = "valorant - konosuba";
$dbUsername = "root";
$dbPassword = "";



// Create connection
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}







if (isset($_POST["login_btn"])) {
  $username = $_POST["email"];
  $pwd = $_POST["password"];

  // Check if the user exists in the database
  $sql = "SELECT * FROM users WHERE name = '$username' AND password ='$pwd'";
  $result = mysqli_query($conn, $sql);


  if (mysqli_num_rows($result) === 1) {
      $_SESSION['username'] = $username;



      $_SESSION['password'] = $pwd;




      header("Location: dashboard.php");  // change this to the desired page
      exit;
  } else {
      $error = "Your Login Name or Password is invalid";
  }
}



if (isset($_POST["reg_btn"])) {
  
    $username = $_POST["email"];
    $pwd = $_POST["password"];

    // Check if the user already exists in the database
    $sql = "SELECT * FROM users WHERE id = '$username' AND password ='$pwd'";;
    $result = mysqli_query($conn, $sql);

    
    if (mysqli_num_rows($result) === 0) {
        // Insert the user into the database
        $sql = "INSERT INTO users (name, password) VALUES ('$username', '$pwd')";
        mysqli_query($conn, $sql);
    } else {
        $error = "User already exists";
    }
}

mysqli_close($conn);
?>
