<?php
include_once("db.php");
$c_sno=$_REQUEST['c_sno'];
mysql_query("delete from tbl_contact where c_sno='$c_sno'");
header("location:admin1.php?value=11");
?>