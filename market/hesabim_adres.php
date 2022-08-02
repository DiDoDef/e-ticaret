<?php
include "ust.php";
include "hesabim_kontrol.php";
?>
<!-- Header End====================================================================== -->
<div id="mainBody">
<div class="container">
<div class="row-fluid">
<?php
include "hesabim_side.php";
$adres="";
@$adres=$_SESSION['k_adres'];
?>
<div class="span8">
<div class="well well-small">
	<form class="form-horizontal" method="GET" action="">
	<div class="control-group">
	<input type="hidden" name="action" value="" >
            <label class="control-label" for="adres">Adres:</label>
            <div class="controls">
              <textarea class="input-xxlarge" id="adres" name="k_adres" value="$adres" rows="3"></textarea>

            </div>
			<div class="form-action">
			<button type="submit" class="btn btn-primary pull-right" >Kaydet</button>
			</div>
          </div>
		  <?php
		  if(@$_GET['action']){
		  $k_adres=$_GET['k_adres'];
$sql = "UPDATE `uye` SET `k_adres` ='$k_adres' WHERE `uye`.`k_id` =".$_SESSION['k_id'];

		  }

?>
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