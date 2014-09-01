<?php
ob_start();
session_start();
$tst=$_REQUEST['tst'];
include_once("forms/db.php");

if($_REQUEST['ans']==1)
{
	$quesno=$_REQUEST[quesno];
	$option=$_REQUEST[option];
	$quetionresult=mysql_query("select * from tbl_ques where s_sno='$quesno'");
	$questionrow=mysql_fetch_array($quetionresult);
	
	$qvalue=$_REQUEST[qvalue];
	
	if($option==$questionrow[s_ans])
	{
		mysql_query("insert into tbl_usr_tests (ut_user,ut_test,ut_ques,ut_quans,ut_uans,ut_marks,ut_reslt) values('$_SESSION[usrname]','$tst','$quesno','$questionrow[s_ans]','$option','$qvalue','correct')");
	
		$_SESSION[totalmarks]=$_SESSION[totalmarks]+$qvalue;
		
		$_SESSION[rslt]="Correct";
//		header("location:question.php?testsub=$testsub&testsno=$tst");
	}
	else
	{
		$mks=$qvalue/4;
		mysql_query("insert into tbl_usr_tests (ut_user,ut_test,ut_ques,ut_quans,ut_uans,ut_marks,ut_reslt) values('$_SESSION[usrname]','$tst','$quesno','$questionrow[s_ans]','$option','$mks','wrong')");
	
		$_SESSION[totalmarks]=$_SESSION[totalmarks]-$mks;
	
		$_SESSION[rslt]="Wrong";
//		header("location:question.php?testsub=$testsub&testsno=$tst&tcnt=1");
	}
}
?>
<html>
<head>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="templatemo_image_fader.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
	<div class="templatemo_container">
    <?php
		include_once("header.php");
    ?>
	</div>
    <div align="left">
    <div id="queswrap">
	<div id="ques">
    	<div class="title">Question</div>
		<form method="post">
   <?php
	$m=mysql_query("select * from tbl_usr_tests where ut_user='$_SESSION[usrname]' and ut_test='$tst'");
	$m1=mysql_num_rows($m);
	
	$testresult=mysql_query("select * from tbl_test where s_sno='$tst'");
	$testrow=mysql_fetch_array($testresult);
	if($testrow['s_noques']==$m1)
	{
		if($_REQUEST['sn']==$testrow['s_noques'])
		{
			mysql_query("insert into tbl_results (rst_user,rst_test,rst_marks) values('$_SESSION[usrname]','$tst','$_SESSION[totalmarks]')");
			unset($_SESSION[totalmarks]);
			unset($_SESSION[rslt]);
			header("location:result.php?tst=$tst");
		}
		else
		{
			echo "You have already performed this test. See your ";
			echo "<a href='result.php?tst=$tst'>Result</a>";
		}
	}
	else
	{
		
		$ttlques=mysql_query("select * from tbl_ques where s_test='$tst' and s_display=1");
		$count_ques=mysql_num_rows($ttlques);
		$view=1;
		if($_REQUEST['sn'])
		$sn=$_REQUEST['sn'];
		else
		$sn=$m1;
		
		$quetionresult=mysql_query("select * from tbl_ques where s_test='$tst' limit $sn,$view");
		
		while($questionrow=mysql_fetch_array($quetionresult))
		{
			echo "<fieldset><legend>Question</legend>";
			echo $questionrow[s_question];   
			echo "</fieldset>"; 
			echo " <fieldset><legend> Options </legend>";
			echo "<table cellspacing='5'>
			<tr>
			<td style='width:20px;font-weight:bold;'>A)</td>
			<td style='width:20px;'><input type='radio' name='option' value='a'></td>
			<td>$questionrow[s_op1]</td>
			</tr>
			<tr>
			<td style='width:20px;font-weight:bold;'>B)</td>
			<td style='width:20px;'><input type='radio' name='option' value='b'></td>
			<td>$questionrow[s_op2]</td>
			</tr>
			<tr>		
			<td style='width:20px;font-weight:bold;'>C)</td>
			<td style='width:20px;'><input type='radio' name='option' value='c'></td>
			<td>$questionrow[s_op3]</td>
			</tr>
			<tr>
			<td style='width:20px;font-weight:bold;'>D)</td>
			<td style='width:20px;'><input type='radio' name='option' value='d'></td>
			<td>$questionrow[s_op4]</td>
			<td><input type='hidden' name='tst' value='$tst'></td>
			<td><input type='hidden' name='qvalue' value='$questionrow[s_marks]'></td>
			</tr>
			</table>
			</fieldset>";
			$sn++;
			echo "<input type='submit' name='submit' value='Next' formaction='test_ques.php?sn=$sn&ans=1'>";
			echo "<input type='hidden' name='quesno' value='$questionrow[s_sno]'>";
		}
	}
   ?>
   </form>

       <?php
/*		$str=mysql_query("select * from tbl_ques where s_test='$tst'");
		$sr=1;
		while($x2=mysql_fetch_array($str))
       	{
			echo "$sr. $x2[s_question]";
			echo "<br>";
			echo"<input type='radio' name='ans' value='$x2[s_op1]'>$x2[s_op1]<br>";
			echo"<input type='radio' name='ans' value='$x2[s_op2]'>$x2[s_op2]<br>";
			echo"<input type='radio' name='ans' value='$x2[s_op3]'>$x2[s_op3]<br>";
			echo"<input type='radio' name='ans' value='$x2[s_op4]'>$x2[s_op4]<br>";
		 	echo"<br>";
			$sr++;
	  	} */
		?>
	</div>
	</div>
   <div id="resultwrap" style="width:20%;">
   <div id="result">
   <div class="title" style="">Test Evaluation</div>
      <table>
      <tr>
      <th>Total Question : </th><td><?php echo $testrow[s_noques]; ?></td>
      </tr>
      <tr>
      <th>Marks : </th><td><?php echo $_SESSION[totalmarks]; ?></td>
      </tr>
      <tr>
      <th>Questions attempt :</th><td><?php echo $m1; ?></td>
      </tr>
      <tr>
      <th>Last Answer:</th>
      <td><?php echo $_SESSION[rslt]; ?></td>
      </tr>
      </table>
   </div>
   </div>
   </div>
</body>
</html>