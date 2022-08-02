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
<h4>Son Girişler:
</h4>
<div class="header-div">
<?php echo $_SESSION['k_songiris']; ?>
</div><hr class="soft">


</div>
</div>

</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer =================================== -->
<?php
include "alt.php";
?>