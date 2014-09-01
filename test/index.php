<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>online test series</title>
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
</head>
<body>
	<div class="templatemo_container">
    <?php
		include_once("header.php");
        ?>
		<div id="templatemo_image_fader">
        	 <script type="text/javascript">
//new fadeshow(IMAGES_ARRAY_NAME, slideshow_width, slideshow_height, borderwidth, delay, pause (0=no, 1=yes), optionalRandomOrder)
new fadeshow(fadeimages, 960, 240, 1, 2000, 1, "R")
 
			</script>
        </div>
        		
		<div id="templatemo_content_area">
        	<div id="templatemo_left">
            	<div class="templatemo_post">
                	<div class="templatemo_post_title">
                    	Message</div>
                    <div class="templatemo_post_text">
	                <img src="images/dr.jpg" alt="Flower" width="150" height="150" />
					  	<p>The aim and objective of this program is to train students across the world with latest trends in entrance examinations and to equip them with strategies to tackle online exams.</p>
				  	  <p>This will allow students from India and Overseas to prepare for their desired exam in the comforts of their home and offers students with complete self-practice on the syllabus for the exam.
" Here, we end by saying that we would try our best to give you the best so that you </p>
                  </div>
                    
      <div class="templatemo_post_bottom">
                    	Test Series</div>
                    
              </div>
                
                <div class="templatemo_post">
                	<div class="templatemo_post_title">
                    Topper List</div>
                    <div class="templatemo_post_text">
						<table><tr><td><img src="images/1.jpg" " width="150" height="150" /></td><img src="images/2.jpg" width="150" height="150" /><td></td><td><img src="images/3.jpg"  width="150" height="150" /></td></tr></table>
                   	  	     
                    </div>
                    
      <div class="templatemo_post_bottom">
                    	Test Series</div>
                    
              </div>
            </div><!-- End Of left-->
            
            <div id="templatemo_right">
            	<div class="templatemo_section">
                	<div class="templatemo_section_title">
                    	Log In
                    </div>
                    <div class="templatemo_section_bottom">
                    	<?php
						include_once("login.php");
						?>
                    </div>
				</div>
                    
                <div class="templatemo_section">
                	<div class="templatemo_section_title">
                    	Latest News
                    </div>
                    <div class="templatemo_section_bottom">
           	   <?php
			   include_once("scro.php");
			   ?>
                    </div>
                </div>
            </div><!-- End Of right-->
            
            <div class="cleaner"></div>
        
        </div><!-- End Of Content area -->
    </div><!-- End Of Container -->
    
	<?php
	include_once("footer.php");
	?>
</body>
</html>