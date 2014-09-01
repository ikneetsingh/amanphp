<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	include_once("db.php");
	$str=mysql_query("select * from tbl_subjects where s_display='1'");
?>
<body>
<div id="main">
	<table border="1" align="center" width="800px">
    	<tr bgcolor="lightblue">
        	<th>S.No.</th>
        	<th>subject</th>
            <th>Action</th>
        </tr>
        <?php
			$i=1;
			while($subject_row=mysql_fetch_array($str))
			{
				echo "<tr>";
				echo "<td>$i</td>";
				echo "<td>$subject_row[s_subjects]</td>";
				
	 			echo "<td><a href='admin1.php?value=1&edt=1&sno=$subject_row[s_sno]'>Edit</a> &nbsp;
	 			<a href='sdelete.php?sno=$subject_row[s_sno]&display=$subject_row[s_display]'>Delete</a></td>";
				echo "</tr>";
				$i++;
			}
		?>
	</table>
</div>
</body>
</html>
