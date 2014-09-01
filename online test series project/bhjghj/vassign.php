<?php
include_once("db.php");
$str=mysql_query("select * from tbl_assign where s_display='1'");
?>
<table border="1" align="center" width="800px">
<tr>
<th>Sno</th>
<th>combo</th>
<th>test</th>
<th>fees</th>
<th>timing</th>
</tr>
<?php
$i=1;
while($combo_row=mysql_fetch_array($str))
{
$com_row=mysql_fetch_array(mysql_query("select s_combo from tbl_combo where s_sno='$combo_row[s_combo]'"));
	echo"<tr>";
	echo "<td>$i</td>";
	echo"<td>$com_row[s_combo]";
	echo"<td>$combo_row[s_test]";
	echo"<td>$combo_row[s_s_fees]";
	echo"<td>$combo_row[s_timing]";
	echo "<td><a href='admin1.php?value=5&edt=1&sno=$combo_row[s_sno]'>Edit</a> &nbsp;
	 			<a href='adelete.php?sno=$combo_row[s_sno]&display=$combo_row[s_display]'>Delete</a></td>";
				echo "</tr>";
				$i++;
			}
	
?>
	</table>

</body>
</html>