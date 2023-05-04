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

if (isset($_SESSION['EMAIL'])){

    $getEmail = mysqli_real_escape_string($est_conn, $_SESSION['EMAIL']);

    $newFname = mysqli_real_escape_string($est_conn, $_POST['newFname']);
    $newLname = mysqli_real_escape_string($est_conn, $_POST['newLname']);
    $newContactNumber = mysqli_real_escape_string($est_conn, $_POST['newContactNumber']);
    $newEmail = mysqli_real_escape_string($est_conn, $_POST['newEmail']);
    $newPassword = mysqli_real_escape_string($est_conn, $_POST['newPassword']);

    $query = "UPDATE users SET FIRST_NAME='$newFname',LAST_NAME='$newLname',EMAIL='$newEmail',PASSWORD='$newPassword',CONTACT_NUMBER='$newContactNumber' WHERE EMAIL = '$getEmail'";

    $result = mysqli_query($est_conn, $query);

    if ($result){
        header("Location: ./logout.php");
    }
}

?>