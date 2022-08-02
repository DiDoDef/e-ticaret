<?php
include "baglan.php";
include "functions.php";
		$toplamfiyat=0;
		@$urunsepet=explode(", ",$_SESSION['sepet']);
		
		for($i=0 ; $i<count($urunsepet) ; $i++ )
		{
		$urunsepet1=explode("=",$urunsepet[$i]);
		$urunid=$urunsepet1[0];
		$sql=("SELECT urun_fiyat, urun_indirim FROM urun WHERE urun_id='$urunid'");
		$tara=mysqli_query($baglanti,$sql);
		$fyt=mysqli_fetch_assoc($tara);
		if($fyt['urun_indirim']==0)
		@$toplamfiyat=($fyt['urun_fiyat']*$urunsepet1[1])+$toplamfiyat;
		else
		$toplamfiyat=(($fyt['urun_fiyat']-(($fyt['urun_fiyat']/100)*$fyt['urun_indirim']))*$urunsepet1[1])+$toplamfiyat;
		}
		$toplamfiyat=number_format($toplamfiyat,0,",",".");
?>
<!DOCTYPE html>
<html lang="tr">
  <head>
  <!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->
    <meta name="google-site-verification" content="N6kNOM8QA5q20Q17GfX2MkHos6pFay2mjxiqdZrhqWE" />
    <title><?php echo $Ayar['ayar_baslik']; ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $Ayar['ayar_description']; ?>">
    <meta name="keywords" content="<?php echo $Ayar['ayar_keywords']; ?>">
    <meta name="author" content="muhammed ali durak">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style><meta charset="utf8-turkish-ci">
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
<?php
if(isset($_SESSION['k_ad'])){
?>
	<div class="span6">Hoşgeldin!<strong> <a href="hesabim.php"><?php echo $_SESSION['k_ad'] ?></a></strong></div>
	<?php
}
else{
?> 
	<div class="span6">Hoşgeldin!<strong> </strong></div>
<?php
}
?>
	<div class="span6">
	<div class="pull-right">
		<a href="product_summary.php">
		<span class="btn btn-mini">TL<?php echo $toplamfiyat; ?></span>
		<span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ <?php echo count($urunsepet); ?> ] Ürün sepette </span> </a> 
	</div>
	</div>
</div>

<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="./index.php"><img src="themes/images/logo.gif" alt="Bootsshop"/></a>
	<form class="form-inline navbar-search" method="GET" action="products.php" >
		<!-- <input id="srchFld" class="srchTxt" type="text" /> -->
		  <select id="kat" name="kat" class="srchTxt">
			
			<?php $kategori=$db->query("SELECT urun_kategori_id FROM urun GROUP BY urun_kategori_id ");
while($Urun_kat=$kategori->fetch()){
	if($Urun_kat['urun_kategori_id']=='0') continue;
	?>
			<option  value="<?php echo $Urun_kat['urun_kategori_id']; ?>"><?php echo $Urun_kat['urun_kategori_id']; ?></option>
	<?php

	
}
?>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Git</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="special_offer.php">İndirim ve Kampanyalar</a></li>
	 <li class=""><a href="contact.php">Bize Ulaşın</a></li>
	 <li class=""><a href="galeri.php">Galeri</a></li>
	 <li class="">
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">GİRİŞ</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Üye Girişi</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm"method="POST" action="giris_kontrol.php">
			  <div class="control-group"><label for="eposta">E-posta:</label> 								
				<input type="mail" name="k_mail" id="eposta" required="required" placeholder="E-posta">
			  </div>
			  <div class="control-group"><label for="sifre">Şifre:</label>
				<input type="password" name="k_sifre" id="sifre" id="sifre" required="required" placeholder="Şifre">
			  </div>

			<button type="submit" class="btn btn-success">Giriş yap</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">İptal</button>
			</form>		

			<a href="register.php"><button class="btn btn-success">Kayıt Ol</button></a>
			

		  </div>
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->