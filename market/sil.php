<?php 
include "baglan.php";
if(isset($_GET))
{
	$dizi = explode(", ",$_SESSION['sepet']);
	for($i=0;$i<count($dizi);$i++)
	{
		if($dizi[$i]==$_GET['id'])
		{
			unset($dizi[$i]);
			$_SESSION['sepet']=implode(", ",$dizi);
			header("location:product_summary.php");
		}
	}
}
			header("location:product_summary.php");
 ?>