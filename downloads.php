<link href="style/styledownloads.css" type="text/css" rel="stylesheet">
<style>
td
{
	text-align:center;
}

</style>
<?php
include("header.php")
?>
<div id="downloads">
	<div id="dfiles">
    <table border="1px">
    <tr><th width="70px">S. no</th><th width="500px">File Name</th><th width="330px">download</th></tr>
    <?php
    	include("dbconnect.php");
		
		$rsdw=mysql_query("select* from download_detail") or die("Query Error");
		
		if(mysql_num_rows($rsdw)>0)
		{
			while($row=mysql_fetch_array($rsdw))
			{	echo("<div id='dcnt'>");
				$id=$row["download_id"];
				$flnm=$row["download_name"];
				$fl=$row["download_file"];
				echo("<tr> <td>" .$id ."</td>");
				echo(" <td>" .$flnm ."</td>");
				echo("<td><a href='Downloads\\$fl' download >Download</a> </td> </tr>");
				echo("</div>");
			}
			
		}
	?>
    </table>
    </div>

</div>





<?php
include("footer.php")
?>