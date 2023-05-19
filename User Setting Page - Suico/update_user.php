<?php

session_start();

$serverName = "localhost:3307";
$username = "root";
$passWord = "";
$databaseName = "apartelle_group1_db";

$est_conn = mysqli_connect($serverName, $username, $passWord, $databaseName);

if (isset($_SESSION['EMAIL'])) {

    $getEmail = mysqli_real_escape_string($est_conn, $_SESSION['EMAIL']);

    $newFname = mysqli_real_escape_string($est_conn, $_POST['newFname']);
    $newLname = mysqli_real_escape_string($est_conn, $_POST['newLname']);
    $newContactNumber = mysqli_real_escape_string($est_conn, $_POST['newContactNumber']);
    $newEmail = mysqli_real_escape_string($est_conn, $_POST['newEmail']);
    $newPassword = mysqli_real_escape_string($est_conn, $_POST['newPassword']);

    // Check if any input has changed
    if ($newFname !== $_SESSION['FIRST_NAME'] ||
        $newLname !== $_SESSION['LAST_NAME'] ||
        $newContactNumber !== $_SESSION['CONTACT_NUMBER'] ||
        $newEmail !== $_SESSION['EMAIL'] ||
        $newPassword !== $_SESSION['PASSWORD']) {

        $query = "UPDATE users SET FIRST_NAME='$newFname',LAST_NAME='$newLname',EMAIL='$newEmail',PASSWORD='$newPassword',CONTACT_NUMBER='$newContactNumber' WHERE EMAIL = '$getEmail'";

        $result = mysqli_query($est_conn, $query);

        if ($result) {
            header("Location: ./logout.php");
            exit();
        } else {
            // echo "Update failed. Please try again.";
        }
    } else {
        // echo "No changes were made.";
        header("Location: ./user_setting_page.php");
    }
}

?>
