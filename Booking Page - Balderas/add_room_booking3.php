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

    $checkinRoom3 = $_POST['checkinRoom3'];
    $checkoutRoom3 = $_POST['checkoutRoom3'];
    $numAdultsRoom3 = $_POST['numAdultsRoom3'];
    $numChildrenRoom3 = $_POST['numChildrenRoom3'];
    
    $getStart = strtotime($checkinRoom3);
    $getEnd = strtotime($checkoutRoom3);

    $price = (($getEnd - $getStart)/(60 * 60 * 24))*1110;

    $type = "DELUX ROOM A";

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO booking (CUSTOMER_NAME, CUSTOMER_CONTACT_NUMBER, CUSTOMER_EMAIL, START_DATE, END_DATE, NUMBER_OF_ADULTS, NUMBER_OF_CHILDREN, TOTAL_PRICE, TYPE) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Create a prepared statement object
    $stmt = mysqli_prepare($est_conn, $sql);

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "sssssiiis", $name, $phone, $email, $checkinRoom3, $checkoutRoom3, $numAdultsRoom3, $numChildrenRoom3, $price, $type);

    // Execute the prepared statement
    mysqli_stmt_execute($stmt);

    header("Location: ../Booking Page - Balderas/booking.php");

}



?>