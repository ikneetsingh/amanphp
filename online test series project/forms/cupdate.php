<?php
	include_once("db.php");
	$combo=$_REQUEST['combo'];
	foreach($_REQUEST['subs'] as $a)
	{
	$x.=$a.",";
	}
	$sno=$_REQUEST['sno'];
$str=mysql_query("select * from tbl_combo where s_combo='$combo'");
		if(mysql_num_rows($str))
		{
			header("location:admin1.php?value=4,msg=allready exist");
		}
		mysql_query("update tbl_combo set s_combo='$combo',s_nosub='$x',s_modifydate='$date' where s_sno='$sno'");
	header("location:admin1.php?value=9");
?>