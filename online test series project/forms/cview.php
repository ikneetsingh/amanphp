																																																																																																																																																																																			<?php
include_once("db.php");
$str=mysql_query("select * from tbl_combo where s_display='1'");
?>
<table border="1" align="center" width="800px">
<tr bgcolor="lightblue">
<th>Sno</th>
<th>combo name</th>
<th>no.of subjects</th>
<th>Action</th>
</tr>
<?php
$i=1;
while($combo_row=mysql_fetch_array($str))
{
	echo"<tr>";
	echo "<td>$i</td>";
	echo"<td>$combo_row[s_combo]</td>";
	echo "<td>";
	
	$x=explode(",",$combo_row[s_nosub]);
	for($i=0;$i<count($x)-1;$i++)
	{
		$str1=mysql_fetch_array(mysql_query("select * from tbl_subjects where s_sno='$x[$i]'"));
		
		echo "$str1[s_subjects]";
		echo ",";
	}

	echo "</td>";
	echo "<td><a href='admin1.php?value=4&edt=1&sno=$combo_row[s_sno]'>Edit</a> &nbsp;
	 			<a href='cdelete.php?sno=$combo_row[s_sno]&display=$combo_row[s_display]'>Delete</a></td>";
				echo "</tr>";
				$i++;
			}
	
?>
	</table>

</body>
</html>