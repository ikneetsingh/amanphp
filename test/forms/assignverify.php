<?php
	include_once("db.php");
	$combo=$_REQUEST['combo'];
	
	foreach($_REQUEST['s_test'] as $test)
	{
		$tests.=$test.",";
	}
	
	
	if($combo=="" || $_REQUEST['s_test']=="")
	{
		header("location:admin1.php?value=5&msg=Select atleast one test");
	}
	else
	{
		$str="insert into tbl_assign (s_combo,s_test,s_entrydate,s_modifydate,s_display) 
		values('$combo','$tests','$date','$date','1')";
		$str1=mysql_query($str);
		$str2=mysql_fetch_array(mysql_query("select s_combo from tbl_assign where s_combo='$combo'"));
		mysql_query("update tbl_combo set s_status='1' where s_sno='$str2[s_combo]'");
		header("location:admin1.php?value=5&msg=data inserted in database");
	}
?>