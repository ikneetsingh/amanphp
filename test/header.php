<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

		<div id="templatemo_header">
        	<div id="templatemo_logo_area">
            	<div id="templatemo_logo">
                	Online Test Series</div>
              <div id="templatemo_slogan">
                	For Better Future
          </div>
                <div class="cleaner"></div>
            </div>
            
            <div id="templatemo_search">
				
					<?php
		if($_SESSION[p])
		{
			
			echo  $_SESSION[p]."<a href='logout.php' style='text-decoration: none; color:#000;font-size:16px;'>
			Logout
			</a>";
		
		}
		else
		{
       echo "   <a href='bhjghj/admin.php' style='text-decoration: none;
                                         color:#000; 
                                         font-size:16px;'>
                 Admin Login 
          </a>";
		}
		?>
			  
			</div>
        
            <div id="templatemo_menu">
				<ul>
                    <li><a href="index.php">Home</a></li>
                    <li ><a href="aboutus.php">About Us</a></li>
                    <li><a href="test.php">Tests</a></li>                        
					<li><a href="register.php">Register</a></li>
					
                	<li><a href="contactus.php">Contact Us</a></li>	  
            	</ul>
			</div>
            
        </div><!-- end of header -->
       