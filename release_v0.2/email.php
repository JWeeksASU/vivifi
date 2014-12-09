<!DOCTYPE html>
<!--
Project Vivi-Fi 
CIS440
Nick Muscara
Alex Lepak
Jason Weeks
Jessa Short
Justin Choi
Christian Valenty
-->

<html>
	<head>	
		<title>Vivifi</title>

		<meta name="viewport" content="width=device-width, initial=scale=1.0">

		<!-- Meta tag -->
		<!-- Keeps search engines from finding this particular site -->
		<meta name = "robots" content="noindex, nofollow"/>
		
		<!--Ensures proper rendering and touch zooming-->
		<!--Bootstrap hints at http://getbootstrap.com/css/ -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Link tag for Bootstrap CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
		
		<!--Link tag for Nav CSS -->
		<link href="css/main.css" rel="stylesheet">
		
		<!--Javascript Link -->
		<script type="text/javascript"
			src="js/navJs.js"></script>

		<!-- link for favicon -->
		<link rel=icon href=images/favicon1.ico sizes="16x16" type="image/png">
		
		<!-- Link tags for Bootstrap javasctipt references (makes the collapsed navbar expand to show links-->
		<script src= "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src= "js/bootstrap.js"></script>		
	</head>

	<body>

	<!-- Beginning of Navbar Code -->
    <div id="headerCtrl" class="header light dark scroll-top">
        <div class="container">
            <h1><center><img src="images/vivifiTitle4.png" ></a></center></h1>
            <ul class="navigation">
                <li>
                    <div class="Home dropdown">
                        <a href="index.html" class="dropdown-toggle">Home</a>
                       
						<div class="dropdown-menu">
                            <div class="col">
                                 <h3>The Main Page</h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="AboutUs dropdown">
                        <a href="aboutus.html" class="dropdown-toggle">About Us</a>
                        <div class="dropdown-menu">
                            <div class="col">
                            <h3>Learn More About Vivifi</h3>   
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="Artists dropdown">
                        <a href="#" class="dropdown-toggle">Artists</a>
                        <div class="dropdown-menu">
                            <div class="col">
                            <h3>Search Musicians</h3>   
                            </div>  
                        </div>
                    </div>
                </li>
                <li>
                    <div class="Group dropdown">
                        <a href="#" class="dropdown-toggle">Group</a>
                        <div class="dropdown-menu">
                            <div class="col">
                            <h3>Search Ensembles</h3>    
                            </div>     
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ViviBook dropdown">
                        <a href="#" class="dropdown-toggle">Vivi Book</a>
                        <div class="dropdown-menu">
                            <div class="col">
                            <h3>Quick and Easy Booking</h3>   
                            </div> 
                        </div>
                    </div>
                </li>
                <li>
                    <div class="AskUs dropdown">
                        <a href="contactUs.html" class="dropdown-toggle">Ask Us</a>
                        <div class="dropdown-menu">
                            <div class="col">
                            <h3>Don't want to search? Tell us what you're looking for and we will search for you!</h3>    
                            </div>
                        </div>
                    </div>
                </li>      
            </ul>
        </div>
    </div>
	
	<!-- [Content] --> 
	
	<div class="content">
		<div class="slider section" data-header="light"><a target="_blank" class="blog-badge" href="#"></a>
			<a href="#"><img class="slide" id="mainSlide1" src="images/violin1.jpeg" data-sort="1" data-header="dark" ></a>
		</div>
	</div>
	
	<div class="col-md-6 col-md-offset-3">
		<div class="bodyContainer">
			
			
			
			
			<?php
			
			//email from artist
			
			$name = "$firstName";
			$visitor_email = "$email";
			$message = "$consider";

			
			$email_from ="$visitor_email";
			$email_subject ="Artist Registration Request";
			
			
			$email_body ="You have received a new message from the
			user $name.\n". "Here is the message: test test";
			
			$to ="nickmuscara@gmail.com";
			
		
			$headers ="From: $email_from \r\n";
			$headers .="Reply-To: $visitor_email \r\n";

			$send_contact=mail($to,$email_subject,$email_body,$headers);
		
			if($send_contact){
			echo "weve received your information and will get back to you shortly";
			}
			
			else {
			echo "error";
			}
			?>
			
		</div>
	</div>	
	 <!-- [FOOTER] -->
    
    <div class="footer">
        <div class="container">
            <ul class="company">
				<img src="images/vivifiLogo1.png" >   
            </ul>
            <ul class="help">
                <li class="heading">Help</li>
                <li><a href="contactVivifi.html">Contact Us</a></li>
                <li><a href="comingsoon.html">FAQ's</a></li> 
            </ul>  
			<ul class="help">
                <li class="heading">Contact Vivifi</li>
                <li><a href="artistregistration.html">Are you a musician?</a></li>
				<li><a href="ensembleregistration.html">Are you part of an ensemble?</a></li>
                <li><a href="contactUs.html">Are you an event planner?</a></li> 
		        <li><a href="contactUs.html">Unrelated Questions?</a></li> 
            </ul>  
			 <ul class="help">
                <li class="heading">Find Us On:</li>
		<!-- social -->
            
                <li><a href="comingsoon.html">Facebook</a></li>
                <li><a href="comingsoon.html">Twitter</a></li> 
		        <li><a href="comingsoon.html">Google+</a></li> 


            </ul>  
        </div>
    </div>
	
	
	</body>
</html>

