<?php
require_once('admin/function.php');
connectdb();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  
    <!--Theme Title-->
    <title>PAPAYE - DRINKS</title>
  

  <!--Meta Tags-->
		<meta name="language" content="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
        
		
		<!-- ================== Theme Styles ==================== -->
		   
		<!--Bootstrap-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!--Font Awesome Link-->
        <link href="css/font-awesome.css" rel="stylesheet">
		
		<!--Main Theme Style-->
        <link rel="stylesheet" type="text/css" href="css/moome.css?v0.9" />

		<!--Style for Animation-->		
        <link href="css/animate.min.css" rel="stylesheet">
					
		<link rel="stylesheet" href="styles/vendor-9a8c5d6d0c.css">
		<link rel="stylesheet" href="styles/main.css">
		
		<!--Favicon-->	
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
			
		<!--Theme Script-->
        <script src="js/jquery-1.11.0.min.js"></script>

		
		
		
	<link rel="stylesheet" href="slider/masterslider/style/masterslider.css" />
	<link href="slider/masterslider/skins/default/style.css" rel="stylesheet" type="text/css">
	<link href="slider/style/ms-fullscreen.css" rel="stylesheet" type="text/css">
	<script src="slider/masterslider/jquery.min.js"></script>
	<script src="slider/masterslider/jquery.easing.min.js"></script>
	<script src="slider/masterslider/masterslider.min.js"></script>
	<link href="slider/masterslider/ms-videogallery.css" rel="stylesheet" type="text/css">	
		
		
		
<script>
      window._config = {
        env: 'prod',
        apiHost: window.location.protocol + '//' + 'thesoftking.com',
      }
    </script>


	
</head>

<body>
		
<!-- ================== Top Nav ==================== -->
		
<div class="all-header">		
<!--Top Nav-->

<!--End of Top Nav-->
		
		
		
<!-- ================== Main Menu for Theme ==================== -->		
		
<!--Main Menu-->
<div id="header">
  <div id="home-phase">
  
	<!--Logo for Big Screen-->
	<div class="brand show-hide">
	  <a href="index.php"><img src="images/logo.png" class="img-responsive" /></a>
	</div>
	<!--Logo for Small Screen-->
	<div class="brand hide-show">
	  <a href="index.php"><img src="images/logo-small-screen.png" class="img-responsive" /></a>
	</div>
	
	<!--Menu for the Theme-->
	<div class="menu">
	  <input type="checkbox" id="menuToggle"/>
	  <label for="menuToggle" class="menu-icon">
		<i class="fa fa-bars"></i>
	  </label>
	  <ul>
		<a href="#menu-phase"><li>MENU</li></a>
		<a href="#contact-phase"><li>CONTACT</li></a>
	  </ul>
	</div>

  </div>
</div> 

</div>

<div id="clearfix"></div>
<!--End of Main Menu-->
		

		
<div class="cat-des-bk">
  <div id="front-slider" class="carousel slide"><!--Slider with interval speed of 40s-->
		<div class="container">
		  <div id="back" style="padding:9% 0px 3% 0px;">
			  <h1>DRINKS</h1>
		  </div>
		</div>
  </div>
</div>
<div id="clearfix"> </div>


		

<div class="cat-sing-bk">
<div class="">

<div id="beauty-box-section">
<div id="beauty-box-carousel">
<?php
 $ddaa = mysql_query("SELECT id, name, price, description, img FROM drinks ORDER BY id DESC");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {
	$string = strtolower($data[1]);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    $url = $string;
 echo "
<div class=\"box-container\">
<div class=\"box\">
<div>
<img class=\"box-image\" src=\"images/items/$data[4]\" alt=\"img\">
<div class=\"box-title\"> <h4>$data[1]</h4> </div>
</div> 

<div class=\"box-content\">
<div class=\"box-info\"><span class=\"pric\">$data[2]</span> </div>
<a href=\"drinks/$data[0]/$url\" class=\"page-scroll box-cta btn btn-book btn-warning\">READ MORE - BOOK</a>
</div></div></div> 
";
	}
 ?>
</div></div>  
</div></div>

		
		
		

<div class="header-bk" id="menu-phase">
<div id="menu-phase-title">
<div class="col-md-12" id="section-title">
	<h1>OUR <span>MENU</span></h1>
	<hr id="sub-a"> 
