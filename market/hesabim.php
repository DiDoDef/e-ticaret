<?php
include "ust.php";
include "hesabim_kontrol.php";
?>
<!-- Header End====================================================================== -->
<div id="mainBody">
<div class="container">
<?php
include "hesabim_side.php";
?>
<div class="span8">



<div class="well well-small">
<div class="header-div"><b>
Ad Soyad </b>: <?php echo $_SESSION['k_ad']; ?>
</div><hr class="soft">
<div class="header-div"><b>
Mail </b>: <?php echo $_SESSION['k_mail']; ?>
</div><hr class="soft">
<div class="header-div"><b>
Kullanıcı Adı </b>: <?php if($_SESSION['k_cinsiyet']){echo "Erkek";}else{echo "Kız";}; ?>
</div><hr class="soft">
<div class="header-div"><b>
Adres </b>: <?php echo $_SESSION['k_adres']; ?>
</div><hr class="soft">
<div class="header-div"><b>
Cep No </b>: <?php echo $_SESSION['k_tel']; ?>
</div><hr class="soft">
<div class="header-div"><b><b>
Doğumtarihi </b>: <?php echo $_SESSION['k_dogumtrh']; ?>
</div><hr class="soft">
<div class="header-div"><b>
Kayıt Tarihi </b>: <?php echo $_SESSION['k_kayit_tarih']; ?>
</div>


</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<?php
include "alt.php";
?>