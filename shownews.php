<style>

#newsdisplay
{
width:100%;
height:auto;
background-color:#999;
padding-top:30px;
}

#leftcont
{
	
	
	
}
#newsbox
{

width:50%; 	
height:300px;	
background-color:white;
border:thick;
border-style:solid;
margin:30px 30px 30px 30px;
}
#newsbox head
{
height:70px;	
background-color:#09F;
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
padding-top:10px;	
	
	
	
}
#newsbox head h3
{
	padding-top:10px;
}

</style>


<?php
include("header.php");
?>

<div id="newsdisplay">
      
     <div id="leftcont">
<?php 
      include("dbconnect.php");
	  $rsnw=mysql_query("select* from news_detail") or die("Query Error");
	  if(mysql_num_rows($rsnw)>0)
	  {
		while($row=mysql_fetch_array($rsnw))  
		  {
			echo("<div id='newsbox'>"); 
			
		    $nw_hd=$row["short_detail"];
		    $nw_sd=$row["long_detail"];
            echo("<div id='head'>");
			echo("<h3 style='margin:10px;'>");
			echo($nw_hd);
			echo("</h3>");
            echo("</div> <!--closing of head-->");  
            echo("<div id='cont' style='margin:10px;'>");
            echo($nw_sd); 
            echo("</div> ");
          
         echo("</div >");  
			  
		  }
		  
	  }

?>     
        </div > <!-- closing of leftcont -->

</div> <!--closing of newsdisplay -->

<?php
include("footer.php");
?>


