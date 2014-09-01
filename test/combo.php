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
        <div id="combo">
  <h2>Combo Pack</h2>
    <table width="500px">
    <tr bgcolor="#D5D5EA">
     <td>Name</td>
        <td>Test</td>
        <td>Price</td>
        <td>Buy</td>
    </tr>
    <?php
  $str=mysql_query("select * from tbl_combo where s_display='1'");
  while($com=mysql_fetch_array($str))
  {
   echo "<tr>";
   echo "<td>$com[s_combo]</td>";
   $r=explode(",",$com[s_nosub]);
   $num=count($r)-1;
   echo "<td>$num</td>";
   echo "<td>0000</td>";
   echo "<td><input type='submit' value='Buy'></td></tr>";

  }
 ?>
    </table>
 </div>
		</div>
<?php
include_once("footer.php");
?>
