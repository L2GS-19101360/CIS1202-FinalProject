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

if (isset($_POST['submit'])){

    $name = $_SESSION['LAST_NAME'].", ".$_SESSION['FIRST_NAME'];
    $phone = $_SESSION['CONTACT_NUMBER'];
    $email = $_SESSION['EMAIL'];

    $checkinRoom6 = $_POST['checkinRoom6'];
    $checkoutRoom6 = $_POST['checkoutRoom6'];
    $numAdultsRoom6 = $_POST['numAdultsRoom6'];
    $numChildrenRoom6 = $_POST['numChildrenRoom6'];
    
    $getStart = strtotime($checkinRoom6);
    $getEnd = strtotime($checkoutRoom6);

    $price = (($getEnd - $getStart)/(60 * 60 * 24))*1200;

    $type = "SEMI-FURNISHED ROOM";

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO booking (CUSTOMER_NAME, CUSTOMER_CONTACT_NUMBER, CUSTOMER_EMAIL, START_DATE, END_DATE, NUMBER_OF_ADULTS, NUMBER_OF_CHILDREN, TOTAL_PRICE, TYPE) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Create a prepared statement object
    $stmt = mysqli_prepare($est_conn, $sql);

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "sssssiiis", $name, $phone, $email, $checkinRoom6, $checkoutRoom6, $numAdultsRoom6, $numChildrenRoom6, $price, $type);

    // Execute the prepared statement
    mysqli_stmt_execute($stmt);

    header("Location: ../Booking Page - Balderas/booking.php");

}



?>