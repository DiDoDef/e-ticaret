<?php 
include"Ust.php";
if(!isset($_GET['id']))
{
$_GET['id']=0;
}
$Urun=$db->prepare("SELECT * FROM urun WHERE urun_id=?");
$Urun->execute(array(intval($_GET['id'])));
$Urun=$Urun->fetch();
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ürünler</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Ürün detay</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

<?php 
if(isset($_GET['Durum']))
{
  if($_GET['Durum'])
  {
?>
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Güncelleme Yapıldı</strong>
                  </div>
<?php
  }
  else
  {
?>
                  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Güncelleme YAPILAMADI !!!</strong>
                  </div>
<?php
  }
}

 ?>


            <form action="urun_guncelle.php" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>

              
              <span class="section"><?php echo $Urun['urun_adi'];?></span>
			  <input type="hidden" name="urun_id" value="<?php echo $Urun['urun_id'];?>">

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_adi">Ürünün adı
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="urun_adi" class="form-control col-md-7 col-xs-12"   name="urun_adi" value="<?php echo $Urun['urun_adi']; ?>" placeholder="Ürün adını giriniz " required="required" type="text">
                </div>
              </div>
			  <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_aciklama">Açıklama
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="urun_aciklama" class="form-control col-md-7 col-xs-12"   name="urun_aciklama" value="<?php echo $Urun['urun_aciklama']; ?>" placeholder="Ürün adını giriniz " required="required" type="text">
                </div>
              </div>
			  <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_fiyat">Fiyat
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="urun_fiyat" class="form-control col-md-7 col-xs-12"   name="urun_fiyat" value="<?php echo $Urun['urun_fiyat']; ?>" placeholder="Ürün adını giriniz " required="required" type="text">
                </div>
              </div>
			  <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_indirim">İndirim (%)
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="urun_indirim" class="form-control col-md-7 col-xs-12"   name="urun_indirim" value="<?php echo $Urun['urun_indirim']; ?>" placeholder="Ürün adını giriniz " required="required" type="text">
                </div>
              </div>
			  <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_stok">Stok
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="urun_stok" class="form-control col-md-7 col-xs-12"   name="urun_stok" value="<?php echo $Urun['urun_stok']; ?>" placeholder="Ürün adını giriniz " required="required" type="text">
                </div>
              </div>
			  <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_vitrin">Vitrin durumu
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  id="urun_vitrin" class="form-control col-md-7 col-xs-12" name="urun_vitrin" value="<?php echo $Urun['urun_vitrin']; ?>" type="text">
				  
                </div>
              </div>
			  <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_kategori_id">Kategori
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="urun_kategori_id" class="form-control col-md-7 col-xs-12"   name="urun_kategori_id" value="<?php echo $Urun['urun_kategori_id']; ?>" placeholder="Ürün adını giriniz " required="required" type="text">
                </div>
              </div>
			  <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_renk">Renk
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="urun_renk" class="form-control col-md-7 col-xs-12"   name="urun_renk" value="<?php echo $Urun['urun_renk']; ?>" placeholder="Ürün adını giriniz " required="required" type="text">
                </div>
              </div>
			  <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_beden">Beden
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="urun_beden" class="form-control col-md-7 col-xs-12"   name="urun_beden" value="<?php echo $Urun['urun_beden']; ?>" placeholder="Ürün adını giriniz " required="required" type="text">
                </div>
              </div>
			  <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_marka">Marka
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="urun_marka" class="form-control col-md-7 col-xs-12"   name="urun_marka" value="<?php echo $Urun['urun_marka']; ?>" placeholder="Ürün adını giriniz " required="required" type="text">
                </div>
              </div>
			  
			  <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_resim">resim adı
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="urun_resim" class="form-control col-md-7 col-xs-12"   name="urun_resim" value="<?php echo $Urun['urun_resim']; ?>" placeholder="Ürün adını giriniz " required="required" type="text">
                </div>
              </div>
			  
			  <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <button id="send" type="submit" class="btn btn-success"><?php echo($_GET['id']>0?'GÜNCELLE':'EKLE') ?></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<?php 
include"Alt.php";
?>