	<?php
$Urun=$db->prepare("SELECT * FROM urun WHERE urun_id=?");
$Urun->execute(array(intval($_GET['id'])));
if($Urun->rowcount()==1)
{
	$Urun=$Urun->fetch();
	$idd=$Urun['urun_id'];
	$db->query("UPDATE urun SET urun_gosterilme=(urun_gosterilme+1) WHERE urun_id='$idd'");
}
 else
 {
	 header("location:./");
	 exit;
 }
 $indirimlifiyat="";
							if($Urun['urun_indirim']>0)
							{
								$indirimlifiyat=$Urun['urun_fiyat']-($Urun['urun_fiyat']*$Urun['urun_indirim']/100);
								$indirimlifiyat="  ".number_format($indirimlifiyat,2,",",".")."₺";
							}
							$Urun['urun_fiyat']=number_format( $Urun['urun_fiyat'],2,",",".")."₺";
							if($Urun['urun_indirim']>0)
							{
								$Urun['urun_fiyat']="<del>".$Urun['urun_fiyat']."</del>";
							}
							$urunkategori=$Urun['urun_kategori_id'];
?>
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="./">Anasayfa</a> <span class="divider">/</span></li>
    <li><a href="products.php?kat=<?php echo $Urun['urun_kategori_id']; ?>"><?php echo $Urun['urun_kategori_id']; ?></a> <span class="divider">/</span></li>
    <li class="active"><?php echo $Urun['urun_adi']; ?></li>
    </ul>	
	<div class="row">	  
			<div id="gallery" class="span3">
            <a href="themes/images/products/<?php echo $Urun['urun_resim']; ?>" title="<?php
echo $Urun['urun_adi'];
?>">
				<img src="themes/images/products/<?php echo $Urun['urun_resim']; ?>" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="themes/images/products/<?php echo $Urun['urun_resim']; ?>"> <img style="width:29%" src="themes/images/products/<?php echo $Urun['urun_resim']; ?>" alt=""/></a>
                  <!-- <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                  </div>
                  <div class="item">
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>-->
                  </div>
                </div>
              <!--  
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> 
			  -->
              </div>
			  
			 <div class="btn-toolbar">
			  <div class="btn-group">
				<span class="btn"><i class="icon-envelope"></i></span>
				<span class="btn" ><i class="icon-print"></i></span>
				<span class="btn" ><i class="icon-zoom-in"></i></span>
				<span class="btn" ><i class="icon-star"></i></span>
				<span class="btn" ><i class=" icon-thumbs-up"></i></span>
				<span class="btn" ><i class="icon-thumbs-down"></i></span>
			  </div>
			</div>
			</div>
			<div class="span6">
				<h3><?php echo $Urun['urun_adi']; ?> </h3>
				<form  class="form-horizontal qtyFrm" method="POST" action="sepet.php">
				  <div class="control-group">
					<input type="hidden" name="urunid" value="<?php echo $Urun['urun_id']; ?>" />
					<label class="control-label"><span><?php echo $Urun['urun_fiyat'].$indirimlifiyat ?></span></label>
					<div class="controls">
					<input type="number" name="adet" value="1" class="span1" placeholder="adet."/>
					  <button type="sumbit" class="btn btn-large btn-primary pull-right"> Sepete Ekle <i class=" icon-shopping-cart"></i></button>
					</div>
				  </div>
				</form>
				
				<hr class="soft"/>
				<h4>stok <?php echo $Urun['urun_stok']; ?></h4>
				<form class="form-horizontal qtyFrm pull-right">
				  <div class="control-group">
					<label class="control-label"><span>Renk</span></label>
					<div class="controls">
					  <select class="span2">
						  <?php
						  
							$renk=explode(",",$Urun['urun_renk']);
								foreach($renk as $b){
								echo "<option>$b</option>";
							}
						  ?>
						</select>
					</div>
				  </div>
				</form>
				<hr class="soft clr"/>
				<p>
				
				
				
				</p>
				<a class="btn btn-small pull-right" href="#detail">Ürün Özellikleri</a>
				<br class="clr"/>
			
			<hr class="soft"/>
			</div>
			
			<div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Ürün Özellikleri</a></li>
              <li><a href="#profile" data-toggle="tab">Benzer Ürünler</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home">
			  <h4>Ürün Bilgileri</h4>
               <!-- <table class="table table-bordered">
				<tbody>
				<tr class="techSpecRow"><th colspan="2">Ürün Detayları</th></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Brand: </td><td class="techSpecTD2">Fujifilm</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Model:</td><td class="techSpecTD2">FinePix S2950HD</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Released on:</td><td class="techSpecTD2"> 2011-01-28</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Dimensions:</td><td class="techSpecTD2"> 5.50" h x 5.50" w x 2.00" l, .75 pounds</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Display size:</td><td class="techSpecTD2">3</td></tr>-->
				
				</tbody>
				</table>
				<p><?php
				echo $Urun['urun_aciklama'];

?>
				
				</p>
              </div>
		<div class="tab-pane fade" id="profile">
		<div id="myTab" class="pull-right">
		 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
		 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
		</div>
		<br class="clr"/>
		<hr class="soft"/>
		<div class="tab-content">
	<div class="tab-pane" id="listView">

	<?php
				$YeniUrunler=$db->query("SELECT * FROM urun WHERE urun_kategori_id='$urunkategori' ORDER BY urun_gosterilme DESC LIMIT 6");
				while($Urun=$YeniUrunler->fetch()){
					UrunListelemeGorunum($Urun);
				}
?>
	</div>

	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
			<ul class="thumbnails">
				<?php
				$YeniUrunler=$db->query("SELECT * FROM urun WHERE urun_kategori_id='$urunkategori' ORDER BY urun_gosterilme DESC LIMIT 6");
				while($Urun=$YeniUrunler->fetch()){
					UrunListeGorunum($Urun);
				}
?>
			</ul>
			
		</ul>


	<hr class="soft"/>
	</div>
</div>
<br class="clr">
					 </div>
		</div>
          </div>

	</div>
</div>
</div> </div>
</div>