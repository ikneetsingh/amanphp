<?php
session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
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
<body bgcolor="#CCCCCC">
<div class="templatemo_container">
    
        <?php
		include_once("header.php");
		?>
        </div>
<div id="lg" align="center" style="font-size:24px; font-family: 'Times New Roman', Times, serif; color:#990033; ">log in</div>
         <?php 
	   include_once("login.php");
	   ?>
      
</div></center>
<br>
<br>

 <?php
include_once("footer.php");
?>


 
  
</body>
</html>
