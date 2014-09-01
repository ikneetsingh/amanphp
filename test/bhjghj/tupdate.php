<?php
	include_once("db.php");
	$subject=$_REQUEST['subject'];
	$test=$_REQUEST['test'];
	$noques=$_REQUEST['noques'];
	$level=$_REQUEST['level'];
	$timing=$_REQUEST['time'];
	$fees=$_REQUEST['fees'];
	$sno=$_REQUEST['sno'];
	$str=mysql_query("select * from tbl_test where s_subjects='$subject'");
		if(mysql_num_rows($str))
		{
			header("location:admin1.php?value=2,msg=allready exist");
		}
	mysql_query("update tbl_test set s_subjects='$subject',s_test='$test',s_noques='$noques',s_level='$level',s_timing='$timing',s_fees='$fees',s_modifydate='$date' where s_sno='$sno'");
	header("location:admin1.php?value=7");
?>

