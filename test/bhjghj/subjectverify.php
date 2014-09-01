<?php
	include_once("db.php");
	$subject=$_REQUEST['subject'];
	if($subject=="")
	{
		header("location:admin1.php?value=1&msg=fill subjects");
	}
	else
	{
		$str=mysql_query("select * from tbl_subjects where s_subjects='$subject'");
		if(mysql_num_rows($str))
		{
			header("location:admin1.php?value=1&msg=allready exist");
		}
		else
		{
			
			$str=mysql_query("insert into tbl_subjects (s_subjects,s_entrydate,s_modifydate,s_display) values('$subject','$date','$date','1')");
			header("location:admin1.php?value=1&msg=subjects inserted in database");
		}
	}
?>