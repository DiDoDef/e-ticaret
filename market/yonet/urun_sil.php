<?php
include "../baglan.php";
if(isset($_GET['id']))
{
	$sql = "DELETE FROM `urun` WHERE `urun_id` = ".$_GET['id'];
if($sil=mysqli_query($baglanti,$sql)){
	header("location:urunlistele.php?id=".$sil);
	exit;
	
}
}
?>