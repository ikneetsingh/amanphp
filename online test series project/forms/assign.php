<?php
	include_once("db.php");
	$str=mysql_query("select * from tbl_combo where s_display='1' and s_status='0'");
	$edit=$_REQUEST['edt'];
	if($edit)
	{
	$sno=$_REQUEST['sno'];
	$str1=mysql_fetch_array(mysql_query("select * from tbl_assign where s_sno='$sno'"));
	}
?>
<form action="<?php if($edit) { echo "assignupdate.php"; } else { echo "assignverify.php"; }?>" method="post" name="frm">
<table cellpadding="5" cellspacing="5">
<tr>
    <td>Combo</td>
    <td>
        <select name="combo" onchange="ajaxfunc(this.value);">
        <?php
			$com=mysql_fetch_array(mysql_query("select * from tbl_combo where s_sno='$str1[s_combo]'"));
		?>
			<option disabled="disabled" selected="selected" value="">--select--</option>
                <?php 
						while($row=mysql_fetch_array($str))
						{
							echo "<option value='$row[s_sno]'";
							if($com['s_combo']==$row['s_combo'])
								echo "selected=selected";
								echo ">$row[s_combo]</option>";
						}
				?>
       
        <?php 
        while($row=mysql_fetch_array($str))
        {
            echo "<option value='$row[s_sno]'>$row[s_combo]</option>";
        }
        ?>
	    </select>
    </td>
</tr>
<tr>
<td colspan="2"><div id="ajax"></div></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" value="Submit" /><input type="reset" value="Cancel" /></td>
</tr>
</table>
</form>