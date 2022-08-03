<?php 
if($_SESSION['kullanici_yetki']==1 || $_SESSION['k_yetki']==1){}
else{
header("location:login.php?baglan");
exit();
}

?>