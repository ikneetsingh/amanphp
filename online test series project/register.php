<?php
session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Orange Bar, CSS Template, Free Download</title>
<meta name="keywords" content="free css template, orange bar, XHTML, CSS" />
<meta name="description" content="Orange Bar is a free CSS template from templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="templatemo_image_fader.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script language="javascript">
<?php 
if($_REQUEST['msg']){
?>
alert("<?php echo $_REQUEST['msg'];?>")
<?php
}
?>
</script>
<body>
<div class="templatemo_container">
    
        <?php
		include_once("header.php");
		?>
        </div>
<center><div id="division" >
    <div id="rr" >
 <div id="rg" style="font-size:24px; font-family: 'Times New Roman', Times, serif; color:#990033; ">Register</div>
   <form action="registerdb.php" method="post" enctype="multipart/form-data">
    <table width="500" height="600px" style="font-size:16px;"  class="data">

<tr><td>Name:</td><td><input type="text" name="name1" placeholder="first name"/>    <input type="text" name="name2" placeholder="lastname"/></td></tr>
<tr><td>Gender:</td>
<td><input type="radio" name="sgen" value="female"/>Female <input type="radio" name="sgen" value="male"/>Male</td></tr>
<tr><td>DOB:</td><td><select name="day"><?php  for($i=1;$i<=31;$i++) { echo "<option> $i</option>";} ?></select>
<select name="month"><?php  for($i=1;$i<=12;$i++) { echo "<option> $i</option>";} ?></select>
<select name="year"><?php  for($i=1960;$i<=2013;$i++) { echo "<option> $i</option>";} ?></select>
</td></tr>
<tr><td>User Name:</td><td><input type="text" name="uname" /></td></tr>
<tr><td>Password:</td><td><input type="password" name="pwd" /></td></tr>
<tr><td>Retype Password:</td><td><input type="password" name="paswd1" /></td></tr>
<tr><td>Security Question:</td><td><select name="sques"><option>Which is your favourite fruit ?</option>
<option>Who is your best freind ?</option></select></td></tr>
<tr><td>Answer:</td><td><input type="text" name="ans" /></td></tr>
<tr align="center"><td colspan="2"><input type="submit" value="Sign up" name="submit" />
<input type="reset" value="Cancel" name="cancel" /></td></tr>
</table>    </form> 
        
</div>

<div id="ri">
<div id="lg" style="font-size:24px; font-family: 'Times New Roman', Times, serif; color:#990033; ">log in</div>
         <?php 
	   include_once("login.php");
	   ?>
       </div>
</div></center>

 <?php
include_once("footer.php");
?>


 
  
</body>
</html>
