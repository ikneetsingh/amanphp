<?php
	include_once("db.php");
	$name=$_REQUEST['subject'];
	$sno=$_REQUEST['sno'];
	$str=mysql_query("select * from tbl_subjects where s_subjects='$name'");
		if(mysql_num_rows($str))
		{
			header("location:admin1.php?value=1,msg=allready exist");
		}
	mysql_query("update tbl_subjects set s_subjects='$name',s_modifydate='$date' where s_sno='$sno'");
	header("location:admin1.php?value=6");
?>

