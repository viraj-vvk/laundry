<?php
require_once("config.php");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$c_name=$_POST['name'];
	$c_address=$_POST['address'];
	$c_contact=$_POST['contact'];
	$c_email=$_POST['email'];
	$c_password=md5($_POST['pass']);
	$qry=mysql_query("INSERT INTO laundry(c_name, c_address, c_contact, c_email, c_password)
	values ('$c_name', '$c_contact', '$c_email', '$c_pass')");
	if($qry == true)
	{
		echo " inserted";
		header("location:login.php");

	
	}
	else
	{
		echo "not".mysql_error();
	}

	
}
else
{
	echo "Request is not POST";
}
?>