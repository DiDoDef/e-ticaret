	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Anasayfa</a> <span class="divider">/</span></li>
		<li class="active"> Alışveriş Sepetim</li>
    </ul>
	<h3>  Alışveriş Sepetim [ <small><?php echo count($urunsepet); ?> Ürün </small>]<a href="products.php" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Alışverişe Devam Et </a></h3>	
	
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Ürün</th>
                  <th>Ürün adı</th>
                  <th>Adet</th>
				  <th>Fiyat</th>
                  <th>İndirim</th>
                  <th>TOPLAM</th>
				</tr>
              </thead>
              <tbody>
            <?php 
				$toplamindirim=0;
				$rawfiyat=0;
				if(strlen($_SESSION['sepet'])>1){
				for($i=0 ; $i<count($urunsepet) ; $i++ )
				{
				$urunsepet1=explode("=",$urunsepet[$i]);
				$urunid=$urunsepet1[0];
				$sql=("SELECT * FROM urun WHERE urun_id='$urunid'");
				$tara=mysqli_query($baglanti,$sql);
				$sonuc=mysqli_fetch_assoc($tara);
			?>
				    <tr>
                  <td> <img width="60" src="themes/images/products/<?php echo $sonuc['urun_resim'] ; ?>" alt=""/></td>
                  <td><?php echo $sonuc['urun_adi']; ?></td>
				  <td>
				  <div class="input-append"><input class="span1" style="max-width:34px" placeholder="<?php echo $urunsepet1[1]; ?>" id="appendedInputButtons<?php echo $sonuc['urun_id']; ?>" size="16" type="text">
				  <!-- <button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button> -->
				  <button class="btn btn-danger" type="button" onclick="window.location.href='sil.php?id=<?php echo $urunsepet[$i]; ?>'"><i class="icon-remove icon-white"></i></button></div>
				  </td>
                  <td><?php echo number_format($sonuc['urun_fiyat'],0, ",","."); $rawfiyat=($sonuc['urun_fiyat']*$urunsepet1[1])+$rawfiyat; ?> TL</td>
                  <td><?php if($sonuc['urun_indirim']==0)echo "yok"; 
				  else {
				  echo ($sonuc['urun_fiyat']/100)*$sonuc['urun_indirim']." TL";
				  $toplamindirim=((($sonuc['urun_fiyat']/100)*$sonuc['urun_indirim'])*$urunsepet1[1])+$toplamindirim; } ?></td>
                  <td><?php if($sonuc['urun_indirim']!=0){
				  echo ($sonuc['urun_fiyat']-(($sonuc['urun_fiyat']/100)*$sonuc['urun_indirim']))*$urunsepet1[1];}
				  else echo number_format($sonuc['urun_fiyat'],0, ",",".");
				  ?> TL</td>
                </tr>
				<?php 
				}
				}
				?>
				 <tr>
                  <td colspan="5" style="text-align:right">TOPLAM Fiyat:	</td>
                  <td> <?php echo number_format($rawfiyat,0, ",","."); ?> TL</td>
                </tr>
				 <tr>
                  <td colspan="5" style="text-align:right">TOPLAM İndirim:	</td>
                  <td> <?php echo number_format($toplamindirim,0, ",","."); ?> TL</td>
                </tr>
				 <tr>
                  <td colspan="5" style="text-align:right"><strong>TOPLAM (<?php echo $rawfiyat." TL - ".$toplamindirim." TL" ?>) =</strong></td>
                  <td class="label label-important" style="display:block"> <strong> <?php echo $toplamfiyat; ?> TL </strong></td>
                </tr>
				</tbody>
            </table>
		
		
            <table class="table table-bordered">
			<tbody>
				 <tr>
                  <td> 
				<form class="form-horizontal">
				<div class="control-group">
				<label class="control-label"><strong> Promosyon kodu: </strong> </label>
				<div class="controls">
				<input type="text" class="input-medium" placeholder="KOD">
				<button type="submit" class="btn"> Ekle </button>
				</div>
				</div>
				</form>
				</td>
                </tr>
				
			</tbody>
			</table>	
	<a href="index.php" class="btn btn-large"><i class="icon-arrow-left"></i> Alışverişe Devam et </a>
	<a href="login.php" class="btn btn-large pull-right">İleri <i class="icon-arrow-right"></i></a>
	
</div>
</div></div>
</div>