<?php

$b=$_REQUEST["txtnshort"];
$c=$_REQUEST["txtnlong"];
require_once("dbconnect.php");


mysql_query("insert into News_detail(short_detail,long_detail) values('$b','$c')") or die("query error");

header("location:NewsForm.php?status=success");

?>