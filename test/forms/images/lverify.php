<?php
	ob_start();
	session_start();
	include_once("db.php");
	$uname=$_REQUEST['uname'];
	$upwd=$_REQUEST['upwd'];
	$str=mysql_query("select * from tbl_reg where a_uname='$uname'");
	if(mysql_num_rows($str))
	{
		$_SESSION["usrname"]=$uname;
		header("location:admin1.php?value=1&msg=Welcome $uname");
	}
	else
	{
		header("location:login.php?msg=Wrong Username or Password");
	}
?>