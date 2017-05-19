<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<title>Master Slider Gallery Template</title>	
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<!-- Base MasterSlider style sheet -->
		<link rel="stylesheet" href="masterslider/style/masterslider.css" />
		
		<!-- Master Slider Skin -->
		<link href="masterslider/skins/black-2/style.css" rel='stylesheet' type='text/css'>
		 
		<!-- MasterSlider Template Style -->
		<link href='style/ms-gallery-style.css' rel='stylesheet' type='text/css'>
		
		<!-- google font Lato -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
		
		<!-- jQuery -->
		<script src="masterslider/jquery.min.js"></script>
		<script src="masterslider/jquery.easing.min.js"></script>
		
		<!-- Master Slider -->
		<script src="masterslider/masterslider.min.js"></script>
		
		 

		<style>			
			#ms-gallery-1{
				max-width: 1000px;
				margin:0 auto;
			}
		 
			.syntaxhighlighter.html {
				height: 312px;
			}
		</style>
		
	</head>
		
	<body>
	


	<!-- template -->
	<div class="ms-gallery-template" id="ms-gallery-1">
				<!-- masterslider -->
				<div class="master-slider ms-skin-black-2 round-skin" id="masterslider">
				    <div class="ms-slide">
				        <img src="../masterslider/style/blank.gif" data-src="img/1.jpg" alt="lorem ipsum dolor sit"/> 
				        <img src="img/thumbs/1.jpg" alt="thumb-1" class="ms-thumb"/>
				        <div class="ms-info">
				        	LOREM IPSUM DOLOR SIT AMET
				        </div>
				    </div>
				    <div class="ms-slide">
				        <img src="../masterslider/style/blank.gif" data-src="img/2.jpg" alt="lorem ipsum dolor sit"/>     
				         <img src="img/thumbs/2.jpg" alt="thumb-2" class="ms-thumb"/>
				         <div class="ms-info">
				        	CONSECTETUR ADIPISCING ELIT
				        </div>
				    </div>
				    <div class="ms-slide">
				        <img src="../masterslider/style/blank.gif" data-src="img/3.jpg" alt="lorem ipsum dolor sit"/>    
				          <img src="img/thumbs/3.jpg" alt="thumb-3" class="ms-thumb"/>
				         <div class="ms-info">
				        	SUSPENDISSE UT PULVINAR MAURIS
				        </div>   
				    </div>
				    <div class="ms-slide">
				        <img src="../masterslider/style/blank.gif" data-src="img/4.jpg" alt="lorem ipsum dolor sit"/>    
				         <img src="img/thumbs/4.jpg" alt="thumb-4" class="ms-thumb"/>
				         <div class="ms-info">
				        	SED DAPIBUS SIT AMET FELIS
				        </div>  
				    </div>
				    <div class="ms-slide">
				        <img src="../masterslider/style/blank.gif" data-src="img/cover.jpg" alt="lorem ipsum dolor sit"/>     
						<a href="http://player.vimeo.com/video/53914149" data-type="video"> vimeo video </a>
				   		<img src="img/thumbs/cover-thumb.jpg" alt="thumb-4" class="ms-thumb"/>
				         <div class="ms-info">
				        	YOUTUBE AND VIMEO VIDEOS
				        </div> 
				        <h5 class="ms-layer video-title video-top-title" style="left:243px; top:29px "
				        	data-effect="left(150)"
				        	data-duration="3500"
				        	data-ease="easeOutExpo"
				        	data-delay="50"
				        >DIRECTOR’S CUT</h5>
						
						<h4 class="ms-layer video-title" style="left:240px; top:44px "
				        	data-effect="front(500)"
				        	data-duration="5000"
				        	data-ease="easeOutExpo"
				        	data-delay="400"
				        >CHEETAHS ON THE EDGE</h4>
				        
				        <h5 class="ms-layer video-title video-sub-title" style="left:240px; top:90px "
				        	data-effect="right(50)"
				        	data-duration="3500"
				        	data-ease="easeOutExpo"
				        	data-delay="1000"
				        >Groundbreaking footage of the world’s fastest runner</h5>

				    </div>
				    <div class="ms-slide">
				        <img src="../masterslider/style/blank.gif" data-src="img/5.jpg" alt="lorem ipsum dolor sit"/>  
				          <img src="img/thumbs/5.jpg" alt="thumb-5" class="ms-thumb"/>
				         <div class="ms-info">
				        	CONSECTETUR ADIPISCING ELIT
				        </div>       
				    </div>
				    <div class="ms-slide">
				        <img src="../masterslider/style/blank.gif" data-src="img/6.jpg" alt="lorem ipsum dolor sit"/>    
				          <img src="img/thumbs/6.jpg" alt="thumb-6" class="ms-thumb"/>
				         <div class="ms-info">
				        	SED A SEM AT LIBERO SODALES
				        </div>
				    </div>
				    <div class="ms-slide">
				        <img src="../masterslider/style/blank.gif" data-src="img/7.jpg" alt="lorem ipsum dolor sit"/>  
				          <img src="img/thumbs/7.jpg" alt="thumb-7" class="ms-thumb"/>
				         <div class="ms-info">
				        	AT LACUS SED RUTRUM
				        </div>
				    </div>
				    <div class="ms-slide">
				        <img src="../masterslider/style/blank.gif" data-src="img/8.jpg" alt="lorem ipsum dolor sit"/>  
				          <img src="img/thumbs/8.jpg" alt="thumb-8" class="ms-thumb"/>
				         <div class="ms-info">
				        	VITAE ULTRICIES ALIQUET
				        </div>
				    </div>
				</div>
				<!-- end of masterslider -->
	</div>
	<!-- end of template -->

	<div class="hilight-wrapper">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs">
		  <li class="active"><a  href="#html" data-toggle="tab">HTML</a></li>
		  <li><a href="#java-script" data-toggle="tab">JavaScript</a></li>
		  <li><a href="#requierd-files" data-toggle="tab">Required Files</a></li>
		  <a class="ms-doc-link" target="_blank"  href="http://www.masterslider.com/doc/">Master Slider Documentation</a>
		</ul>

		<!-- Tab panes -->

		<div class="tab-content">
		 	<div class="tab-pane fade in active" id="html">
		 		<div class="html-describe">You need to put the following html markup in your html document where you want to have slider </div>
		 		<pre class="brush: html">
	&lt;!-- template -->
	&lt;div class="ms-gallery-template" id="ms-gallery-1">
				&lt;!-- masterslider -->
				&lt;div class="master-slider ms-skin-black-2 round-skin" id="masterslider">
				    &lt;div class="ms-slide">
				        &lt;img src="../masterslider/style/blank.gif" data-src="img/1.jpg" alt="lorem ipsum dolor sit"/> 
				        &lt;img src="img/thumbs/1.jpg" alt="thumb-1" class="ms-thumb"/>
				        &lt;div class="ms-info">
				        	LOREM IPSUM DOLOR SIT AMET
				        &lt;/div>
				    &lt;/div>
				    &lt;div class="ms-slide">
				        &lt;img src="../masterslider/style/blank.gif" data-src="img/2.jpg" alt="lorem ipsum dolor sit"/>     
				         &lt;img src="img/thumbs/2.jpg" alt="thumb-2" class="ms-thumb"/>
				         &lt;div class="ms-info">
				        	CONSECTETUR ADIPISCING ELIT
				        &lt;/div>
				    &lt;/div>
				    &lt;div class="ms-slide">
				        &lt;img src="../masterslider/style/blank.gif" data-src="img/3.jpg" alt="lorem ipsum dolor sit"/>    
				          &lt;img src="img/thumbs/3.jpg" alt="thumb-3" class="ms-thumb"/>
				         &lt;div class="ms-info">
				        	SUSPENDISSE UT PULVINAR MAURIS
				        &lt;/div>   
				    &lt;/div>
				    &lt;div class="ms-slide">
				        &lt;img src="../masterslider/style/blank.gif" data-src="img/4.jpg" alt="lorem ipsum dolor sit"/>    
				         &lt;img src="img/thumbs/4.jpg" alt="thumb-4" class="ms-thumb"/>
				         &lt;div class="ms-info">
				        	SED DAPIBUS SIT AMET FELIS
				        &lt;/div>  
				    &lt;/div>
				    &lt;div class="ms-slide">
				        &lt;img src="../masterslider/style/blank.gif" data-src="img/cover.jpg" alt="lorem ipsum dolor sit"/>     
						&lt;a href="http://player.vimeo.com/video/53914149" data-type="video"> vimeo video &lt;/a>
				   		&lt;img src="img/thumbs/cover-thumb.jpg" alt="thumb-4" class="ms-thumb"/>
				         &lt;div class="ms-info">
				        	YOUTUBE AND VIMEO VIDEOS
				        &lt;/div> 
				        &lt;h5 class="ms-layer video-title video-top-title" style="left:243px; top:29px "
				        	data-effect="left(150)"
				        	data-duration="3500"
				        	data-ease="easeOutExpo"
				        	data-delay="50"
				        >DIRECTOR’S CUT&lt;/h5>
						
						&lt;h4 class="ms-layer video-title" style="left:240px; top:44px "
				        	data-effect="front(500)"
				        	data-duration="5000"
				        	data-ease="easeOutExpo"
				        	data-delay="400"
				        >CHEETAHS ON THE EDGE&lt;/h4>
				        
				        &lt;h5 class="ms-layer video-title video-sub-title" style="left:240px; top:90px "
				        	data-effect="right(50)"
				        	data-duration="3500"
				        	data-ease="easeOutExpo"
				        	data-delay="1000"
				        >Groundbreaking footage of the world’s fastest runner&lt;/h5>

				    &lt;/div>
				    &lt;div class="ms-slide">
				        &lt;img src="../masterslider/style/blank.gif" data-src="img/5.jpg" alt="lorem ipsum dolor sit"/>  
				          &lt;img src="img/thumbs/5.jpg" alt="thumb-5" class="ms-thumb"/>
				         &lt;div class="ms-info">
				        	CONSECTETUR ADIPISCING ELIT
				        &lt;/div>       
				    &lt;/div>
				    &lt;div class="ms-slide">
				        &lt;img src="../masterslider/style/blank.gif" data-src="img/6.jpg" alt="lorem ipsum dolor sit"/>    
				          &lt;img src="img/thumbs/6.jpg" alt="thumb-6" class="ms-thumb"/>
				         &lt;div class="ms-info">
				        	SED A SEM AT LIBERO SODALES
				        &lt;/div>
				    &lt;/div>
				    &lt;div class="ms-slide">
				        &lt;img src="../masterslider/style/blank.gif" data-src="img/7.jpg" alt="lorem ipsum dolor sit"/>  
				          &lt;img src="img/thumbs/7.jpg" alt="thumb-7" class="ms-thumb"/>
				         &lt;div class="ms-info">
				        	AT LACUS SED RUTRUM
				        &lt;/div>
				    &lt;/div>
				    &lt;div class="ms-slide">
				        &lt;img src="../masterslider/style/blank.gif" data-src="img/8.jpg" alt="lorem ipsum dolor sit"/>  
				          &lt;img src="img/thumbs/8.jpg" alt="thumb-8" class="ms-thumb"/>
				         &lt;div class="ms-info">
				        	VITAE ULTRICIES ALIQUET
				        &lt;/div>
				    &lt;/div>
				&lt;/div>
				&lt;!-- end of masterslider -->
	&lt;/div>
	&lt;!-- end of template -->			
				</pre>

		 	</div>
		  	<div class="tab-pane fade" id="java-script">
		  		<div class="html-describe">You need to put the following scripts just before the &lt; &#8260; body&gt; </div>
		  		<pre class="brush: js">
	&lt;script type="text/javascript">		
	
		var slider = new MasterSlider();
		slider.setup('masterslider' , {
			width:1000,
			height:500,
			space:10,
			preload:3,
			view:'basic'
		});
		slider.control('arrows');	
		
		var gallery = new MSGallery('ms-gallery-1' , slider);
		gallery.setup();
		
	&lt;/script>
				</pre>
		  	</div>
			<div class="tab-pane fade" id="requierd-files">
				<div class="html-describe">You need to import the following files  </div>
				<pre class="brush: html">
		&lt;!-- Base MasterSlider style sheet -->
		&lt;link rel="stylesheet" href="../masterslider/style/masterslider.css" />
		
		&lt;!-- Master Slider Skin -->
		&lt;link href="../masterslider/skins/black-2/style.css" rel='stylesheet' type='text/css'>
		 
		&lt;!-- MasterSlider Template Style -->
		&lt;link href='style/ms-gallery-style.css' rel='stylesheet' type='text/css'>
		
		&lt;!-- google font Lato -->
		&lt;link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
		
		&lt;!-- jQuery -->
		&lt;script src="../masterslider/jquery.min.js">&lt;/script>
		&lt;script src="../masterslider/jquery.easing.min.js">&lt;/script>
		
		&lt;!-- Master Slider -->
		&lt;script src="../masterslider/masterslider.min.js">&lt;/script>
				</pre>
			</div>
					
		</div>
		<!-- end of Tab panes -->
	</div>	
	<!-- end of syntaxHylight wrapper -->
	
	</body>
	
	<script type="text/javascript">		
	
		var slider = new MasterSlider();
		slider.setup('masterslider' , {
			width:1000,
			height:500,
			space:10,
			preload:3,
			view:'basic'
		});
		slider.control('arrows');	
		
		var gallery = new MSGallery('ms-gallery-1' , slider);
		gallery.setup();

		$('#myTab a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		});

		SyntaxHighlighter.all();
		
	</script>
</html>
