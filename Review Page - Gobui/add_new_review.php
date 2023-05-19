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

$fname = $_SESSION['FIRST_NAME'];
$lname = $_SESSION['LAST_NAME'];
$email = $_SESSION['EMAIL'];
$review = $_POST['review'];

$sql = "INSERT INTO review (FIRST_NAME, LAST_NAME, EMAIL, INPUT_REVIEWS) VALUES ('$fname','$lname','$email','$review')";

mysqli_query($est_conn, $sql);

?>