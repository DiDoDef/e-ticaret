<?php
include "ust.php";

?>
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href="register.php"><img style="width:100%" src="themes/images/carousel/1.png" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.php"><img style="width:100%" src="themes/images/carousel/2.png" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.php"><img src="themes/images/carousel/3.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				</div>
			
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.php"><img src="themes/images/carousel/4.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				</div>
		   
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.php"><img src="themes/images/carousel/5.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
			</div>
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.php"><img src="themes/images/carousel/6.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				</div>
		  </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<?php
include "sidebar.php";
?>
<!-- Sidebar end=============================================== -->
		
	<?php 
	$sayı=mysqli_query($baglanti, "SELECT COUNT(*) FROM urun ");
	$sayı1 = mysqli_fetch_assoc($sayı);
	?>
		<div class="span9">
			<div class="well well-small">
			<h4>Öne Çıkanlar <small class="pull-right"> bu sitede <?php echo $sayı1['COUNT(*)'] ; ?>  ürün var</small></h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
				
				<?php
				$YeniUrunler=$db->query("SELECT * FROM urun WHERE urun_vitrin=1 ORDER BY RAND() LIMIT 4");
				while($Urun=$YeniUrunler->fetch()){
					UrunVitrinGorunum($Urun);
				}
				?>
				
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<?php
				$YeniUrunler=$db->query("SELECT * FROM urun WHERE urun_vitrin=1 ORDER BY RAND() LIMIT 4");
				while($Urun=$YeniUrunler->fetch()){
					UrunVitrinGorunum($Urun);
				}
				?>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<?php
				$YeniUrunler=$db->query("SELECT * FROM urun WHERE urun_vitrin=1 ORDER BY RAND() LIMIT 4");
				while($Urun=$YeniUrunler->fetch()){
					UrunVitrinGorunum($Urun);
				}
				?>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<?php
				$YeniUrunler=$db->query("SELECT * FROM urun WHERE urun_vitrin=1 ORDER BY RAND() LIMIT 4");
				while($Urun=$YeniUrunler->fetch()){
					UrunVitrinGorunum($Urun);
				}
				?>
			  </ul>
			  </div>
			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>
		</div>
		
		<h4 id="yeni">Yeni Ürünler</h4>
			  <ul class="thumbnails">
				<?php
				$YeniUrunler=$db->query("SELECT * FROM urun ORDER BY urun_id DESC LIMIT 6");
				while($Urun=$YeniUrunler->fetch()){
					UrunListeGorunum($Urun);
				}
?>
			  </ul>
			  <hr class="soft"/>
			  <h4 id="populer">Popüler Ürünler</h4>
			  <ul class="thumbnails">
				<?php
				$YeniUrunler=$db->query("SELECT * FROM urun ORDER BY urun_gosterilme DESC LIMIT 6");
				while($Urun=$YeniUrunler->fetch()){
					UrunListeGorunum($Urun);
				}
?>
			  </ul><hr class="soft"/>
			<h4>İndirimli Ürünler</h4>
			  <ul class="thumbnails">
				<?php
				$YeniUrunler=$db->query("SELECT * FROM urun ORDER BY urun_indirim DESC LIMIT 6");
				while($Urun=$YeniUrunler->fetch()){
					UrunListeGorunum($Urun);
				}
?>
			  </ul>			  

		</div>
		</div>
	</div>
</div>
<?php
include "alt.php";
?>