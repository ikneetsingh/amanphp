<?php
	include_once("db.php");
	$str=mysql_query("select * from tbl_menu");
	$edit=$_REQUEST['edt'];
	if($edit)
	{
	$sno=$_REQUEST['sno'];
	$str1=mysql_fetch_array(mysql_query("select * from tbl_menu where s_sno='$sno'"));
	}
?>
<body onload="document.frm.menu.focus();">
<form method="post" name="frm" action="<?php if($edit) { echo "mupdate.php"; } else { echo "menuverify.php"; } ?>">
	<table>
		<tr>
			<td>Menu</td>
			<td><input type="text" name="menu" value="<?php echo $str1['s_menu']; ?>"  /></td>
		</tr>
        <input type="hidden" name="sno" value="<?php echo $sno; ?>" />
		<tr>
			<td colspan="2"><input type="submit"  name="save" <?php if($edit) { ?>value="update" <?php } else { ?> value="submit" <?php }?> />
            <input type="reset" value="Cancel" name="cancel" /></td>
		</tr>
	</table>
</form>
</body>