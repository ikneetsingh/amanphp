<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php
	include_once("db.php");
	$str=mysql_query("select * from tbl_subjects");
	$edit=$_REQUEST['edt'];
	if($edit)
	{
	$sno=$_REQUEST['sno'];
	$str1=mysql_fetch_array(mysql_query("select * from tbl_subjects where s_sno='$sno'"));
	}
?>
</head>

<body onload="document.frm.subject.focus();">
<form method="post" name="frm" action="<?php if($edit) { echo "supdate.php"; } else { echo "subjectverify.php"; } ?>">
	<table>
		<tr>
			<td>Subjects</td>
			<td><input type="text" name="subject" value="<?php echo $str1['s_subjects']; ?>" /></td>
		</tr>
        <input type="hidden" name="sno" value="<?php echo $sno; ?>" />
		<tr>
			<td colspan="2"><input type="submit"  name="save" <?php if($edit) { ?>value="update" <?php } else { ?> value="submit" <?php }?> /><input type="reset" value="Cancel" name="cancel" /></td>
		</tr>
	</table>
</form>
</body>
</html>
