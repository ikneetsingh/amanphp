<?php
mysql_connect("localhost","root","root") or die("Server Failed");
mysql_select_db("db_subjects") or die("database not found");
date_default_timezone_set("Asia/Kolkata");
$date=date("Y-m-d h:i:s");
?>