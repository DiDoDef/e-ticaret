<?php
include "ust.php";
?>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<?php
include "sidebar.php";
?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Anasayfa</a> <span class="divider">/</span></li>
		<li class="active">�ifremi Unuttum</li>
    </ul>
	<h3> �ifremi Unuttum </h3>	
	<hr class="soft"/>
	
	<div class="row">
		<div class="span9" style="min-height:900px">
			<div class="well">
			<h5>�ifreni yenile</h5><br/>
			L�tfen e posta adresinizi giri. Size g�nderece�imiz e postadan �ifrenizi yenileyebilirsiniz<br/>.
			<form>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">E posta adresi</label>
				<div class="controls">
				  <input class="span3"  type="text" id="inputEmail1" placeholder="E posta">
				</div>
			  </div>
			  <div class="controls">
			  <button type="submit" class="btn block">G�nder</button>
			  </div>
			</form>
		</div>
		</div>
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