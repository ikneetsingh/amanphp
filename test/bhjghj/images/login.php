<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="lverify.php">
    <table width="50%" align="center">
        <tr>
            <th colspan="2" style="font-size:24px">Login!</th>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="uname" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="upwd" /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Submit" />&nbsp;&nbsp;&nbsp;<input type="reset" value="Cancel" /></td>
        </tr>
    </table>
</form>

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