<?php
if($_SESSION['k_id']<0 or null ==$_SESSION['k_id'])
{
	header("location:login.php");
	exit();
}
	

	
?>