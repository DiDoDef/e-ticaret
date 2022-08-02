<?php
include "ust.php";

?>
<!-- Header End====================================================================== -->
<div id="mainBody">
<div class="container">
	<hr class="soften">
	<h1>Bize Ulaşın</h1>
	<hr class="soften"/>	
	<div class="row">
		<div class="span4">
		<h4>adres ve iletişim</h4>
		<p>	Kırşehir, Merkez<br/> Yenice
			<br/><br/>
			mail: durakmarket@gmail.com<br/>
			﻿Tel 123-456-6780<br/>
			Fax 123-456-5679<br/>
			web:madeneme.epizy.com
		</p>		
		</div>
			
		<div class="span4">
		<h4>Açılma Saatleri</h4>
			<h5>Pazartesi - Cuma</h5>
			<p>09:00 - 21:00<br/><br/></p>
			<h5>Cumartesi Pazar </h5>
			<p>10:00 - 18:00<br/><br/></p>

		</div>
		<div class="span4">
		<h4>Mail atın</h4>
		<form class="form-horizontal" method="POST" action="https://formspree.io/f/xayvdaka">
        <fieldset>
          <div class="control-group">
           
              <input type="text" name="name" placeholder="isim" class="input-xlarge"required="required"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" name="email" placeholder="e posta" class="input-xlarge" required="required"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" name="subject" placeholder="konu" class="input-xlarge" required="required"/>
          
          </div>
          <div class="control-group">
              <textarea rows="3"  id="textarea" name="message" class="input-xlarge"required="required"></textarea>
          </div>

            <button class="btn btn-large" type="submit">Mesajı Gönder</button>

        </fieldset>
      </form>
		</div>
	</div>
	<div class="row">
	<div class="span12">
	<iframe style="width:100%; height:300; border: 0px" scrolling="no" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14&amp;output=embed"></iframe><br />
	<small><a href="https://www.google.com/maps/place/Yenice,+40200+K%C4%B1r%C5%9Fehir+Merkez%2FK%C4%B1r%C5%9Fehir/data=!4m2!3m1!1s0x14d5132dacc00867:0x213768cf23478d66?sa=X&ved=2ahUKEwidkZvi9tb2AhWeSvEDHYTrDm8Q8gF6BAgJEAE" style="color:#0000FF;text-align:left">View Larger Map</a></small>
	</div>
	</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<?php
include "alt.php";
?>