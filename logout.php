<?php session_start(); 
session_destroy(); 
$last = $_SERVER['HTTP_REFERER'];
header("location:$last");  
exit;
?>