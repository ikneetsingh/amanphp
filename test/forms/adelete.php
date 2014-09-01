<?php
	include_once("db.php");
	$str1=mysql_query("select * from tbl_assign");
	
	$sno=$_REQUEST['sno'];
	$display=$_REQUEST['display'];
	if($display=="0"){ $display="1";}
	else if($display=="1"){ $display="0";}
	$str3=mysql_fetch_array(mysql_query("select s_combo from tbl_assign where s_sno='$sno'"));
	mysql_query("update tbl_assign set
	s_display='$display' where s_sno='$sno'");

	mysql_query("update tbl_combo set s_status='0' where s_sno='$str3[s_combo]'");
	header("location:admin1.php?value=10");
?>