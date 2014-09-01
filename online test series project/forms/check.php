<?php
ob_start();
session_start();
if(!$_SESSION['usrname'])
{
	header("location:login.php?msg=Login First to access");
}
?>