<?php
	include_once("db.php");
	$subject=$_REQUEST['subject'];
	$test=$_REQUEST['test'];
	$noques=$_REQUEST['noques'];
	$level=$_REQUEST['level'];
	$timing=$_REQUEST['time'];
	$fees=$_REQUEST['fees'];
	
	if($subject=="" || $test=="" || $noques=="" || $level=="" ||$timing=="" ||$fees=="")
	{
		header("location:admin1.php?value=2&msg=plz fill all fields");
	}
	else
	{
		$str="insert into tbl_test (s_subjects,s_test,s_noques,s_level,s_timing,s_fees,s_entrydate,s_modifydate,s_display) 
		values('$subject','$test','$noques','$level','$timing','$fees','$date','$date','1')";
		$str1=mysql_query($str);
		header("location:admin1.php?value=2&msg=data inserted in database");
	}
?>