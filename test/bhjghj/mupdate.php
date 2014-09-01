<?php
	include_once("db.php");
	$name=$_REQUEST['menu'];
	$sno=$_REQUEST['sno'];
	$str=mysql_query("select * from tbl_menu where s_menu='$name'");
		if(mysql_num_rows($str))
		{
			header("location:admin1.php?value=1,msg=allready exist");
		}
	mysql_query("update tbl_menu set s_menu='$name' where s_sno='$sno'");
	header("location:admin1.php?value=12");
?>

