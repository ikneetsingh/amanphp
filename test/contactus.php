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
		</div>
<center><div id="cont">
<div id="cc" style="font-size:24px; font-family: 'Times New Roman', Times, serif; color:#990033; ">Contact Us</div>
<form id="form" class="blocks" action="contactc.php" method="post">
<table height="500px">
		<tr>
		<td>Name:</td><td>
				<input type="text" class="text" name="name" /></td></tr>
			<tr>
				<td>Company:</td>
				<td><input type="text" class="text" name="company" /></td></tr>
			<tr><td>
				Your e-mail:</td><td>
				<input type="text" class="text" name="email" /></td></tr>
			
			<tr>
			<td>
				Contact number:</td><td>
				<input type="text" class="text" name="phone" /></td></tr>
		
<tr><td>Message:</td>
				<td><textarea class="textarea" name="message"></textarea>
			</td></tr>
		
		
		<tr><td align="center">		<input type="submit" class="btn" value="Submit" /></td></tr>
			</table>
		</form>
		</div></center>

<?php
include_once("footer.php");
?>
