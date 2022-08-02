	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Anasayfa</a> <span class="divider">/</span></li>
		<li class="active">Giriş yap</li>
    </ul>
	<h3> Giriş yap</h3>	
	<hr class="soft"/>
	<?php
if(isset($_GET['cikis'])){
	@session_destroy();
	ob_start();
session_start();	}
?>
	<?php
	if(@$_GET['ok'])
	{ ?>
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>KAYIT Başarılı</strong>
	</div>
	<?php }
	 if(@$_GET['hata']){ ?>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Hatalı Giriş! </strong> kullanıcı adı yada şifre yanlış!
	 </div><?php } ?>
	<div class="row">
		<div class="span4">
			<div class="well">
			<h5>Hesap oluştur</h5><br/>
			E posta girin ve Kayıt Olmaya başlayın<br/><br/><br/>
			<form action="register.php" >
			  <div class="control-group">
				<label class="control-label" for="inputEmail0">E posta adresi</label>
				<div class="controls">
				  <input class="span3"  type="text" id="inputEmail0" placeholder="Email">
				</div>
			  </div>
			  <div class="controls">
			  <button type="submit" class="btn block">Hesap oluşturun</button>
			  </div>
			</form>
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>Hesabın var mı ?</h5>
			<form method="POST" action="giris_kontrol.php">
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">E posta</label>
				<div class="controls">
				  <input class="span3" name="k_mail" type="text" id="inputEmail1" placeholder="E posta">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Şifre</label>
				<div class="controls">
				  <input type="password" name="k_sifre" class="span3"  id="inputPassword1" placeholder="Şifre">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Giriş yap</button> <a href="forgetpass.php">şifremi unuttum</a>
				</div>
			  </div>
			</form>
		</div>
		</div>
	</div>	
	
</div>
</div></div>
</div>