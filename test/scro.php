

<style type="text/css">



#content { HEIGHT: 143px;   OVERFLOW: hidden; POSITION: relative; WIDTH:250px; }

#about { DISPLAY: none; padding: 19px 5px 0 5px; }
#about a { COLOR: #CF926F; }

#data { COLOR: #00000; LINE-HEIGHT: 1.3em; POSITION: absolute; TOP: 0; right: 0; }

#search input.submit { MARGIN-TOP: 5px; BORDER: 1px solid #333; }
#search input.text { BACKGROUND: #FFF; BORDER: #333 1px solid; COLOR: #677d96; FONT-SIZE: 14px; HEIGHT: 25px; MARGIN-TOP: 4px; PADDING: 2px 3px 0 7px; WIDTH: 160px; }
#search hr { MARGIN: 0; PADDING: 0; }
#search a { PADDING: 0 2px; TEXT-DECORATION: none; }
#search { COLOR: #666; DISPLAY: none; PADDING-TOP: 19px; TEXT-ALIGN: center; }

.s0 span,#search span:hover { COLOR: #DBD2CD; }
.s1 span { COLOR: #CF926F; }

#menu { COLOR: #393939; POSITION: absolute; TOP: 182px;  TEXT-ALIGN: left; }
#menu a { MARGIN: 0 4px; TEXT-DECORATION: none; }
#menu a:hover { COLOR: #ddd; }

#slider { BACKGROUND: url(slider.gif); POSITION: absolute;  TOP: 13px; HEIGHT: 173px; WIDTH: 15px; TEXT-ALIGN: left; CURSOR: hand; CURSOR: pointer; }
#slide { HEIGHT: 9px; WIDTH: 9px; BACKGROUND: url(slide.gif); MARGIN: 5px 0 0 3px; FONT-SIZE: 1px; }
}
</style>
</head>
<body>

<div id="content">
 <div style="TOP: 143px;" id="data" onMouseOver="flip(0)" onMouseOut="flip(1)">
ALLEN launches its innovative Online Test Series, an Assessment platform to help students sharpen their preparation for JEE Main, JEE Advanced, AIPMT, AIEEE, NEET, BITSAT, AIIMS, AFMC, NTSE, IJSO<br><br>Online Test Series for IJSO (International Junior Science Olympiad) is now available. It is Free for NTSE Stage-1 OR Stage-2 qualified students.<br><br>AIPMT (NEET) Online Test Series, Mock Test for AIPMT (NEET), Sample Test Papers for AIPMT (NEET)are now available. <br><br>JEE Advanced (old IITJEE) Online Test Series, Mock Test for JEE Advanced (old IITJEE), Sample Test Papers for JEE Advanced (old IITJEE) are now available. <br><br>JEE Main (Old AIEEE) Online Test Series, Mock Test for JEE Main (Old AIEEE), Sample Test Papers for JEE Main (Old AIEEE) are now available. <br><br>Online Test Series for NTSE 2013 Stage-1 is now live. NTSE Mock Test Papers and Sample Papers for NTSE also available<br><br>
</div>


<div id="slider" onMouseOver="slip()"><div id="slide"></div></div>
</div>
<script type="text/javascript">


function box() {

	IE=navigator.userAgent.indexOf('MSIE')!=-1?true:false;

	_data=document.getElementById('data'); _data2=document.getElementById('data2'); _slider=document.getElementById('slider'); _slide=document.getElementById('slide'); 
	
	h=_data.offsetHeight; o=parseInt(_data.style.top); s=1; ratio=(h/(o+h))*(154/h); hover=false;

	scroll();

}

function scroll() {

	_data.style.top=(t=(parseInt(_data.style.top)-s))+"px";
	
	_slide.style.marginTop=((154-((t+h)*ratio))+5)+'px';
	_slide.style.backgroundPosition=hover?'0 9px':'';
	
	if(t<-h) _data.style.top=o+"px";
	if(t>o) _data.style.top=-h+"px";

	setTimeout("scroll()",42);

}

function slip() {

	function XY(e) {
	
		X=IE?event.clientX+document.body.scrollLeft:e.pageX;
		Y=IE?event.clientY+document.body.scrollTop:e.pageY;

		if(X>=185 && X<=200 && Y>=13 && Y<=190) {
		
			_slider.style.backgroundPosition='0px 173px';

			_data2.firstChild.nodeValue='pause'; hover=true;

			s=(Y-98)/5;

		}
		else {

			_slider.style.backgroundPosition='';

			document.onmousemove=function(){}; hover=false;

			s=(Y>98)?1:-1;

		}

	}

	document.onmousemove=XY;

}

function flip(sp) {

	if(sp==0) { _data2.firstChild.nodeValue='play'; s=0; }
	else { _data2.firstChild.nodeValue='pause'; s=1; }

}

function display(v) {

	document.getElementById("data2").style.color=("data"==v)?'#ddd':'#999';
	document.getElementById("data").style.display=("data"==v)?'block':'none';

	flip(s==0?1:0); _slider.style.display='block'; 

}

if(window.addEventListener) window.addEventListener("load",box,false);
else if(window.attachEvent) window.attachEvent("onload",box);
else window.onload=box;

</script>

