<?php
ob_start();
session_start();
$usersno=$_REQUEST['uname'];

$_SESSION[sno]=$usersno;
if($_SESSION[sno])
{
	header("location:test.php?usersno=$usersno");
}
else
{
	header("location:register.php");
}
?>