<?php
	include_once("db.php");
	$str1=mysql_query("select * from tbl_ques");
	
	$sno=$_REQUEST['sno'];
	$display=$_REQUEST['display'];
	if($display=="0"){ $display="1";}
	else if($display=="1"){ $display="0";}
	mysql_query("update tbl_ques set
	s_display='$display' where s_sno='$sno'");
	header("location:admin1.php?value=8");
?>