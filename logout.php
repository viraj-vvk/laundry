<?php
error_reporting(0);
session_start();

	if(isset($_SESSION["user"]))
	{
		unset($_SESSION["user"]);
    unset($_SESSION["shopping_cart"]);

		if(!isset($_SESSION["user"]))
		{
			header('location:index.php');
		}
	}
?>
