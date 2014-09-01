<?php
	include_once("db.php");
	$test=$_REQUEST['test'];
	$question=$_REQUEST['question'];
	$ans1=$_REQUEST['ans1'];
	$ans2=$_REQUEST['ans2'];
	$ans3=$_REQUEST['ans3'];
	$ans4=$_REQUEST['ans4'];
	$ans=$_REQUEST['ans'];
	$mk=$_REQUEST['mk'];
	$sno=$_REQUEST['sno'];
$str=mysql_query("select * from tbl_ques where s_test='$test'");
		if(mysql_num_rows($str))
		{
			header("location:admin1.php?value=3,msg=allready exist");
		}
		mysql_query("update tbl_ques set s_test='$test',s_question='$question',s_op1='$ans1',s_op2='$ans2',s_op3='$ans3',s_op4='$ans4',s_ans='$ans',s_marks='$mk',s_modifydate='$date' where s_sno='$sno'");
	header("location:admin1.php?value=8");
?>