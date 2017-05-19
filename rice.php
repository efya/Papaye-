<?php
require_once('admin/function.php');
connectdb();
session_start();



?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Theme Title-->
   <title>
PAPAYE - 
<?php
$iidd = $_GET["id"];
$beauty = mysql_fetch_array(mysql_query("SELECT name, price, description, img FROM rice WHERE id='".$iidd."'"));
echo "$beauty[0]";
?>

</title>
  

  <!--Meta Tags-->
		<meta name="language" content="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
        
		
		

		<!-- ================== Theme Styles ==================== -->
		   
		<!--Bootstrap-->
        <link rel="stylesheet" href="/papaye/css/bootstrap.min.css">
		
		<!--Font Awesome Link-->
        <link href="/papaye/css/font-awesome.css" rel="stylesheet">
		
		<!--Main Theme Style-->
        <link rel="stylesheet" type="text/css" href="/papaye/css/moome.css?v0.9" />

		<!--Style for Animation-->		
        <link href="/papaye/css/animate.min.css" rel="stylesheet">
					
		<link rel="stylesheet" href="/papaye/styles/vendor-9a8c5d6d0c.css">
		<link rel="stylesheet" href="/papaye/styles/main.css">
		
		<!--Favicon-->	
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
			
		<!--Theme Script-->
 

	

		
		
<script type="text/javascript" src="/papaye/assets/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/papaye/assets/luy/simple_social_share.js"></script>
<link rel="stylesheet" type="text/css" href="/papaye/assets/luy/simple_social_share.css">
		
		
<script>
      window._config = {
        env: 'prod',
        apiHost: window.location.protocol + '//' + 'thesoftking.com',
      }
    </script>

<script type="text/javascript">
$( document ).ready(function() {
$("div.shareThis").simpleSocialShare
({
url: '<?php
 $ddaa = mysql_query("SELECT id, name, price, description, img FROM rice ORDER BY id DESC");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {
	$string = strtolower($data[1]);
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    $string = preg_replace("/[\s-]+/", " ", $string);
    $string = preg_replace("/[\s_]/", "-", $string);
    $url = $string;
 echo "" ;
	}
 ?>', 
title: "PAPAYE - AFRICAN DISHES", 
description: '<?php
$iidd = $_GET["id"];
$beauty = mysql_fetch_array(mysql_query("SELECT name, price, description, img FROM rice WHERE id='".$iidd."'"));
echo "$beauty[0]";
?>',
image: "http://localhost/papaye/assets/luy/smsp_icons/share_black.png",
shareType: "button", 
triggerButtonActiveState: false, 
buttonSide: "right",
orientation: "horizontal" 
});
});
</script>

<script type="text/javascript">
$( document ).ready(function() {
$('.pop-up').hide(0);
$('.pop-up-container').show(0);

$('.pop-up-button').click(function(){
  $('.pop-up-container').show(0);
  $('.pop-up').fadeIn(900);
  $('.pop-up-button').hide(0);
});
$('.pop-up span').click(function() {
  $('.pop-up-container').hide(0);
  $('.pop-up').hide(0);
  $('.pop-up-button').show(0);
});
});
</script>		

<style>
.btn {
font-size: 25px !important;
font-family: 'Montserrat', sans-serif !important;
}

.btn-primary {
    background-color: #59585a !important;
    border-color: #59585a !important;
    color: #fff;
	font-family: 'Montserrat', sans-serif !important;
	transition: all 0.3s;
	
}

.btn-primary:hover {
    background-color: #595853 !important;
    border-color: #59585a;
    color: #fff;
	letter-spacing:3px;
}
</style>	


	
</head>

<body>
		
<!-- ================== Top Nav ==================== -->
		
<div class="all-header">		
<!--Top Nav-->

<!--End of Top Nav-->
		
		
		
<!-- ================== Main Menu for Theme ==================== -->		
		
<!--Main Menu-->
 

</div>

<div id="clearfix"></div>
<!--End of Main Menu-->
		
<div class="col-xs-12 col-md-12">
	<div class="shareThis"></div>
</div>		
		
		
<div class="cat-des-bk">
  <div id="front-slider" class="carousel slide"><!--Slider with interval speed of 40s-->
		<div class="container">
		  <div id="back" style="padding:4% 0px 4% 0px;text-align:center;">
			  <h3><a style="color:#ed1c24;" href="/papaye/index.php">HOME</a> > <a style="color:white;" href="/papaye/cat-rice.php">RICE</a> > <span style="color:#ed1c24;text-transform: uppercase;"> 
			  <?php
