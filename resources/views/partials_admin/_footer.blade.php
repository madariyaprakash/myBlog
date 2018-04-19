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
          <a href="#"  class="social-links border"><img src="images/socials/facebook.svg" alt="my pic"></a>
          <a href="#"  class="social-links border"><img src="images/socials/twitter.svg" alt="my pic"></a>
          <a href="#"  class="social-links border"><img src="images/socials/youtube.svg" alt="my pic"></a>
          <a href="#"  class="social-links border"><img src="images/socials/linkedin.svg" alt="my pic"></a>
         </div>
      </div>
      <div class="col-md-4">
        <p align="center"><span class="vertcal-line"></span> About me is going to update soon... </p>  
      </div> 
  </div>
</div>