</div>
</div>
<div class="ms-fullscreen-template" id="slider1-wrapper">
<div class="master-slider ms-skin-default" id="masterslidery">
		     			 
				
<div class="ms-slide slide-1" data-delay="8">
<div class="slide-pattern"></div>
 <img src="masterslider/style/blank.gif">
 <section id="menu-it" >
  <div class="container">
    <div class="row text-center">
     
      <div class="container">
        <div class="row">
		<div class="col-md-3">
			<a href="cat-desserts.php" target="_blank">
            <div class="menu-cat">
              <div class="menu-cat-single">
                <img src="images/desserts.png" alt="" class="img-responsive">
                <figcaption>
                  <p>DESSERTS</p>
                </figcaption>
              </div>
            </div>
			</a>
          </div>

           <div class="col-md-3">
		   <a href="cat-soups.php" target="_blank">
            <div class="menu-cat">
              <div class="menu-cat-single">
                <img src="images/soups.png" alt="" class="img-responsive">
                <figcaption>
                  <p>SOUPS</p>
                </figcaption>
              </div>
            </div>
			</a>
          </div>

           <div class="col-md-3">
		   <a href="cat-maindishes.php" target="_blank">
            <div class="menu-cat">
              <div class="menu-cat-single">
                <img src="images/maindishes.png" alt="" class="img-responsive">
                <figcaption>
                  <p>MAIN DISHES</p>
                </figcaption>
              </div>
            </div>
			</a>
          </div>
			
		 <div class="col-md-3">
		 <a href="cat-rice.php" target="_blank">
            <div class="menu-cat">
              <div class="menu-cat-single">
                <img src="images/rice.png" alt="" class="img-responsive">
                <figcaption>
                  <p>RICE</p>
                </figcaption>
              </div>
            </div>
			</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

</div>
  

  
<div class="ms-slide slide-1" data-delay="8">
<div class="slide-pattern"></div>
<img src="masterslider/style/blank.gif">
<section id="menu-it" >
  <div class="container">
    <div class="row text-center">
     
      <div class="container">
        <div class="row">
           <div class="col-md-3">
		  <a href="cat-drinks.php" target="_blank">
            <div class="menu-cat">
              <div class="menu-cat-single">
                <img src="images/drinks.png" alt="" class="img-responsive">
                <figcaption>
                  <p>DRINKS</p>
                </figcaption>
              </div>
            </div>
			</a>
          </div>

           <div class="col-md-3">
		   <a href="cat-desserts.php" target="_blank">
            <div class="menu-cat">
              <div class="menu-cat-single">
                 <img src="images/na.png" alt="" class="img-responsive">
                <figcaption>
                  <p>STARTERS</p>
                </figcaption>
              </div>
            </div>
			</a>
          </div>

           <div class="col-md-3">
		   <a href="cat-desserts.php" target="_blank">
            <div class="menu-cat">
              <div class="menu-cat-single">
                 <img src="images/na.png" alt="" class="img-responsive">
                <figcaption>
                  <p>WRAPS</p>
                </figcaption>
              </div>
            </div>
			</a>
          </div>
			
		<div class="col-md-3">
		   <a href="cat-desserts.php" target="_blank">
            <div class="menu-cat">
              <div class="menu-cat-single">
                 <img src="images/na.png" alt="" class="img-responsive">
                <figcaption>
                  <p>GRILLS</p>
                </figcaption>
              </div>
            </div>
			</a>
          </div>
		</div>
      </div>
    </div>
  </div>
</section>
</div>  
  
  
         
<div class="ms-slide slide-1" data-delay="8">
<div class="slide-pattern"></div>
<img src="masterslider/style/blank.gif">

<section id="menu-it" >
  <div class="container">
    <div class="text-center">
     
      <div class="">
        <div class="row">
		<div class="col-md-3">
		   <a href="cat-desserts.php" target="_blank">
            <div class="menu-cat">
              <div class="menu-cat-single">
                 <img src="images/na.png" alt="" class="img-responsive">
                <figcaption>
                  <p>BURGERS</p>
                </figcaption>
              </div>
            </div>
			</a>
          </div>

           <div class="col-md-3">
		   <a href="cat-desserts.php" target="_blank">
            <div class="menu-cat">
              <div class="menu-cat-single">
                 <img src="images/na.png" alt="" class="img-responsive">
                <figcaption>
                  <p>SPECIAL</p>
                </figcaption>
              </div>
            </div>
			</a>
          </div>
			
			
		<div class="col-md-3">
		   <a href="cat-desserts.php" target="_blank">
            <div class="menu-cat">
              <div class="menu-cat-single">
                <img src="images/na.png" alt="" class="img-responsive">
                <figcaption>
                  <p>SIDE DICHES</p>
                </figcaption>
              </div>
            </div>
			</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
</div>

</div>
</div>
</div>				
            









<!--Section for Contact Us-->
<div class="contact-us-section" id="contact-phase">
  <div class="container">
  
	<div class="col-md-12" id="section-title">
	  <h1>GET IN TOUCH 
		<span>WITH US</span>
	  </h1>
	  <hr id="sub-a"> 
	</div>
	
	<div>
        <div class="row">

          <div class="col-xs-12 col-md-12">
				   <div class="col-xs-12 col-md-4" style="margin-bottom:20px;">
					<div class="contInfo">
						<img src="images/phone.png" alt="" >
						<p><a href="tel:+44 62 3023 2">+44 62 3023 2</a>, <a href="tel:+44 62 3023 1">+44 62 3023 1</a></p>
			</div>
