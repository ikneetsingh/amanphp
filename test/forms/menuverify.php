<?php
	include_once("db.php");
	$menu=$_REQUEST['menu'];
	if($menu=="")
	{
		header("location:admin1.php?value=11&msg=fill menu");	
	}
	else
	{
		mysql_query("insert into tbl_menu(s_menu) values('$menu')");
		header("location:admin1.php?value=11&msg=data inserted");
	}
?>