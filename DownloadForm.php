
<link href="style/styleadminChoice.css" type="text/css" rel="stylesheet">
<style>
.formSetting
{
	width:450px;
	height:150px;
	margin-left:auto;
	margin-right:auto;
	margin-top:100px;
	background-color:#CCC;
	padding:20px;
}

.formSetting table
{
  
}
.formSetting table tr
{
	height:40px;
	padding:5px;
}
select
{

	height:30px;
	padding:3px;
	font-size:20px;
	border-radius:3px;
	border:1px solid red;
	width:250px;
}

</style>

<?php
include("header.php");
?>
<div id="content">
<?php
include("adminSideMenu.php");
?>
<div id="rightContent">
<?php
if(isset($_REQUEST["status"])==true)
{
	if($_REQUEST["status"]=="success")
	{
		echo("<div style='background-color:white;color:red;text-align:center'>");
		echo("Data has been saved");
		echo("</div>");		
	}
}

?>
<div id="category" class="formSetting">
<form method="post" enctype="multipart/form-data" action="insertdownload.php" >

<table>
<tr>  <td> Enter Download file Name </td> <td> <input type="text" name="txtdname"> </td> </tr>
<tr>  <td>Select Download file </td> <td><input type="file" name="fldownload"></td></tr>
<tr>  <td> <input type="submit" value="Ok" /> </td> <td> <input type="reset" value="Cancel"></td> </tr>

</table>
</form>
</div><!--closing of category-->
</div>
</div>


<?php include("footer.php")?>