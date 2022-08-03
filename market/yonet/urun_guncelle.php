<?php
include "../baglan.php";

if(isset($_POST['urun_id']))
{
	if($_POST['urun_id']>0)
	{
		$guncelle=$db->prepare("UPDATE urun SET
		urun_adi=:urun_adi,
		urun_aciklama=:urun_aciklama,
		urun_fiyat=:urun_fiyat,
		urun_indirim=:urun_indirim,
		urun_stok=:urun_stok,
		urun_vitrin=:urun_vitrin,
		urun_kategori_id=:urun_kategori_id,
		urun_renk=:urun_renk,
		urun_beden=:urun_beden,
		urun_marka=:urun_marka,
		urun_resim=:urun_resim
		WHERE urun_id=:urun_id
		");
		$Durum=$guncelle->execute(array(
		
		"urun_adi"=>$_POST["urun_adi"],
		"urun_aciklama"=>$_POST["urun_aciklama"],
		"urun_fiyat"=>$_POST["urun_fiyat"],
		"urun_indirim"=>$_POST["urun_indirim"],
		"urun_stok"=>$_POST["urun_stok"],
		"urun_vitrin"=>$_POST["urun_vitrin"],
		"urun_kategori_id"=>$_POST["urun_kategori_id"],
		"urun_renk"=>$_POST["urun_renk"],
		"urun_beden"=>$_POST["urun_beden"],
		"urun_marka"=>$_POST["urun_marka"],
		"urun_resim"=>$_POST["urun_resim"],
		"urun_id"=>$_POST["urun_id"]
			)
		);
		
		header("location:urundetay.php?id=".intval($_POST['urun_id']));
		exit;
	}
	else
	{
		$ekle=$db->prepare("INSERT INTO urun(urun_adi,urun_aciklama,urun_fiyat,urun_indirim,urun_stok,urun_vitrin,urun_kategori_id,urun_renk,urun_beden,urun_marka,urun_resim) VALUES(:urun_adi,:urun_aciklama,:urun_fiyat,:urun_indirim,:urun_stok,:urun_vitrin,:urun_kategori_id,:urun_renk,:urun_beden,:urun_marka,:urun_resim)");
				$Durum=$ekle->execute(array(
		
		"urun_adi"=>$_POST["urun_adi"],
		"urun_aciklama"=>$_POST["urun_aciklama"],
		"urun_fiyat"=>$_POST["urun_fiyat"],
		"urun_indirim"=>$_POST["urun_indirim"],
		"urun_stok"=>$_POST["urun_stok"],
		"urun_vitrin"=>$_POST["urun_vitrin"],
		"urun_kategori_id"=>$_POST["urun_kategori_id"],
		"urun_renk"=>$_POST["urun_renk"],
		"urun_beden"=>$_POST["urun_beden"],
		"urun_resim"=>$_POST["urun_resim"],	
		"urun_marka"=>$_POST["urun_marka"]		
			)
		);
		$urun_id=$db->lastInsertid();
		header("location:urundetay.php?id=".intval($urun_id));
		exit;
	}
}
?>