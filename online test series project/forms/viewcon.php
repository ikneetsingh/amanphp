<?php
include_once("db.php");
$str1=mysql_query("select * from tbl_contact");
?>
<table border="1" align="center" width="800px">
<tr bgcolor="lightblue">
<th>S.No.</th><th>Name</th><th>Company Name</th><th>Email Id</th><th>Phone No</th><th>Message</th><th>Action</th></tr>
<?php 
$i=1;
while($row1=mysql_fetch_array($str1))
{
	
	echo "<tr>";
	echo "<td>$i</td>";

   echo "<td>$row1[c_name]</td>";
	echo "<td>$row1[c_company]</td>";
    echo"<td>$row1[c_email]</td>";
		echo"<td>$row1[c_phone]</td>

	<td>$row1[c_message]</td>";
	echo"<td> <a href='deleteco.php?c_sno=$row1[c_sno]'>Delete</a></td>";
	echo "</tr>";
	$i++;
}


?>
</table>