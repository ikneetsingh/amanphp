<style type="text/css">
body {
	background: #D4E6FC;
	margin: 0;
	padding: 0;
	font: 12px normal Verdana, Arial, Helvetica, sans-serif;
	height: 100%;
	color:#fff;
}

* {margin: 0; padding: 0; outline: none;}
h1 {
	font: 4em normal Arial, Helvetica, sans-serif;
	padding: 20px;	margin: 0;
	text-align:center;
	color:#000;
	background:#E1ECF6;
	width:1000px;
	margin:0 auto;
}
.container {
	width: 960px;
	margin: 0 auto; 
	overflow: hidden;
	position:relative;
	padding-bottom:50px;
}
#panel { 
	width:300px;
	list-style:none; 
	padding-top:30px;
	display:inline-block;
}
#panel li {  
	border-radius:3px 3px 3px 3px; 
	margin-top:5px;
	width:150px;
	background: #0095CC;
	background: -moz-linear-gradient(top, #161616 0%, #0095CC 100%);
	background: -webkit-linear-gradient(top, #161616 0%,#0095CC 100%);
	background: -o-linear-gradient(top, #161616 0%,#0095CC 100%);
	border-left:1px solid #111; border-top:1px solid #111; border-right:1px solid #333; border-bottom:1px solid #333;
}

#panel li.animation { 
	-moz-transition: all 0.4s ease-in-out; 
	-moz-transform:translateX(0px); 
	-o-transition: all 0.4s ease-in-out; 
	-o-transform:translateX(0px); 
	-webkit-transition: all 0.4s ease-in-out; 
	-webkit-transform:translateX(0px); 
}

#panel li.animation:hover { 
	-moz-transform:translateX(25px);
	-o-transform:translateX(25px);
	-webkit-transform:translateX(25px);
}

#panel li a { 
	color:#fff; 
	display:block; 
	padding:10px;
}

#panel li a:hover { 
	color:#00c6ff;
}
#con
{
	width:400;
	float:right;
	padding-top:30px;
}


</style>

<body>
<h1>WELCOME TO ADMIN </h1>

<div id="container">
<ul id="panel">
        <li><h3>MENU</h3></li>
        <li class="animation"><a href="newad.php?value=1">Add New Tests</a></li>
        <li class="animation"><a href="newad.php?value=2">New Questions</a></li>
        <li class="animation"><a href="newad.php?value=3">New Combo</a></li>
        <li class="animation"><a href="#">Assign Test To Combo</a></li>

        <li class="animation"><a href="#">Change Password</a></li>
        <li class="animation"><a href="#">Logout</a></li>

        <li class="animation"><a href="#">Link 7</a></li>
    </ul>
</div>
<div id="con">
 <?php 
	$value=$_REQUEST['value']; 
	if($value==1)
	{
		include_once("test.php");
	}
	if($value==2)
	{
		include_once("ques.php");
	}
	if($value==3)
	{
		include_once("combo.php");
	}
?>
</div>

</body>
</html>