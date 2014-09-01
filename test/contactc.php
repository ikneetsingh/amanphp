<?php 
session_start();
include_once("forms/db.php");
$fname=$_REQUEST['name'];
$lname=$_REQUEST['company'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$address=$_REQUEST['message'];
mysql_query("insert into tbl_contact 
values('','$fname','$lname','$email','$phone','$address')");
header("location:contactus.php?message='You are registered'");
?>