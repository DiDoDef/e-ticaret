	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Anasayfa</a> <span class="divider">/</span></li>
		<li class="active"><?php echo $_GET['kat']; ?></li>
    </ul>
	<?php 
	$kat=$_GET['kat'];
	$sayı=mysqli_query($baglanti, "SELECT COUNT(*) FROM urun WHERE urun_kategori_id='$kat';");
	$sayı1 = mysqli_fetch_assoc($sayı);
	?>
	<h3> <?php echo $_GET['kat']; ?> <small class="pull-right"> <?php echo $sayı1['COUNT(*)'] ; ?> Ürün görüntüleniyor </small></h3>	
	<hr class="soft"/>
	
	
	<!--<form class="form-horizontal span6">
		<div class="control-group">
		  <label class="control-label alignL">Sırala </label>
			<select>
              <option>Ürün adı A - Z</option>
              <option>Ürün adı Z - A</option>
              <option>ürün stok</option>
              <option>Fiyata göre</option>
            </select>
		</div>
	  </form>-->
	  
<div id="myTab" class="pull-right">
 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
</div>
<br class="clr"/>
<div class="tab-content">
	<div class="tab-pane" id="listView">

	<?php 
				$kategori=$_GET['kat'];
				$YeniUrunler=$db->query("SELECT * FROM urun  WHERE urun_kategori_id='$kategori' AND urun_id>0 ORDER BY  urun_gosterilme DESC LIMIT 6;");
				while($Urun=$YeniUrunler->fetch()){
					UrunListelemeGorunum($Urun);
				}
?>
	</div>

	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
			<ul class="thumbnails">
				<?php 
				$kategori=$_GET['kat'];
				$YeniUrunler=$db->query("SELECT * FROM urun  WHERE urun_kategori_id='$kategori' AND urun_id>0 ORDER BY  urun_gosterilme DESC LIMIT 6;");
				while($Urun=$YeniUrunler->fetch()){
					UrunListeGorunum($Urun);
				}
?>
			</ul>
			
		</ul>


	<hr class="soft"/>
	</div>
</div>
			</li>
		  </ul>
	<hr class="soft"/>
	</div>
</div>

	<a href="compair.php" class="btn btn-large pull-right">Ürünleri Karşılaştır</a>
<!-- 
	<div class="pagination">
			<ul>
			<li><a href="#">&lsaquo;</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">...</a></li>
			<li><a href="#">&rsaquo;</a></li>
			</ul>
			</div>
			<br class="clr"/> 
-->
</div>
</div>