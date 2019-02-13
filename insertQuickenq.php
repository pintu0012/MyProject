<?php

$a=$_REQUEST["txtemail"];
$b=$_REQUEST["txtname"];
$c=$_REQUEST["txtno"];

require_once("dbconnect.php");


mysql_query("insert into newuser_detail(newuser_email,newuser_name,newuser_mobile) values('$a''$b','$c')") or die("query error");

header("location:index.php?status=success");

?>