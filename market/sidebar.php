	<?php 
	?>
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="product_summary.php"><img src="themes/images/ico-cart.png" alt="cart"><?php echo count($urunsepet); ?> Ürün sepette  <span class="badge badge-warning pull-right">TL<?php echo $toplamfiyat; ?></span></a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<!--<li class="subMenu open"><a> ELEKTRONİK [230]</a>
				<ul>
				<li><a class="active" href="products.php"><i class="icon-chevron-right"></i>Kamera (100) </a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Bilgisayar, Tablet ve Laptop (30)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Telefon (80)</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> KIYAFETLER [840] </a>
			<ul style="display:none">
				<li><a href="products.php"><i class="icon-chevron-right"></i>BAYAN (45)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>BAY (8)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>ÇOCUK (5)</a></li>
			</ul>
			</li>
			<li class="subMenu"><a>KİTAP [18]</a>
			<ul style="display:none">
				<li><a href="products.php"><i class="icon-chevron-right"></i>BİLİM KURGU(45)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>FELSEFE (8)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>TARİH (5)</a></li>												
			</ul>
			</li>
			<li class="subMenu"><a href="products.php">SPOR  [58]</a>
			<ul style="display:none">
				<li><a href="products.php"><i class="icon-chevron-right"></i>GİYİM (45)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>AĞIRLIK (8)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>PROTEİN TOZU 
(5)</a></li>												
			</ul></li>-->
			<?php $kategori=$db->query("SELECT urun_kategori_id FROM urun GROUP BY urun_kategori_id ");
while($Urun_kat=$kategori->fetch()){
	if($Urun_kat['urun_kategori_id']=='0') continue;
	?>
				<li><a href="products.php?kat=<?php echo $Urun_kat['urun_kategori_id']; ?>"><i class="icon-chevron-right"></i><?php echo $Urun_kat['urun_kategori_id']; ?></a></li>												
	
	<?php

	
}
?>
		</ul>
		<?php
				$YeniUrunler=$db->query("SELECT * FROM urun WHERE urun_vitrin=1 ORDER BY RAND() LIMIT 4");
				while($Urun=$YeniUrunler->fetch()){
					UrunSide($Urun);
				}
?>
	</div>