<?php
function UrunListeGorunum($Urun)
{
	
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
				?>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.php?id=<?php echo $Urun['urun_id']; ?>"><img src="themes/images/products/<?php echo $Urun['urun_resim']; ?>" alt="<?php echo $Urun['urun_adi']; ?>"/></a>
					<div class="caption">
					  <h5><?php echo $Urun['urun_adi']; ?></h5>

					 
					  <h4 style="text-align:center"><a class="btn" href="product_details.php?id=<?php echo $Urun['urun_id']; ?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="product_details.php?id=<?php echo $Urun['urun_id']; ?>" >Ekle <i class="icon-shopping-cart"></i></a> <br> <a class="btn btn-primary" href="product_details.php?id=<?php echo $Urun['urun_id'] ?>"> <?php echo $Urun['urun_fiyat'].$indirimlifiyat ?></a></h4>
					</div>
				  </div>
				</li>
				<?php
				
};
function UrunVitrinGorunum($Urun)
{
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
?>

				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.php?id=<?php echo $Urun['urun_id']; ?>"><img src="themes/images/products/<?php echo $Urun['urun_resim']; ?>" alt="<?php echo $Urun['urun_adi']; ?>"></a>
					<div class="caption">
					  <h5><?php echo $Urun['urun_adi']; ?></h5>
					  <h4><a class="btn" href="product_details.php?id=<?php echo $Urun['urun_id']; ?>">Göz at</a> <span class="pull-right"> <?php echo $Urun['urun_fiyat'].$indirimlifiyat ?></span></h4>
					</div>
				  </div>
				</li>
<?php
};
function UrunlistelemeGorunum($Urun)
{
$indirimlifiyat="";
							if($Urun['urun_indirim']>0)
							{
								$indirimlifiyat=$Urun['urun_fiyat']-($Urun['urun_fiyat']*$Urun['urun_indirim']/100);
								$indirimlifiyat="".number_format($indirimlifiyat,2,",",".")."₺";
							}
							$Urun['urun_fiyat']=number_format( $Urun['urun_fiyat'],2,",",".")."₺";
							if($Urun['urun_indirim']>0)
							{
								$Urun['urun_fiyat']="<del>".$Urun['urun_fiyat']."</del>";
							}
?>
		<div class="row">	  
			<div class="span2"><a href="product_details.php?id=<?php echo $Urun['urun_id']; ?>">
			<img src="themes/images/products/<?php
 echo $Urun['urun_resim'];
?>" alt="<?php echo $Urun['urun_adi']; ?>"/>
			</a></div>
			<div class="span4">
				<a href="product_details.php?id=<?php echo $Urun['urun_id']; ?>">
				<h3><?php echo $Urun['urun_adi']; ?></h3></a>
				<hr class="soft"/>
				<h5></h5>
				<p><?php echo $Urun['urun_aciklama']; ?></p>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
			<form class="form-horizontal qtyFrm">
			<h3> <?php echo $Urun['urun_fiyat'].$indirimlifiyat ?> </h3>
			<!--<label class="checkbox">
				<input type="checkbox">  Karşılaştırmaya ekle
			</label>-->
				<br/>
			  <a href="product_details.php?id=<?php echo $Urun['urun_id']; ?>" class="btn btn-large btn-primary"> Ekle <i class=" icon-shopping-cart"></i></a>
			  <a href="product_details.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>
				</form>
			</div>
	</div>
	<hr class="soft"/>
	<?php
};
function UrunSide($Urun)
{
	$indirimlifiyat="";
							if($Urun['urun_indirim']>0)
							{
								$indirimlifiyat=$Urun['urun_fiyat']-($Urun['urun_fiyat']*$Urun['urun_indirim']/100);
								$indirimlifiyat="".number_format($indirimlifiyat,2,",",".")."₺";
							}
							$Urun['urun_fiyat']=number_format( $Urun['urun_fiyat'],2,",",".")."₺";
							if($Urun['urun_indirim']>0)
							{
								$Urun['urun_fiyat']="<del>".$Urun['urun_fiyat']."</del>";
							}
?>
			<br/>
			<div class="thumbnail">
				<img src="themes/images/products/<?php echo $Urun['urun_resim']; ?>" title="Bootshop New Kindel" alt="<?php echo $Urun['urun_adi']; ?>">
				<div class="caption">
				  <h5><?php echo $Urun['urun_adi']; ?></h5>
				    <h4 style="text-align:center"><a class="btn" href="product_details.php?id=<?php echo $Urun['urun_id']; ?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="product_summary.php">Ekle <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="product_details.php?id=<?php echo $Urun['urun_id']; ?>"><?php echo $Urun['urun_fiyat'].$indirimlifiyat ?> </a></h4>
				</div>
			  </div>
			  <?php
};
?>