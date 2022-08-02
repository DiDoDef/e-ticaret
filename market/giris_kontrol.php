<?php
include "baglan.php";

if(NULL!==($_POST['k_mail']&&$_POST['k_sifre']))
{	
@session_destroy();
ob_start();
session_start();
	$k_mail=$_POST['k_mail'];
	$k_sifre=$_POST['k_sifre'];
	
	$sql = "SELECT *  FROM `uye` WHERE k_mail='$k_mail' AND k_sifre='$k_sifre'";
	$sonuc=mysqli_query($baglanti, $sql);
	if (mysqli_num_rows($sonuc) === 1) {
	$giris = mysqli_fetch_assoc($sonuc);
	if ($giris['k_mail'] === $k_mail && $giris['k_sifre'] === $k_sifre) {
		$ad=preg_replace("/"," ",$giris['k_ad']);
		$_SESSION['k_ad']=$giris['k_ad']." ".$giris['k_soyad'];
		$_SESSION['k_id']=$giris['k_id'];
		$_SESSION['k_mail']=$giris['k_mail'];
		$_SESSION['k_adres']=$giris['k_adres'];
		$_SESSION['k_tel']=$giris['k_tel'];
		$_SESSION['k_cinsiyet']=$giris['k_cinsiyet'];
		$_SESSION['k_kayit_tarih']=$giris['k_kayit_tarih'];
		$_SESSION['k_songiris']=$giris['k_songiris'];
		$_SESSION['k_dogumtrh']=$giris['k_dogumtrh'];
		$_SESSION['sepet']=$giris['k_sepet'];
		header ("location:index.php");
		exit();
	}
	else 
	{
		header("location:login.php?1");
		exit();
	}
	}
	else{
		header("location:login.php?2");
		exit();
	}
}
else
{
	header("location:login.php?3");
}
?>