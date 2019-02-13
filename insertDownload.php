<?php
$a=$_REQUEST["txtdname"];
$b=$_FILES["fldownload"];
require_once("dbconnect.php");

if(isset($_FILES)==true)
{
	move_uploaded_file($b["tmp_name"],".\\Downloads\\".$b["name"]);
}

mysql_query("insert into download_detail(download_name,download_file) values('$a','".$b["name"]."')") or die("query error");

header("location:DownloadForm.php?status=success");

?>