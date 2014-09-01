<?php
session_start();
?>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="templatemo_image_fader.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<?php
include_once("forms/db.php");
?>
	<div class="templatemo_container">
    <?php
		include_once("header.php");
        ?>
        
<div id="sub4">
<?php
$str=mysql_query("select * from tbl_subjects where s_display='1'");
?>

<?php
while($x2=mysql_fetch_array($str))
{
 echo"<table width='700px'>";
 echo "<tr bgcolor='#CCCCCC'><td colspan='2' align='left'>";
echo"$x2[s_subjects]</td></tr>";
 echo"<br>";

 $str1=mysql_query("select * from tbl_test where s_subjects='$x2[s_sno]' and s_display='1'");
 while($x2=mysql_fetch_array($str1))
 {
  echo"<div id='sub2'>
  <tr>
  <td>
  $x2[s_test]
  </td>
  <td align='right'>
  <a href='level.php?test=$x2[s_sno]'><img src='images/test.jpg' height='30px' width='30px'></a>
  </td>
  </tr>

  <br>
  </div>";
  
 }
 echo "</table>"; 
 echo"<br>";
}
echo"</div>";
?>

</div>
</div>
<?php
include_once("footer.php");
?>
