<?php
error_reporting(0);
require("config.php");
session_start();

if(!isset($_SESSION["user"]))
	header('location:index.php');
else{
	$user = $_SESSION["user"];

	$sql = mysql_query("SELECT `c_id` FROM `customer` WHERE 'c_username'='$user'");
	if(!$sql)
		header('location:index.php');
}
?>
