<?php 
include_once("forms/db.php");
$name=$_REQUEST['name1']." ".$_REQUEST['name2'];
$gen=$_REQUEST['sgen'];
$dob=$_REQUEST['day']."-".$_REQUEST['month']."-".$_REQUEST['year'];
$uname=$_REQUEST['uname'];
$paswd=$_REQUEST['pwd'];
$paswd1=$_REQUEST['paswd1'];
$sques=$_REQUEST['sques'];
$ans=$_REQUEST['ans'];

if($paswd==$paswd1){
	mysql_query("insert into tbl_register(uname,gender,dob,username,password,squestion,answer) values('$name','$gen','$dob','$uname','$paswd','$sques','$ans')");
	header("location:register.php?msg=You are registered Successfully!!!!!");
}
else{
	header("location:register.php?msg=Password Mismatch");
}
?>