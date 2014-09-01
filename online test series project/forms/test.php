<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	include_once("db.php");
	$str=mysql_query("select * from tbl_subjects where s_display='1'");
	$edit=$_REQUEST['edt'];
	
	if($edit)
	{
	$sno=$_REQUEST['sno'];
	$str1=mysql_fetch_array(mysql_query("select * from tbl_test where s_sno='$sno'"));
	}

?>
<body>
<form action="<?php if($edit) { echo "tupdate.php"; } else { echo "testverify.php"; } ?>" method="post" name="frm">
<table>
<tr><td>subjects</td><td><select name="subject">
<?php
	$sub=mysql_fetch_array(mysql_query("select * from tbl_subjects where s_sno='$str1[s_subjects]'"));
?>
<option disabled="disabled" selected="selected" value="">--select--</option>
                <?php 
						while($row=mysql_fetch_array($str))
						{
							echo "<option value='$row[s_sno]'";
							if($sub['s_subjects']==$row['s_subjects'])
								echo "selected=selected";
								echo ">$row[s_subjects]</option>";
						}
				?>
</select></td></tr>
 <tr>
        	<td>Test</td>
            <td><input type="text" name="test" value="<?php echo $str1['s_test']; ?>" /></td>
        </tr>
        <tr>
        	<td>No of questions</td>
            <td><input type="text" name="noques" value="<?php echo $str1['s_noques']; ?>"/></td>
        </tr>
        <tr>
        	<td>level</td>
            <td>easy<INPUT Type="radio" name="level" value="easy">
 medium<INPUT Type="radio" name="level" value="medium">
hard<INPUT Type="radio" name="level" value="hard"></td>
        </tr>
        <tr>
        	<td>Timing</td>
            <td><input type="text" name="time" value="<?php echo $str1['s_timing']; ?>"/></td>
        </tr>
        <tr>
        	<td>Fees</td>
            <td><input type="text" name="fees" value="<?php echo $str1['s_fees']; ?>"/></td>
        </tr>
		<input type="hidden" name="sno" value="<?php echo $sno; ?>" />
<tr><td colspan="2"><input type="submit"  name="save" <?php if($edit) { ?>value="update" <?php } else { ?> value="submit" <?php }?> /></td></tr>
</table>
</body>
</html>