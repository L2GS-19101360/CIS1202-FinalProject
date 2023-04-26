<?php

session_start();
unset($_SESSION['ID']);
unset($_SESSION['FIRST_NAME']);
unset($_SESSION['LAST_NAME']);
unset($_SESSION['CONTACT_NUMBER']);
unset($_SESSION['EMAIL']);
unset($_SESSION['PASSWORD']);
header("Location: ../index.php");
die();

?>
