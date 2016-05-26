<?php
	error_reporting(0);
	ob_start();
	session_start();
	$dblink=@mysql_connect("localhost:3306","root",""); 
	if($dblink==null)
	{
		echo "数据库打开失败";
		exit;
	} 
	mysql_query("SET NAMES 'utf8'");  
	mysql_select_db("cosmede"); 
?>
