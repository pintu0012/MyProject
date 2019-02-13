<?php if(session_id()=="")
session_start();  ?>
<html>
<head>
<link href="style/styleheader.css" type="text/css" rel="stylesheet">
</head>
<body>



	    
    	<div id="title">
        
        2018 Vocational Training Starting from 04/jun/2018 
        <button><a href="">Get Detail</a>
        </button>
        
        </div><!--closing of title-->
 <div id="main">
 
 
       		<div id="header">
  
                
        		<div id="headerMenu">
                     <div id="headerMenu_left">Call Us:<span class="opacity-70"> 7999554117 </span> | E-Mail :<span class="opacity-70"> prashant.sahu@sensible-computers.com </span>
 </div> <!--closing of headerMenu_left-->
                	<ul type="none" >
                    <li> <a href="">&nbsp; |&nbsp;Contact </a>
                         <a href=""> Blogspot </a></li> 
                    <li> <a href="downloads.php"> Downloads  </a> </li>
                    <li>
    <?php
	if(isset($_SESSION["uname"])==false)
	{
	 echo("<a href='loginForm.php'> Login </a>");  
	}
	else
	{
	echo("<a style='text-decoration:none;' href='logout.php'> Logout </a>");	
	}
	 
	 
	 
	 
	 ?></li>
                    </ul>
					
					
                
                
                </div> <!--closing of headerMenu-->
   <div id="LogoMenu">
                 
              <a href="index.php"><img src="images/sens_logo.jpg" /></a>
      
                          
                
                <ul type="none" >
                
                    <li> <a href="">Blog </a> </li>
                    <li> <a href="downloads.php">Downloads  </a></li> 
                    <li id="submenu"> <a href="">Update &dArr; </a>
                     <ul>
                         <li><a href="shownews.php">Latest news</a></li>
              		     <li><a href="">Events</a></li>
               			 <li><a href="">Portfolio</a></li>
                         <li><a href="">SEO</a></li>
              		     
                		 
                	</ul> </li>
                    <li id="submenu"> <a href="">Test &dArr; </a>
                    <ul>
                         <li><a href="">Practice test</a></li>
              		     <li><a href="">Online test</a></li>
               			 
                		 
                	</ul> </li>
                    <li> <a href="">Training </a> </li>
                    <li id="submenu"> <a href="">Services &dArr; </a>
                    <ul>
                         <li><a href="softwaredevelop.php">Software development</a></li>
              		     <li><a href="website.php">Website</a></li>
               			 <li><a href="bulksms.php">Bulk sms</a></li>
                         <li><a href="seo.php">SEO</a></li>
              		     <li><a href="webpromotion.php">Website promotion</a></li>
               			 <li><a href="internetmarketing.php">Internet marketing</a></li>
                		 
                	</ul> </li> 
                    <li> <a href="courses.php">Courses  </a> </li> 
                <li id="submenu"> <a href="">About &dArr; </a>
                     
                     <ul>
                         <li><a href="about.php">About</a></li>
              		     <li><a href="whysensible.php">Why sensible</a></li>
               			 <li><a href="ourexpertise.php">Our expertise</a></li>
                		 
                	</ul> 
                    
                    </li> 
                    
                    
                    
                 </ul>
                    
                
          </div> <!--closing of LogoMenu-->
          
        
        
    
    		</div><!--closing of header-->
   
    
