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
	
if($test=="" || $question=="" || $ans1=="" || $ans2=="" || $ans3=="" || $ans4=="" || $ans=="" || $mk=="")
	{
		header("location:admin1.php?value=3&msg=plz fill all fields");
	}
	else
	{
		$str=mysql_query("insert into tbl_ques(s_sno,s_test,s_question,s_op1,s_op2,s_op3,s_op4,s_ans,s_marks,s_entrydate,s_modifydate,s_display) 
		values('','$test','$question','$ans1','$ans2','$ans3','$ans4','$ans','$mk','$date','$date','1')");
		$str1=mysql_query($str);
		header("location:admin1.php?value=3&msg=data inserted in database");
	}
?>