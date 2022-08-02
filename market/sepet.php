
<?php 
include "baglan.php";
if($_POST)
{
	if(isset($_SESSION['sepet']))
	$_SESSION['sepet']=$_SESSION['sepet'].", ".$_POST['urunid']."=".$_POST['adet'];
	else
		$_SESSION['sepet']=$_POST['urunid']."=".$_POST['adet'];
	if(isset($_SESSION['k_ad']))
	{
		$sepet=$_SESSION['sepet'];
		$duzenle=mysqli_query($baglanti,"UPDATE uye SET k_sepet='$sepet' WHERE k_id=".$_SESSION['k_id']);
	}$id=$_POST['urunid'];
	header("location:product_details.php?id=$id");
}
?>