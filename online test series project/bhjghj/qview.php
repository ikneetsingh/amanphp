<?php
include_once("db.php");
$str=mysql_query("select * from tbl_ques where s_display='1'");
?>
<table border="1" align="center" width="800px">
<tr bgcolor="lightblue">
<th>Sno</th>
<th>test</th>
<th>question</th>
<th>option1</th>
<th>option2</th>
<th>option3</th>
<th>option4</th>
<th>answer</th>
<th>marks</th>
<th>Action</th>
</tr>
<?php
$i=1;
while($ques_row=mysql_fetch_array($str))
{
	$tes_row=mysql_fetch_array(mysql_query("select s_test from tbl_test where s_sno='$ques_row[s_test]'"));
	echo"<tr>";
	echo "<td>$i</td>";
	echo"<td>$tes_row[s_test]";
	echo"<td>$ques_row[s_question]";
	echo"<td>$ques_row[s_op1]";
	echo"<td>$ques_row[s_op2]";
	echo"<td>$ques_row[s_op3]";
	echo"<td>$ques_row[s_op4]";
	echo"<td>$ques_row[s_ans]";
	echo"<td>$ques_row[s_marks]";
	echo "<td><a href='admin1.php?value=3&edt=1&sno=$ques_row[s_sno]'>Edit</a> &nbsp;
	 			<a href='qdelete.php?sno=$ques_row[s_sno]&display=$ques_row[s_display]'>Delete</a></td>";
				echo "</tr>";
				$i++;
			}
	
?>
	</table>

</body>
</html>