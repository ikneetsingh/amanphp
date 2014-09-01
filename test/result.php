<?php
session_start();
?>
<html>
<head>
<title>Online Test</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

      <div class="templatemo_container">
     <?php 
	 
	  include_once("header.php");
	  ?>
      </div>
      <?php
	 include_once("forms/db.php");
	 $user=mysql_fetch_array(mysql_query("select * from tbl_register where username='$_SESSION[usrname]'"));
	 $rslt=mysql_fetch_array(mysql_query("select * from tbl_results where rst_user='$_SESSION[usrname]' and rst_test='$_REQUEST[tst]'"));
	 $test_det=mysql_fetch_array(mysql_query("select * from tbl_test where s_sno='$_REQUEST[tst]'"));
	 
	  ?>

   <center> <div id="tr" style="width:700px; border:solid #EAEAEA; margin-bottom:30px;" >
     <div class="title" style="width:700px; background-color:#eaeaea; padding-top:10px; height:30px; font-size:24px; color:#600; font-family:'Times New Roman', Times, serif;"><b>Test Result</b></div>
   <table width="690px" border="1" cellpadding="10" cellspacing="10">
   <tr>
   	<td>Name: </td><td><?php echo $user['uname']; ?></td>
   </tr>
   <tr>
   	<td>Gender: </td><td><?php echo $user['gender']; ?></td>
   </tr>
   <tr>
   <?php
   	$sub=mysql_fetch_array(mysql_query("select s_subjects from tbl_subjects where s_sno='$test_det[s_subjects]'"));
	?>
   	<td>Subject: </td><td><?php echo $sub['s_subjects']; ?></td>
   </tr>
   <tr>
   	<td>Test: </td><td><?php echo $test_det['s_test']; ?></td>
   </tr>
   <tr>
   	<td>No.of Questions: </td><td><?php echo $test_det['s_noques']; ?></td>
   </tr>
   <tr>
   	<td>Result: </td><td><?php echo $rslt['rst_marks']; ?></td>
   </tr>
   </table>
</div></center>

<div id="footerwrap">
        <?php
		include_once("footer.php");
		?>
</div>

  
</body>
</html>