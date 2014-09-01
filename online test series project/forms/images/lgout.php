<?php
ob_start();
session_start();
session_destroy();
header("location:login.php?msg=You have successfully Logged Out.");
?>