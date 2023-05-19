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

if (isset($_POST['id'])){

    $id = $_POST['id'];
    $query = "SELECT STATUS FROM booking WHERE ID = '$id'";
    $result = mysqli_query($est_conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $status = $row['STATUS'];

        if ($status == 'PENDING') {
            // $cancel = "UPDATE booking SET STATUS='CANCEL' WHERE ID = $id";
            $deleteBook = "DELETE FROM `booking` WHERE ID = $id";
            mysqli_query($est_conn, $deleteBook);
        }
    }
}

?>