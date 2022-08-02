<?php

ob_start();
session_start();
try{
	$db =new PDO(""	);  
}
catch(PDOException $e){print $e->getMessage(); exit;}

$Ayar=$db->query("SELECT * FROM ayar")->fetch();
$baglanti=mysqli_connect("");
mysqli_set_charset($baglanti,"utf8_turkish_ci");

?>