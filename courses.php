<link  href="style/stylecourses.css" rel="stylesheet" type="text/css">
<?php include("header.php");
?>
<div id="course">
	
    
    
    <?php
    	include("dbconnect.php");
		
		$rscr=mysql_query("select * from course_detail") or die("Query Error");
		
		if(mysql_num_rows($rscr)>0)
		{
			while($row=mysql_fetch_array($rscr))
			{	
			echo("<div id='subcourse'>");
			$im=$row["course_image"];
			$cnm=$row["course_name"];
			$cli=$row["course_detail"];
		echo("<img src='images\\$im' />");
        echo("<h1>".$cnm."</h1>");
    
    echo("<a href='$cli'><j1>Course Detail</j1></a>");
    
	
	   echo("</div>");
			}
			
		}
	?>
    
    
    
    
    
</div>

<?php
include("footer.php");
?>