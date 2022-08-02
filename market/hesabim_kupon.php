<?php
include "ust.php";
include "hesabim_kontrol.php";
?>
<!-- Header End====================================================================== -->
<div id="mainBody">
<div class="container">
<?php
include "hesabim_side.php";
?>


<div class="span8">
<div class="well well-small">
<?php
if(null==@$_SESSION['k_kupon'])
{echo "Kuponunuz bulunmamaktadır.";}
?>

</div>

</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<?php
include "alt.php";
?>