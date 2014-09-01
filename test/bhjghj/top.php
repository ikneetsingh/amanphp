<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DesignShack Sexy Magazine-Style Dropdown Menu</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>

<body>
<div id="head">
	<div class="wrap1">
		<h1><img src="images/images (3).jpg" alt="Blog Magazine Logo" height="90px" width="250px" /></h1>
       
    </div>
    <div id="cg">
  		<a href="#"> create new account</a>
     </div>
</div>

<div class="wrap">
	<ul id="nav">
    <?php
$x=mysql_query("select * from tbl_menu");
?>
<ul>
<?php
while($x2=mysql_fetch_array($x))
{
	
	echo"<li>
	<a href=''>$x2[s_menu]</a>";
	$y1=mysql_query("select * from tbl_subjects where s_sno=$x2[s_sno]");
	if(mysql_num_rows($y1))
	{
		echo"<ul>";
		while($y2=mysql_fetch_array($y1))
		{
			echo"<li><a href='menu.php?sno=$y2[s_sno]'>$y2[s_subjects]</a></li>";
		}
		echo"</ul>";
	}
	
	echo"</li>";
	
	
	
}
echo"<li><a href='gallery.php'>Gallery</a></li>";
echo"<li><a href='contact.php'>Contact Us</a></li>";

?></ul>
</div>

<script type="text/javascript">
$(document).ready(function() {	
	$('#nav li').hover(function() {
		$('ul', this).slideDown(200);
		$(this).children('a:first').addClass("hov");
	}, function() {
		$('ul', this).slideUp(100);
		$(this).children('a:first').removeClass("hov");		
	});
});
</script>

</body>
</html>