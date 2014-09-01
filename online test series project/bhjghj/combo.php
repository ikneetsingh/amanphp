<?php
include_once("db.php");

	$edit=$_REQUEST['edt'];
	if($edit)
	{
	$sno=$_REQUEST['sno'];
	$str1=mysql_fetch_array(mysql_query("select * from tbl_combo where s_sno='$sno'"));
	}
?>
<body>
<form action="<?php if($edit) { echo "cupdate.php"; } else { echo "comboverify.php"; } ?>" method="post" name="frm">
<table>
<tr>
<td>combo</td>
<td><input type="text" name="combo" value="<?php echo $str1['s_combo']; ?>" /></td></tr>
<tr>
<td>nosub:</td>
<td>
<?php
	$str_subs=mysql_query("select * from tbl_subjects where s_display='1'");
	while($row_subs=mysql_fetch_array($str_subs))
	{
	?>
		<input type="checkbox" name="subs[]" value="<?php echo $row_subs['s_sno']; ?>"><?php echo $row_subs['s_subjects']; ?>&nbsp;
	<?php
	}
/*$str_subs=mysql_fetch_array(mysql_query("select count(*) as totl_subs from tbl_subjects")); 
for($i=1;$i<=$str_subs[totl_subs];$i++)
{
 	echo "value=$i";
}*/
?></td></tr> 
<input type="hidden" name="sno" value="<?php echo $sno; ?>" />
<tr><td colspan="2"><input type="submit"  name="save" <?php if($edit) { ?>value="update" <?php } else { ?> value="submit" <?php }?> /></td></tr>
</table>
</body>
</html>