<?php
	include_once("db.php");
	
	$sno=$_REQUEST['sno'];
	mysql_query("delete from tbl_menu where s_sno='$sno'");
	header("location:admin1.php?value=12");
?>