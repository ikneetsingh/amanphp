<?php
	include_once("db.php");
	$combo=$_REQUEST['combo'];
	$test=$_REQUEST['test'];
	$timing=$_REQUEST['time'];
	$fees=$_REQUEST['fees'];
	$sno=$_REQUEST['sno'];
	$str=mysql_query("select * from tbl_assign where s_combo='$combo'");
		if(mysql_num_rows($str))
		{
			header("location:admin1.php?value=5,msg=allready exist");
		}
	mysql_query("update tbl_assign set s_combo='$combo',s_test='$test',s_fees='$fees',s_timing='$timing',s_modifydate='$date' where s_sno='$sno'");
	header("location:admin1.php?value=10");
?>

