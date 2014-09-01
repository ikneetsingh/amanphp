<?php 
session_start();
include_once("forms/db.php");
$uname=$_REQUEST['uname'];
$pwd=$_REQUEST['pwd'];
$store=mysql_query("select * from  tbl_register where username='$uname' and password='$pwd'");
if(mysql_num_rows($store))
{
	$_SESSION["usrname"]=$uname;
	header("location:test.php");
}
else{
	header("location:index.php?msg=Your username and password not match !!!!!");
}
?>