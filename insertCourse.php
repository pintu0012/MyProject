<?php
$a=$_REQUEST["txtcname"];
$b=$_FILES["flcourse"];
$c=$_FILES["flurl"];
require_once("dbconnect.php");

if(isset($_FILES)==true)
{
	move_uploaded_file($b["tmp_name"],".\\collection\\".$b["name"]);
}
if(isset($_FILES)==true)
{
	move_uploaded_file($c["tmp_name"],".\\coursedetail\\".$c["name"]);
}

mysql_query("insert into course_detail(course_name,course_image,course_detail) values('$a','".$b["name"]."','".$c["name"]."')") or die("query error");

header("location:courseForm.php?status=success");

?>