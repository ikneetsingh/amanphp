<?php
	include_once("db.php");
	$val=$_REQUEST['val'];	//cat variable
	$str=mysql_fetch_array(mysql_query("select * from tbl_combo where s_sno='$val'"));
	$subs=substr($str[s_nosub],0,-1);
	$x=explode(",",$subs);
	foreach($x as $v)
	{
		$str1=mysql_fetch_array(mysql_query("select * from tbl_subjects where s_sno='$v'"));
		?>
		<div class="sub_head">
			<?php echo "$str1[s_subjects]"; ?>
		</div>
		<?php
		$str_test=mysql_query("select * from tbl_test where s_subjects='$v' and s_display='1'");
		while($row_test=mysql_fetch_array($str_test))
		{
			?>
			<div class="sub_test">
			<input type="checkbox" name="s_test[]" value="<?php echo $row_test['s_sno']; ?>" /><?php echo $row_test['s_test']; ?><hr />
			</div>
			
			<?php
		}
	}
?>
