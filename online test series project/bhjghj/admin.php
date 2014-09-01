<?php
//include_once("check.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
include_once("admin1.php");
?>

<a href="lgout.php">LogOut</a>
</body>
</html>
<script language="javascript">
<?php
if($_REQUEST['msg'])
{
	?>
	alert("<?php echo $_REQUEST['msg']; ?>");
	<?php
}
?>
</script>