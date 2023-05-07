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

    $checkinRoom1 = $_POST['checkinRoom1'];
    $checkoutRoom1 = $_POST['checkoutRoom1'];
    $numAdultsRoom1 = $_POST['numAdultsRoom1'];
    $numChildrenRoom1 = $_POST['numChildrenRoom1'];
    
    $getStart = strtotime($checkinRoom1);
    $getEnd = strtotime($checkoutRoom1);

    $price = (($getEnd - $getStart)/(60 * 60 * 24))*699;

    $type = "STANDARD ROOM A";

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO booking (CUSTOMER_NAME, CUSTOMER_CONTACT_NUMBER, CUSTOMER_EMAIL, START_DATE, END_DATE, NUMBER_OF_ADULTS, NUMBER_OF_CHILDREN, TOTAL_PRICE, TYPE) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Create a prepared statement object
    $stmt = mysqli_prepare($est_conn, $sql);

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "sssssiiis", $name, $phone, $email, $checkinRoom1, $checkoutRoom1, $numAdultsRoom1, $numChildrenRoom1, $price, $type);

    // Execute the prepared statement
    mysqli_stmt_execute($stmt);

    header("Location: ../Booking Page - Balderas/booking.php");

}



?>