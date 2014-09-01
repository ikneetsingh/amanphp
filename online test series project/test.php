<?php
session_start();
?>
<html>
<head>
<title>Online Test</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

      <div class="templatemo_container">
     <?php 
	 
	  include_once("header.php");
	  ?>
      </div>
      <?php
	 include_once("forms/db.php");
	  $usersno=$_REQUEST['usersno'];
	 $result=mysql_query("select * from tbl_register where sno='$usersno'");
	 $row=mysql_fetch_array($result);
	  echo $row[uname];
	  ?>

   <center> <div id="tr" style="width:700px; border:solid #EAEAEA; margin-bottom:30px;" >
     <div class="title" style="width:700px; background-color:#eaeaea; padding-top:10px; height:30px; font-size:24px; color:#600; font-family:'Times New Roman', Times, serif;"><b>Test</b></div>
   <?php
   include_once("forms/db.php");
/*   $result=mysql_query("select * from tbl_subjects where s_display='1' " );
   while($row=mysql_fetch_array($result))
   {   echo"<div class='testdisplay' align='center'>";
       echo "<table style='width:150px';><thead><th>";
	   echo $row[s_subjects];     		   
       echo "</th></thead>";
	   $result1=mysql_query("select * from tbl_test where s_subjects='$row[s_sno]' and s_display='1'" );
       while($row1=mysql_fetch_array($result1))
	   {
		   echo "<tr><td>";
		   echo "<a href=' ";
	       if($_SESSION[pussy])
		   { 
		   echo "level.php?test=$row1[s_sno]";
		   } 
		   else
		   {
			  echo "register.php";
		   }
		   echo "' > $row1[s_test]</a>";
		   echo "</td></tr>";
		   $i++;
	   }
	   echo " </table></div>";
   }
*/	 
   ?>
   <table width="690px" border="1" cellpadding="10" cellspacing="10">
   <tr>
   	<?php
		for($i=1;$i<=3;$i++)
		{
			if($i==1)
			$level="easy";
			else if($i==2)
			$level="medium";
			else
			$level="hard";
	?>
			<td>
				<table width="180px">
				<tr>
					<th style='background-color:#666666; color:#FFFFFF;'><?php echo strtoupper($level); ?></th>
				</tr>
				<?php
					$subs=mysql_query("select * from tbl_subjects where s_display=1");
					while($row_subs=mysql_fetch_array($subs))
					{
				?>
						<tr>
							<td><?php echo "<a href='test_all.php?sub_sn=$row_subs[s_sno]&lvl=$level'>$row_subs[s_subjects]</a>"; ?></td>
						</tr>
					<?php
					}
					?>
				</table>
			</td>
	<?php
	}
	?>
   </tr>
   </table>
</div></center>

<div id="footerwrap">
        <?php
		include_once("footer.php");
		?>
</div>

  
</body>
</html>
