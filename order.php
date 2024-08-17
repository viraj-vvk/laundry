<?php
error_reporting(0);
require_once("config.php");

if($_SERVER['REQUEST_METHOD']=='POST')
{
  $user =  $_SESSION["user"];
  $date = date("Y-m-d");
  $recDate = $_POST['deldate'];
	$add = $_POST['address'];
  $amt = $_POST['total'];
	$cont = $_POST['cont'];
	$mail = $_POST['mail'];

	$qry = mysql_query("INSERT INTO `ordercust` (`c_username`, `o_date`, `o_rec_date`, `o_payment`,'o_cont','o_mail') VALUES ('$user','$date','$recDate','$amt','$cont','$mail')");

	if(qry==true)
	{
    echo $qry;
		echo "<script>  alert('Data Inserted')  </script>";
    unset($_SESSION["shopping_cart"]);
	}
	else
	{
		echo "<script>  alert('Problem')  </script>";
	}
}
else
	echo "Method is not Post";
?>
