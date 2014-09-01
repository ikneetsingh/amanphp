<?php
	include_once("db.php");
	$str=mysql_query("select * from tbl_test where s_display='1'");
	$edit=$_REQUEST['edt'];
	if($edit)
	{
	$sno=$_REQUEST['sno'];
	$str1=mysql_fetch_array(mysql_query("select * from tbl_ques where s_sno='$sno'"));
	}

?>
<body>
<form action="<?php if($edit) { echo "qupdate.php"; } else { echo "quesverify.php"; } ?>" method="post" name="frm">
<table>
<tr><td>Test</td>
<td>
<select name="test">
<?php
	$test=mysql_fetch_array(mysql_query("select * from tbl_test where s_sno='$str1[s_test]'"));
?>
<option disabled="disabled" selected="selected" value="">--select--</option>
                <?php 
						while($row=mysql_fetch_array($str))
						{
							echo "<option value='$row[s_sno]'";
							if($test['s_test']==$row['s_test'])
								echo "selected=selected";
								echo ">$row[s_test]</option>";
						}
				?>


<?php 
while($row=mysql_fetch_array($str))
{
	echo "<option value='$row[s_sno]'>$row[s_test]-$row[s_level]</option>";
}
?>
</select></td></tr>
<tr>
<td>
question</td>
            <td><input type="text" name="question" value="<?php echo $str1['s_question']; ?>" /></td>
        </tr>
<tr>
<td>
answer</td>
            <td>1<input type="text" name="ans1" value="<?php echo $str1['s_op1']; ?>"/></td>
        </tr>
<tr>
<td>
answer</td>
            <td>2<input type="text" name="ans2" value="<?php echo $str1['s_op2']; ?>"/></td>
        </tr>
<tr>
<td>
answer</td>
            <td>3<input type="text" name="ans3"  value="<?php echo $str1['s_op3']; ?>"/></td>
        </tr>
<tr>
<td>
answer</td>
            <td>4<input type="text" name="ans4"  value="<?php echo $str1['s_op4']; ?>"/></td>
        </tr>
<tr>
        	<td>answer</td>
            <td>A<INPUT Type="radio" name="ans" value="a">
B<INPUT Type="radio" name="ans" value="b">
C<INPUT Type="radio" name="ans" value="c">
D<INPUT Type="radio" name="ans" value="d"></td>
        </tr>
<tr>
<td>Marks:<SELECT Name="mk"  value="<?php echo $str1['s_marks']; ?>"> 
<?php 
for($i=1;$i<=5;$i++)
{
 	echo "<option>$i</option>";
}?></SELECT></td></tr> 
<input type="hidden" name="sno" value="<?php echo $sno; ?>" />
<tr><td colspan="2"><input type="submit"  name="save" <?php if($edit) { ?>value="update" <?php } else { ?> value="submit" <?php }?> /></td></tr>
</table>
</form>
</body>
</html>
