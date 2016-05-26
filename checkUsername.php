<?php
	include_once("config.php");
	$email=$_POST["email"];
	if($email=="")
	{
		echo 2;
		exit();
	}
	$sql="select * from user where email='$email'";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs)==0)
	{
		echo 0;
	}
	else
	{
		echo 1;
	}
?>
