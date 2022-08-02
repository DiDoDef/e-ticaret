<?php 
include"Ust.php";
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ürün Liste</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
                    <h2>Ürünlerin Listesi</h2>
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
                    <strong>Ürün Silinidi</strong>
                  </div>
<?php
  }
  else
  {
?>
                  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Ürün Silinemedi !!!</strong>
                  </div>
<?php
  }
}

 ?>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
							<th></th>
                          <th>Ürün adı</th>
                          <th>Fiyatı</th>
                          <th>Stok</th>
                          <th>Vitrin</th>
                          <th>Kategori</th>
                          <th>Marka</th>
                          <th>Görüntülenme</th>
							<th></th>
						</tr>
                      </thead>

                      <tbody>
					  <?php  
						$Urunler=$db->query("SELECT * FROM urun ORDER BY urun_adi");
						while($Urun=$Urunler->fetch()){
							if($Urun['urun_id']==0)
								continue;
							$indirimlifiyat="";
							if($Urun['urun_indirim']>0)
							{
								$indirimlifiyat=$Urun['urun_fiyat']-($Urun['urun_fiyat']*$Urun['urun_indirim']/100);
								$indirimlifiyat="<br>".number_format($indirimlifiyat,2,",",".")."₺";
							}
							$Urun['urun_fiyat']=number_format( $Urun['urun_fiyat'],2,",",".")."₺";
							if($Urun['urun_indirim']>0)
							{
								$Urun['urun_fiyat']="<del>".$Urun['urun_fiyat']."</del>";
							}
					  ?>
                        <tr>
						  <td><a href="urundetay.php?id=<?php echo $Urun['urun_id']; ?>" ><i class="fa fa-edit"></i></td>
                          <td><?php echo $Urun['urun_adi']; ?></td>
                          <td align="right"><?php echo $Urun['urun_fiyat'].$indirimlifiyat ?></td>
                          <td><?php echo $Urun['urun_stok']; ?></td>
                          <td><input type="checkbox" name="" <?php echo $Urun['urun_vitrin']?'checked="checked"':''; echo $Urun['urun_vitrin']; ?></td>
                          <td><?php echo $Urun['urun_kategori_id']; ?></td>
                          <td><?php echo $Urun['urun_marka']; ?></td>
                          <td><?php echo number_format($Urun['urun_gosterilme'],0,",","."); ?></td>
						  <td><a href="urun_sil.php?id=<?php echo $Urun['urun_id']; ?>" ><i class="fa fa-trash"></i></td>
                        </tr>
						<?php
						}
						?>
                      </tbody>
                    </table>
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