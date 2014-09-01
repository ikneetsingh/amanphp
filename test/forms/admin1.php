<head>
<link rel="stylesheet" type="text/css" href="pro_drop_1/pro_drop_1.css" />
<script src="pro_drop_1/stuHover.js" type="text/javascript"></script>
<script src="cat.js" type="text/javascript"></script>
</head>
<body>

<div id="wrapper">

<span class="preload1"></span>
<span class="preload2"></span>

<ul id="nav">
	
	<li class="top"><a href="admin1.php" id="products" class="top_link"><span class="down">Subject</span></a>
		<ul class="sub">
			<li><a href="admin1.php?value=1" class="fly">Add Subject</a>
			<li><a href="admin1.php?value=6" class="fly">View Subject</a>		
			</li>
			</ul>
	</li>
	<li class="top"><a href="admin1.php" id="services" class="top_link"><span class="down"> Test</span></a>
		<ul class="sub">
			<li><a href="admin1.php?value=2">Add New Test</a></li>
			<li><a href="admin1.php?value=7">View Test</a></li>
			
		</ul>
	</li>
	<li class="top"><a href="admin1.php?value=3" id="contacts" class="top_link"><span class="down"> Questions</span></a>
		<ul class="sub">
			<li><a href="admin1.php?value=3">Add New Questions</a></li>
			<li><a href="admin1.php?value=8">View Questions</a></li>
				
			
		</ul>
	</li>
	
            <li class="top"><a href="#nogo57" id="privacy" class="top_link"><span>logout From Admin</span></a>
			<li class="top"><a href="admin1.php?value=11" id="privacy" class="top_link"><span>Show Message</span></a>
    
            </li>
</ul>

<div id="con">
 <?php 
	$value=$_REQUEST['value']; 
	if($value==1)
	{
		include_once("subject.php");
	}
	if($value==2)
	{
		include_once("test.php");
	}
	if($value==3)
	{
		include_once("ques.php");
	}
	if($value==4)
	{
		include_once("combo.php");
	}
	if($value==5)
	{
		include_once("assign.php");
	}
	if($value==6)
	{
		include_once("sview.php");
	}
	if($value==7)
	{
		include_once("tview.php");
		
	}
	if($value==8)
	{
		include_once("qview.php");
		
	}
	if($value==9)
	{
		include_once("cview.php");
		
	}
	if($value==10)
	{
		include_once("aview.php");
		
	}
	if($value==11)
	{
		include_once("viewcon.php");
	}
	
?>
</div>
</div>
</body>
