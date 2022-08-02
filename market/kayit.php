<?php
include "baglan.php";
if($baglanti)
	echo "başarılı";
$mail=$_POST['k_mail'];
$ara=mysqli_query($baglanti,"SELECT * FROM uye WHERE k_mail='$mail'");
if(mysqli_num_rows($ara) == "1")
{ 
    header("location:register.php?kayitli"); 
exit();}
$k_mail=$_POST['k_mail'];
$k_sifre=$_POST['k_sifre'];
$k_ad=$_POST['ad'];
$k_soyad=$_POST['soyad'];
$k_cinsiyet=$_POST['k_cinsiyet'];
$k_tel=$_POST['k_tel'];
$k_dogumtrh=$_POST['k_dogumtrh'];
print_r ($_POST);
$sqlkayit = " INSERT INTO uye 
( 
k_mail, 
k_sifre, 
k_ad, 
k_soyad, 
k_rutbe, 
k_sec, 
k_tel, 
k_cinsiyet, 
k_kayit_tarih, 
k_songiris, 
k_dogumtrh ) 
VALUES 
(
'$k_mail', 
'$k_sifre', 
'$k_ad', 
'$k_soyad', 
'0', 
'0', 
'$k_tel', 
'$k_cinsiyet', 
current_timestamp(),  
current_timestamp(), 
'$k_dogumtrh' ) ";
if($ekle=mysqli_query($baglanti,$sqlkayit))
 header("location:register.php?ok"); // >_< hı...

	echo mysqli_error($baglanti);
//	header("location:register.php?hata");
?>