$iidd = $_GET["id"];
$beauty = mysql_fetch_array(mysql_query("SELECT name, price, description, img FROM rice WHERE id='".$iidd."'"));
echo "$beauty[0]";
?></span></h3>
	<p><span>Price:</span> <?php
$iidd = $_GET["id"];
$beauty = mysql_fetch_array(mysql_query("SELECT name, price, description, img FROM rice WHERE id='".$iidd."'"));
echo "$beauty[1]";
?></p>
		  </div>
		  
		  
		</div>
  </div>
</div>
<div id="clearfix"> </div>


 <div class="pop-up-bk">
<div class="container">
<div class="pop-up">
<div class="pop-up-text-bk">
  <span>x</span>
  <a href="#book"><section>Book Now</section></a>
  <div class="pop-up-text">
    <h1 style="text-align:center;">DESCRIPTION</h1>
    <p style="color:#fff;">  <?php
$iidd = $_GET["id"];
$beauty = mysql_fetch_array(mysql_query("SELECT name, price, description, img FROM rice WHERE id='".$iidd."'"));
echo "$beauty[2]";
?></p>
  </div>
  </div>
</div>
</div>
<div class="pop-up-container">
</div>
</div>

<div class="  text-center">
<div class="container">
        <div class="row">
		<div class="col-md-12">
            <div class="men-cat">
              <div class="men-cat-single">
              
			<?php
$iidd = $_GET["id"];
$beauty = mysql_fetch_array(mysql_query("SELECT name, price, description, img FROM rice WHERE id='".$iidd."'"));
 echo "
<div>
	<div>
		<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
		   <img class=\"img-responsive\" src=\"/papaye/images/items/$beauty[3]\" style=\"pointer-events: none;\">
		</div>	
	</div>
</div>
";
 ?>
                
<div style="position: absolute;z-index: 996;top: 0;right: 0;">
<div class=" ">
<div class="col-xs-12 col-md-12" style="margin:0 auto !important; text-align:center !important;">
<div class="shareThis"></div>
</div>
</div>
</div>

<div style="position: absolute;z-index: 996;top: 0;left: 0;">
<i class="icoTwitter pop-up-button fa fa-question fa-2x"></i>	
</div>

              </div>
            </div>
          </div>

		  
          
		  
	</div>
</div>	
</div>
		
 	


 
<?php
$iidd = $_GET["id"];
$ppy = mysql_fetch_array(mysql_query("SELECT name FROM rice WHERE id='".$iidd."'"));
?>
 <div class="container">
  <div class="contact-us-section" id="book">
 
<div>
        <div class="">
			<div class="col-xs-12 col-md-12 contact-info">
		   <form action="<?php echo $baseurl; ?>/makebooking" method="post"> 
	  
				<div class="col-md-12 col-xs-12">
					<input  name="saves" value="<?php echo $ppy[0]; ?>" class="formInput" type="text" required readonly>
				</div>
	  
				<div class="col-md-4 col-xs-12">
				  <input name="name" placeholder="Your Name" class="formInput" type="text" required>
				</div>
				
				<div class="col-md-4 col-xs-12">
				  <input name="mobile" placeholder="Mobile" class="formInput" type="text" required> 
				</div>
				
				<div class="col-md-4 col-xs-12">
				 <input name="email" placeholder="Email" class="formInput" type="text" required>
				</div>
				
				
				
				<div class="col-md-12 col-xs-12">
				  <textarea name="btext" class="formInput" placeholder="Details about your booking..."></textarea>
				</div>
				
				<div class="col-md-12 col-xs-12">
					<button class="btn btn-primary btn-block">Book Now</button>
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
	  
	 
 
	  
 
	  
 
	  
	  
	 
	<script src="/papaye/scripts/plugins-43cf9383be.js"></script> 
	<script src="/papaye/scripts/main-b709920832.js"></script> 
	<script src="/papaye/scripts/templates-8ec63d5fd0.js"></script>
	<script src="/papaye/scripts/tog.js"></script>
	
	
	
	
	 
    <script src="/papaye/js/bootstrap.min.js"></script>
	
	<!--Other Main Scripts-->
	<script src="/papaye/js/moome.js"></script>
    
	<!--Script for Main Slider-->
	<script src="/papaye/js/main-slider.js"></script>
    
	<!--Script for Porfolio Slider-->
	<script src="/papaye/js/portfolio-slider.js"></script>
    
	<!--Script for Testimonial Slider-->
	<script src="/papaye/js/testimonial-slider.js"></script>
	
	<!-- Smoothscroll Script-->
	<script src="/papaye/js/smoothscroll.js"></script>
	
</body>
</html>
