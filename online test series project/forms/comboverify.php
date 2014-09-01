<?php
	include_once("db.php");
	$combo=$_REQUEST['combo'];
	foreach($_REQUEST['subs'] as $a)
	{
	$x.=$a.",";
	}
	if($combo=="" || $subs=="")
	{
		header("location:admin1.php?value=4&msg=plz fill all fields");
	}
	else
	{
		$str=mysql_query("insert into tbl_combo
		(s_combo,s_nosub,s_entrydate,s_modifydate,s_display,s_status) 
		values('$combo','$x','$date','$date','1','0')");
		header("location:admin1.php?value=4&msg=data inserted in database");
		}
?>