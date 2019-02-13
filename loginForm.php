<html>
<head>
<link href="style/stylelogin.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="main">

	<div id="loginMenu">
    
    	<div id="logo">
        <a href="index.php"><img src="collection/sens_logo.jpg"></a>
        </div><!--closing of logo-->
        
        <div id="rightmenu">
        	<a href="">Ask Question </a>
            <a href="">Log in </a>
        </div><!--closing of rightmenu-->
    
    </div><!--closing of loginMenu-->

	<div id="loginform" style="margin-top:200px">
    
    	<div id="leftform">
        <h1>Sign in</h1>
        <h2>Sign in using Registered Email Address and Password</h2>
        </div><!--closing of leftform-->
        <div id="rightform">
        <form action="checklogin.php" method="get">
        
        Enter Username : <br>
        <input type="text" name="txtName"placeholder="Enter Username *">
        Password : <br>
        <input type="password" name="txtPass" placeholder="Enter Password *">
        
        <input type="submit">
        
        
     
        
        </form>
        </div><!--closing of rightform-->
    </div><!--closing of loginform-->

</div><!--closing of main-->

<div id="footer">
  <p style="padding:20px 50px">Copyrights 2018, Sensible Computers
</p>

</div><!--closing of footer-->





</body>
</html>
