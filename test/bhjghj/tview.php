<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Untitled Document</title>
</head>
<?php
	include_once("db.php");
	$str=mysql_query("select * from tbl_test where s_display='1'");
?>
<body>

	<table border="1" align="center" width="800px">
    	<tr bgcolor="lightblue">
        	<th>S.No.</th>
        	<th>subject</th>
			<th>test</th>
			<th>no of ques</th>
			<th>level</th>
			<th>timing</th>
			<th>fees</th>
            <th>Action</th>
        </tr>
        <?php
			$i=1;
			while($test_row=mysql_fetch_array($str))
			{
				$sub_row=mysql_fetch_array(mysql_query("select s_subjects from tbl_subjects where s_sno='$test_row[s_subjects]'"));
				
				echo "<tr>";
				echo "<td>$i</td>";
				echo "<td>$sub_row[s_subjects]</td>";
				echo "<td>$test_row[s_test]</td>";
				echo "<td>$test_row[s_noques]</td>";
				echo "<td>$test_row[s_level]</td>";
				echo "<td>$test_row[s_timing]</td>";
				echo "<td>$test_row[s_fees]</td>";
	 			echo "<td><a href='admin1.php?value=2&edt=1&sno=$test_row[s_sno]'>Edit</a> &nbsp;
	 			<a href='tdelete.php?sno=$test_row[s_sno]&display=$test_row[s_display]'>Delete</a></td>";
				echo "</tr>";
				$i++;
			}
		?>
	</table>

</body>
</html>
