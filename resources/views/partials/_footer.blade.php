<!--Footer-->
<!--footer -->
 <?php
  $fromYear = 2017; 
  $thisYear = (int)date('Y'); 
  ?>
<hr>
<div class="footer-container">
  <div class="row">
      <div class="col-md-8 top-spacing">
        <p align="left"><span class="vertcal-line"></span>&copy;{{ $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '') }} codellipse.com, All Rights Reserved.</p>
      </div>
      <div class="col-md-4 top-spacing">
            <div class="social-block">
              <a href="#">
                <i class="icon-facebook" aria-hidden="true">
                  <span>Facebook</span>
                </i>
              </a>
              
               <a href="#">
                <i class="icon-twitter" aria-hidden="true">
                  <span>Twitter</span>
                </i>
              </a>
              
              <a href="#">
                <i class="icon-google-plus" aria-hidden="true">
                  <span>Gmail plus</span>
                </i>
              </a>

              <a href="#">
                <i class="icon-youtube" aria-hidden="true">
                  <span>Youtube</span>
                </i>
              </a>
            </div>
      </div>
     {{--  <div class="col-md-4">
        <p align="center"><span class="vertcal-line"></span> About me is going to update soon... </p>  
      </div>  --}}
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