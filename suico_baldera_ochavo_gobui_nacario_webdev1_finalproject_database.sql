-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 03:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suico_baldera_ochavo_gobui_nacario_webdev1_finalproject_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_t`
--

CREATE TABLE `user_t` (
  `USER_ID` int(8) NOT NULL,
  `USER_EMAIL` varchar(50) NOT NULL,
  `USER_PASSWORD` varchar(50) NOT NULL,
  `USER_REGISTERED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_t`
--

INSERT INTO `user_t` (`USER_ID`, `USER_EMAIL`, `USER_PASSWORD`, `USER_REGISTERED`) VALUES
(1, 'LorenzSuico@gmail.com', '12345', '2023-04-01 01:58:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_t`
--
ALTER TABLE `user_t`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_t`
--
ALTER TABLE `user_t`
  MODIFY `USER_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;






/////       LOGIN FORM PHP BELOW


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

if (isset($_POST["login_btn"])) {
  $username = $_POST["email"];
  $pwd = $_POST["password"];

  // Sanitize the input to prevent SQL injection
  $username = mysqli_real_escape_string($conn, $username);
  $pwd = mysqli_real_escape_string($conn, $pwd);

  // Hash the password for better security
  $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);

  // Check if the user exists in the database
  $sql = "SELECT * FROM user_t WHERE USER_EMAIL = '$username'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) === 1) {
      // Verify the password
      $row = mysqli_fetch_assoc($result);
      if (password_verify($pwd, $row['USER_PASSWORD'])) {
          $_SESSION['username'] = $username;
          header("Location: home.php");
          exit;
      } else {
          $error = "Invalid password";
      }
  } else {
      $error = "User not found";
  }
}

if (isset($_POST["reg_btn"])) {
    $username = $_POST["email"];
    $pwd = $_POST["password"];

    // Sanitize the input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $pwd = mysqli_real_escape_string($conn, $pwd);

    // Hash the password for better security
    $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);

    // Check if the user already exists in the database
    $sql = "SELECT * FROM user_t WHERE USER_EMAIL = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        // Insert the user into the database
        $sql = "INSERT INTO user_t (USER_EMAIL, USER_PASSWORD) VALUES ('$username', '$hashed_pwd')";
        mysqli_query($conn, $sql);
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit;
    } else {
        $error = "User already exists";
    }
}

mysqli_close($conn);
?>
