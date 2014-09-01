var xmlhttp;
function ajaxfunc(str)
{
	xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null)
  	{
  		alert ("Browser does not support HTTP Request");
  		return;
  	}
	var url="test1.php";
	url=url+"?val="+str;
	//alert(url);
	xmlhttp.onreadystatechange=function (){
		if (xmlhttp.readyState==4)
		{
			document.getElementById("ajax").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET",url,true);
	xmlhttp.send(null);	
}

function GetXmlHttpObject()
{
	if (window.XMLHttpRequest)
  	{
  // code for IE7+, Firefox, Chrome, Opera, Safari
  		return new XMLHttpRequest();
  	}
	if (window.ActiveXObject)
 	{
  // code for IE6, IE5
  		return new ActiveXObject("Microsoft.XMLHTTP");
  	}
	return null;
}// JavaScript Document