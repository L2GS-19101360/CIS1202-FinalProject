<?php

session_start();

$serverName = "localhost";
$username = "root";
$passWord = "";
$databaseName = "suico_baldera_ochavo_gobui_nacario_webdev1_finalproject_database";

$est_conn = mysqli_connect($serverName, $username, $passWord, $databaseName);

// if (!$est_conn){
//     echo "No";
// }
// echo "Yes";

if (isset($_POST['submit'])){

    $name = $_SESSION['LAST_NAME'].", ".$_SESSION['FIRST_NAME'];
    $phone = $_SESSION['CONTACT_NUMBER'];
    $email = $_SESSION['EMAIL'];

    $checkinRoom2 = $_POST['checkinRoom2'];
    $checkoutRoom2 = $_POST['checkoutRoom2'];
    $numAdultsRoom2 = $_POST['numAdultsRoom2'];
    $numChildrenRoom2 = $_POST['numChildrenRoom2'];
    
    $getStart = strtotime($checkinRoom2);
    $getEnd = strtotime($checkoutRoom2);

    $price = (($getEnd - $getStart)/(60 * 60 * 24))*599;

    $type = "STANDARD ROOM B";

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO booking (CUSTOMER_NAME, CUSTOMER_CONTACT_NUMBER, CUSTOMER_EMAIL, START_DATE, END_DATE, NUMBER_OF_ADULTS, NUMBER_OF_CHILDREN, TOTAL_PRICE, TYPE) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Create a prepared statement object
    $stmt = mysqli_prepare($est_conn, $sql);

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "sssssiiis", $name, $phone, $email, $checkinRoom2, $checkoutRoom2, $numAdultsRoom2, $numChildrenRoom2, $price, $type);

    // Execute the prepared statement
    mysqli_stmt_execute($stmt);

    header("Location: ../Booking Page - Balderas/booking.php");

}



?>