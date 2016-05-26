<?php
error_reporting(0);
ob_start();
session_start();  
session_destroy();
echo "<script>alert('×¢Ïú³É¹¦');location='index.php';</script>";
?>