<?php
ob_start();
session_start();
$sub_sn=$_REQUEST['sub_sn'];
$lvl=$_REQUEST['lvl'];
?>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="templatemo_image_fader.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<body>
<div class="templatemo_container">
<?php
		include_once("header.php");
		include_once("forms/db.php");
?>
</div>
   <center> <div id="tr" style="width:700px; border:solid #EAEAEA; margin-bottom:30px;" >
     <div class="title" style="width:700px; background-color:#eaeaea; padding-top:10px; height:30px; font-size:24px; color:#600; font-family:'Times New Roman', Times, serif;"><b>Select Test</b></div>
	 <table width="670px" cellpadding="5" cellspacing="5">
	 <?php
		$str_tests=mysql_query("select * from tbl_test where s_subjects='$sub_sn' and s_level='$lvl'");
		$x=1;
		while($row_tests=mysql_fetch_array($str_tests))
		{
			echo "<tr";
			if($x%2==0)
			echo " style='background-color:#CCC'";
			echo ">";
			echo "<td><a href='test_ques.php?tst=$row_tests[s_sno]' style='text-decoration:none; color:#FF8E01; font-weight:bold;'>".ucfirst($row_tests[s_test])."</a></td>";
			echo "</tr>";
			$x++;
		}
	?>
	</table>
	</div></center>
<?php
include_once("footer.php");
?>
</body>