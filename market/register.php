<?php
include "ust.php";
?>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<?php
include "sidebar.php";
?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Anasayfa </a> <span class="divider">/</span></li>
		<li class="active">Kayıt Ol</li>
    </ul>
	<h3> Kayıt Ol</h3>	
	<div class="well">

	<form id="kayıt"class="form-horizontal" method="POST"action="kayit.php" >
		<h4>Kişisel Bilgiler</h4>
		<div class="control-group">
		<label class="control-label">Cinsiyet <sup>*</sup></label>
		<div class="controls">
		<select class="span2" name="k_cinsiyet" >
			<option >-</option>
			<option value="1">Erkek</option>
			<option value="0">Kız</option>
		</select>
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ad">Ad <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="ad" id="ad" required="required" placeholder="Ad">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Soyad <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="soyad" id="inputLnam" required="required" placeholder="Soyad">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">E posta <sup>*</sup></label>
		<div class="controls">
		  <input type="email" name="k_mail" id="input_email" placeholder="E posta" required="required">
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Şifre <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="k_sifre" id="inputPassword1" required="required" placeholder="Şifre">
		</div>
		</div> 
		<div class="control-group">
		<label class="control-label">Doğum Tarihi <sup>*</sup></label>
		<div class="controls">
			<input type="date" name="k_dogumtrh" id="dogumtarihi" required="required" min="1900-01-01" max="date(y-m-d)">
		</div>
	  </div>

		<div class="control-group">
			<label class="control-label" for="mobile"> Cep Telefonu </label>
			<div class="controls">
			  <input type="text" name="k_tel" name="mobile" id="mobile" placeholder="555 444 33 22"/>
			</div>
		</div>
		
	<p><sup>*</sup>Doldurulması zorunlu alan	</p>
	<?php
	if(@$_GET['ok'])
	{ ?>
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>KAYIT Başarılı</strong>
	</div>
	<?php }
	if(@$_GET['kayıtlı']){?>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Kullanıcı Zaten Kayıtlı</strong>
	 </div><?php }
	 if(@$_GET['hata']){ ?>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Kayıt Başarısız ! </strong>
	 </div><?php } ?>
	
	<div class="control-group">
			<div class="controls">
				
				<input class="btn btn-large btn-success" type="submit" value="Kayıt Ol" />
			</div>
		</div>		
	</form>
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