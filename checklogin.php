<?php session_start();?>
<?php
$a=$_REQUEST["txtName"];
$b=$_REQUEST["txtPass"];
require_once("dbconnect.php");

$rsUser=mysql_query("select * from user_detail where user_name='$a'") or die ("Query Error");

if(mysql_num_rows($rsUser)==0)
{
	echo("Wrong User Entered");
}
else
{
	$row=mysql_fetch_array($rsUser);
	
	if($row["user_password"]==$b)
	{
		$_SESSION['uname']=$a;
		
		if($row['user_type']=="administrator")
		{
			$_SESSION['utype']="admin";
			header("location:adminChoice.php");
		}
		else if($row['user_type']=="user")
		{
			$_SESSION['utype']="user";
			header("location:userChoice.php");
		}
	}
	else
	{
		echo("Wrong Password");
	}
}


?>