																																																																																																																																																																																			<?php
include_once("db.php");
$str=mysql_query("select * from tbl_menu");
?>
<table border="1" align="center" width="800px">
<tr bgcolor="lightblue">
<th>Sno</th>
<th>Menu</th>
<th>Action</th>
</tr>
<?php
$i=1;
while($menu_row=mysql_fetch_array($str))
{
	echo"<tr>";
	echo "<td>$i</td>";
	echo "<td>$menu_row[s_menu]</td>";
	echo "<td><a href='admin1.php?value=11&edt=1&sno=$menu_row[s_sno]'>edit</a>&nbsp;<a href='mdelete.php?sno=$menu_row[s_sno]'>delete</a></td>";
	echo "</tr>";
	$i++;
}
?>
	</table>
</body>
</html>