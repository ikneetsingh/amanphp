<?php
mysql_connect("localhost","root","root") or die("Server Failed");
mysql_select_db("db_subjects") or die("database not found");

$date=date("Y-m-d h:i:s");
?>