</div>
				<div class="col-xs-12 col-md-4" style="margin-bottom:10px;">
					<div class="contInfo">
						<img src="images/mail.png" alt="" >
						<p style="font-size:px"><a href="mailto:info@papaye.co.uk">info@papaye.co.uk</a></p>
				</div>
</div>
				<div class="col-xs-12 col-md-4" style="margin-bottom:20px;">
					<div class="contInfo">
						<img src="images/address.png" alt="" >
						<p>22, GreenWood Street. Glasgow <br /></p>
				</div>
</div>
		</div>
		  
		 
		  
 
           <div class="col-xs-12 col-md-12 contact-info">
           
		   
		  
		   <form>
	  
		<div class="col-md-8 col-xs-12">
		  <input name="name"   class="formInput" placeholder="Name (Required)" /> 
		</div>
		
		<div class="col-md-4 col-xs-12">
		  <input name="email"   class="formInput" placeholder="Email (Required)" /> 
		</div>
		
		<div class="col-md-4 col-xs-12">
		  <input name="text"   class="formInput" placeholder="Phone Number" /> 
		</div>
		
		<div class="col-md-4 col-xs-12">
		  <input name="text"   class="formInput" placeholder="City, State, Country" /> 
		</div>
		
		<div class="col-md-4 col-xs-12">
		  <input name="text"   class="formInput" placeholder="How did you hear about us?" /> 
		</div>
		
		<div class="col-md-12 col-xs-12">
		  <textarea name="text" class="formInput" placeholder="Full details about Message... (Required)"></textarea>
		</div>
		
		<div class="col-md-12 col-xs-12">
		  <button type="button" class="quote-submit-button">CLICK TO SUBMIT</button>
		   <div class="loader-buttons">
				<div class="loading-button1">
				</div>
				<div class="loading-button1">
				</div>
				<div class="loading-button2">
				</div>
				<div class="loading-button3">
				</div>
				<div class="loading-button4">
				</div>
			  </div>
			  <h1 class="submit-message">DETAILS SUBMITTED
			  </h1>
		</div>
		
	</form>
		   
		   
		   
		   
          </div>
		  </div>
	</div>
		  
	
	

	  </div>
</div>

   
 
<!-- ================== Contact Us Section for the Theme ==================== -->	
 
<div class="foot-bk">
<div id="footer-section">
  <div class="container">
  
	<div class="col-xs-12 footer-section-social">
	
	  <ul class="footer-icons footer-social">
	  
		<li>
		  <a href="#" class="icoFacebook">
			<i class="fa fa-facebook"></i>
		  </a>
		</li>
		
		<li>
		  <a href="#" class="icoTwitter">
			<i class="fa fa-twitter"></i>
		  </a>
		</li>
		
		<li>
		  <a href="#" class="icoGoogle">
			<i class="fa fa-google-plus"></i>
		  </a>
		</li>
		
		<li>
		  <a href="#" class="icoLinkedin">
			<i class="fa fa-linkedin"></i>
		  </a>
		</li>
		
		<li>
		  <a href="#" class="icoRss">
			<i class="fa fa-rss"></i>
		  </a>
		</li>
		
	  </ul>
	</div>
	
	
</div>
</div>
</div> 
	  
	 

<script type="text/javascript">		
		var slider = new MasterSlider();
		slider.control('arrows' ,{insertTo:'#masterslidery'});	
		slider.setup('masterslidery' , {
			width:1000,
			space:5,
			view:'basic',
			layout:'fullscreen',
			fullscreenMargin:57,
			speed:6,
			loop:true,
			autoplay:true
		});
		
</script>
	  

  
	  
	  
	<script src="scripts/vendor-054099ef82.js"></script> 
	<script src="scripts/plugins-43cf9383be.js"></script> 
	<script src="scripts/main-b709920832.js"></script> 
	<script src="scripts/templates-8ec63d5fd0.js"></script>
	<script src="scripts/tog.js"></script>
	
	
	
	
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<!--Other Main Scripts-->
	<script src="js/moome.js"></script>
    
	<!--Script for Main Slider-->
	<script src="js/main-slider.js"></script>
    
	<!--Script for Porfolio Slider-->
	<script src="js/portfolio-slider.js"></script>
    
	<!--Script for Testimonial Slider-->
	<script src="js/testimonial-slider.js"></script>
	
	<!-- Smoothscroll Script-->
	<script src="js/smoothscroll.js"></script>
	
</body>
</html>
