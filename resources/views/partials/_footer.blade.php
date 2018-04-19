<!--Footer-->
<!--footer -->
 <?php
  $fromYear = 2017; 
  $thisYear = (int)date('Y'); 
  ?>
<hr>
<div class="footer-container">
  <div class="row">
      <div class="col-md-4">
        <p align="center"><span class="vertcal-line"></span>&copy;{{ $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '') }} codellipse.com, All Rights Reserved.</p>
      </div>
      <div class="col-md-4">
        <div align="center"><span class="vertcal-line"></span>
          <a href="#"  class="social-links border"><img src="/images/socials/facebook.svg" alt="my pic"></a>
          <a href="#"  class="social-links border"><img src="/images/socials/twitter.svg" alt="my pic"></a>
          <a href="#"  class="social-links border"><img src="/images/socials/youtube.svg" alt="my pic"></a>
          <a href="#"  class="social-links border"><img src="/images/socials/linkedin.svg" alt="my pic"></a>
         </div>
      </div>
      <div class="col-md-4">
        <p align="center"><span class="vertcal-line"></span> About me is going to update soon... </p>  
      </div> 
  </div>
</div>
<!--<div class="footer-container">
  <div class="row border">
    <div class="col-md-6 border">
	      <h4>About Me -</h4>
	      <div class="row">
		      <div class="col-md-2 border">
		      	  <img src="images/profile_pic.svg" alt="my pic">
		      </div>
		      <div class="col-md-10 border">
		      	<p> this is the content part</p>
		      </div>
	     </div>    
    </div>
    <div class="col-md-2 border">
     	<h4>Join me -</h4>
     	<div class="row">
     		<div class="col-md-3 social-links border">
     			<a href="#"><img src="images/socials/facebook.svg" alt="my pic"></a>
     			<a href="#"><img src="images/socials/twitter.svg" alt="my pic"></a>
     			<a href="#"><img src="images/socials/youtube.svg" alt="my pic"></a>
     			<a href="#"><img src="images/socials/linkedin.svg" alt="my pic"></a>
     		</div>
     	</div>
    </div>
    <div class="col-md-4 border">
       <h4>fast way to explore -</h4>
    </div>
  </div>
</div> -->

<!--<div class="footer-container">
  <div class="row" >
    <div class="col-xl border-test">
      One of three columns
    </div>
    <div class="col-xl border-test">
      One of three columns
    </div>
    <div class="col-xl border-test">
      One of three columns
    </div>
  </div>
</div> -->