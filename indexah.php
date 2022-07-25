<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>BizCraft - Responsive Html5 Template</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="plugins/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="plugins/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="plugins/owl/owl.carousel.css">
	<link rel="stylesheet" href="plugins/owl/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/flex-slider/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/cd-hero/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="plugins/html5shiv.js"></script>
      <script src="plugins/respond.min.js"></script>
    <![endif]-->

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">

</head>

<body>

	<!-- Style switcher start -->
	<div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br/><br/>
		<a class="btn btn-sm btn-primary close-styler float-right">Close X</a>
	</div>
	<!-- Style switcher end -->

	<div class="body-inner">

<!-- Header start -->
<header id="header" class="fixed-top header" role="banner">
	<a class="navbar-brand navbar-bg" href="index.html"><img class="img-fluid float-right" src="images/logo.png" alt="logo"></a>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button" data-toggle="collapse"
				data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse text-center" id="navigation">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Home
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="index.html">Homepage 1</a>
							<a class="dropdown-item" href="index-2.html">Homepage 2</a>
							<a class="dropdown-item" href="index-3.html">Homepage 3</a>
							<a class="dropdown-item" href="index-4.html">Homepage 4</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Company
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="about.html">About Us</a>
							<a class="dropdown-item" href="service.html">Services</a>
							<a class="dropdown-item" href="career.html">Career</a>
							<a class="dropdown-item" href="testimonial.html">Testimonials</a>
							<a class="dropdown-item" href="faq.html">Faq</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Portfolio
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="portfolio-classic.html">Portfolio Classic</a>
							<a class="dropdown-item" href="portfolio-static.html">Portfolio Static</a>
							<a class="dropdown-item" href="portfolio-item.html">Portfolio Single</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Pages
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="team.html">Our Team</a>
							<a class="dropdown-item" href="about2.html">About Us - 2</a>
							<a class="dropdown-item" href="service2.html">Services - 2</a>
							<a class="dropdown-item" href="service-single.html">Services Single</a>
							<a class="dropdown-item" href="pricing.html">Pricing Table</a>
							<a class="dropdown-item" href="404.html">404 Page</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Blog
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="blog-rightside.html">Blog with Sidebar</a>
							<a class="dropdown-item" href="blog-item.html">Blog Single</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Features
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="typography.html">Typography</a>
							<a class="dropdown-item" href="elements.html">Elements</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact</a></a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<!--/ Header end -->

<!-- Slider start -->
<section id="home" class="p-0">
	<div id="main-slide" class="cd-hero">
		<ul class="cd-hero-slider">
			<li class="selected">
				<div class="overlay2">
					<img class="" src="images/slider/bg1.jpg" alt="slider">
				</div>
				<div class="cd-full-width">
					<h2>Need To Invent The Future!</h2>
					<h3>We Making Difference To Great Things Possible</h3>
					<a href="#0" class="btn btn-primary white cd-btn">Start Now</a>
					<a href="#0" class="btn btn-primary solid cd-btn">Learn More</a>
				</div> <!-- .cd-full-width -->
			</li>
			<li>
				<div class="overlay2">
					<img class="" src="images/slider/bg2.jpg" alt="slider">
				</div>
				<div class="cd-half-width">
					<h2>How Big Can You Dream?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
					<a href="#0" class="cd-btn btn btn-primary solid">Take a Tour</a>
				</div> <!-- .cd-half-width -->

				<div class="cd-half-width cd-img-container">
					<img src="images/slider/bg-thumb1.png" alt="">
				</div> <!-- .cd-half-width.cd-img-container -->
			</li>
			<li>
				<div class="overlay2">
					<img class="" src="images/slider/bg3.jpg" alt="slider">
				</div>
				<div class="cd-half-width cd-img-container img-right">
					<img src="images/slider/bg-thumb2.png" alt="">
				</div> <!-- .cd-half-width.cd-img-container -->
				<div class="cd-half-width">
					<h2>Your Challenge is Our Progress</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
					<a href="#0" class="cd-btn btn btn-primary white">Start</a>
					<a href="#0" class="cd-btn btn secondary btn-primary solid">Learn More</a>
				</div> <!-- .cd-half-width -->
			</li>
			<li class="cd-bg-video">
				<div class="cd-full-width">
					<h2>WE ARE HERE TO MAKE IT HAPPEN</h2>
					<h3>We Making Difference To Great Things Possible</h3>

					<a href="#0" class="cd-btn btn btn-primary solid">Learn more</a>
				</div> <!-- .cd-full-width -->

				<div class="cd-bg-video-wrapper" data-video="videos/video">
					<!-- video element will be loaded using jQuery -->
				</div> <!-- .cd-bg-video-wrapper -->
			</li>
		</ul>
		<!--/ cd-hero-slider -->

		<div class="cd-slider-nav">
			<nav>
				<span class="cd-marker item-1"></span>
				<ul>
					<li class="selected"><a href="#0"><i class="fa fa-bicycle"></i> Invent</a></li>
					<li><a href="#0"><i class="fa fa-hotel"></i> Dream</a></li>
					<li><a href="#0"><i class="fa fa-android"></i> Tech</a></li>
					<li class="video"><a href="#0"><i class="fa fa-video-camera"></i> Video</a></li>
				</ul>
			</nav>
		</div> <!-- .cd-slider-nav -->

	</div>
	<!--/ Main slider end -->
</section>
<!--/ Slider end -->


<!-- Service box start -->
<section id="service" class="service angle">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon float-left"><i class="fa fa-cogs"></i></span>
				<h2 class="title">Service We Provide <span class="title-desc">A Quality Experience Team with 4 years
						experience</span></h2>
			</div>
		</div><!-- Title row end -->

		<div class="row">
			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
					<h3>Web Design</h3>
					<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid befor</p>
				</div>
			</div>
			<!--/ End first service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".8s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-android"></i></span>
					<h3>Apps Development</h3>
					<p>Food truck master cleanse mixtape minim Portland, cardigan stumptown chambray swag</p>
				</div>
			</div>
			<!--/ End Second service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-shopping-cart"></i></span>
					<h3>eCommerce Websites</h3>
					<p>Neutra Thundercats craft beer, listicle meggings bicycle rights 90's XOXO beard cardiga</p>
				</div>
			</div>
			<!--/ End Third service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.4s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span>
					<h3>Design for Startups</h3>
					<p>We design beautiful modern engaging websites that always latest responsive technologies.</p>
				</div>
			</div>
			<!--/ End 4th service -->
		</div><!-- Content row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Service box end -->

<!-- Portfolio start -->
<section id="portfolio" class="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon classic float-left"><i class="fa fa-suitcase"></i></span>
				<h2 class="title classic">Our Awesome Work</h2>
			</div>
		</div> <!-- Title row end -->

		<!--Isotope filter start -->
		<div class="row text-right">
			<div class="col-12">
				<div class="isotope-nav" data-isotope-nav="isotope">
					<ul>
						<li><a href="#" class="active" data-filter="*">All</a></li>
						<li><a href="#" data-filter=".web-design">Web Design</a></li>
						<li><a href="#" data-filter=".development">Development</a></li>
						<li><a href="#" data-filter=".joomla">Joomla</a></li>
						<li><a href="#" data-filter=".wordpress">Wordpress</a></li>
					</ul>
				</div>
			</div>
		</div><!-- Isotope filter end -->
	</div>

	<div class="container-fluid">
		<div class="row isotope" id="isotope">
			<div class="col-sm-3 web-design isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/portfolio1.jpg" alt="">
						<figcaption>
							<h3>Startup Business</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg1.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 development isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/portfolio2.jpg" alt="">
						<figcaption>
							<h3>Easy to Lanunch</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg2.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 joomla isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/portfolio3.jpg" alt="">
						<figcaption>
							<h3>Your Business</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg3.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 wordpress isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/portfolio4.jpg" alt="">
						<figcaption>
							<h3>Prego Match</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg4.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 joomla isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/portfolio5.jpg" alt="">
						<figcaption>
							<h3>Fashion Brand</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg5.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 development isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/portfolio6.jpg" alt="">
						<figcaption>
							<h3>The Insidage</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg1.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 development isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/portfolio7.jpg" alt="">
						<figcaption>
							<h3>Light Carpet</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg2.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 development isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/portfolio8.jpg" alt="">
						<figcaption>
							<h3>Amazing Keyboard</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg3.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->
		</div><!-- Content row end -->
	</div><!-- Container end -->
</section><!-- Portfolio end -->

<!-- Counter Strat -->
<section class="ts_counter p-0">
	<div class="container-fluid">
		<div class="row facts-wrapper wow fadeInLeft text-center">
			<div class="facts one col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-user"></i></span>
				<div class="facts-num">
					<span class="counter">1200</span>
				</div>
				<h3>Clients</h3>
			</div>

			<div class="facts two col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-institution"></i></span>
				<div class="facts-num">
					<span class="counter">1277</span>
				</div>
				<h3>Item Sold</h3>
			</div>

			<div class="facts three col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-suitcase"></i></span>
				<div class="facts-num">
					<span class="counter">869</span>
				</div>
				<h3>Projects</h3>
			</div>

			<div class="facts four col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-trophy"></i></span>
				<div class="facts-num">
					<span class="counter">76</span>
				</div>
				<h3>Awwards</h3>
			</div>

		</div>
	</div>
	<!--/ Container end -->
</section>
<!--/ Counter end -->

<!-- Feature box start -->
<section id="feature" class="feature">
	<div class="container">
		<div class="row">
			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-heart-o"></i></span>
				<div class="feature-content">
					<h3>Clean &amp; Modern Design</h3>
					<p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
				</div>
			</div>
			<!--/ End first featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-codepen"></i></span>
				<div class="feature-content">
					<h3>Useful Shortcodes</h3>
					<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
				</div>
			</div>
			<!--/ End 2nd featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-film"></i></span>
				<div class="feature-content">
					<h3>Parallax Section</h3>
					<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
				</div>
			</div>
			<!--/ End 3rd featurebox -->
		</div><!-- Content row end -->

		<div class="gap-40"></div>

		<div class="row">
			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-newspaper-o"></i></span>
				<div class="feature-content">
					<h3>Multipurpose Concept</h3>
					<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
				</div>
			</div>
			<!--/ End 1st featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-desktop"></i></span>
				<div class="feature-content">
					<h3>Responsive Layout</h3>
					<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
				</div>
			</div>
			<!--/ End 2nd featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-pagelines"></i></span>
				<div class="feature-content">
					<h3>Light wight Performance</h3>
					<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
				</div>
			</div>
			<!--/ End 3rd featurebox -->

		</div><!-- Content row end -->

		<div class="gap-40"></div>

		<div class="row">
			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-recycle"></i></span>
				<div class="feature-content">
					<h3>Free Lifetime Updates</h3>
					<p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
				</div>
			</div>
			<!--/ End first featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-diamond"></i></span>
				<div class="feature-content">
					<h3>Endless Possibilites</h3>
					<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
				</div>
			</div>
			<!--/ End first featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-whatsapp"></i></span>
				<div class="feature-content">
					<h3>24/7 Live Support</h3>
					<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
				</div>
			</div>
			<!--/ End first featurebox -->
		</div><!-- Content row end -->

	</div>
	<!--/ Container end -->
</section>
<!--/ Feature box end -->


<section id="image-block" class="image-block p-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 ts-padding"
				style="height:650px;background:url(images/image-block-bg.jpg) 50% 50% / cover no-repeat;">
			</div>
			<div class="col-md-6 ts-padding img-block-right">
				<div class="img-block-head text-center">
					<h2>Know More About Our Company</h2>
					<h3>Why Choose Us</h3>
					<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
						Proin gravida nibh vel velit auctor Aenean sollicitudin, adipisicing elit sed lorem quis bibendum auctor.
					</p>
				</div>

				<div class="gap-30"></div>

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-bicycle"></i></span>
					<div class="feature-content">
						<h3>Tons of Features</h3>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
					</div>
				</div>
				<!--/ End 1st block -->

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-diamond"></i></span>
					<div class="feature-content">
						<h3>PowerPack Theme</h3>
						<p>Proin gravida nibh vel velit auctor Aenean sollicitudin adipisicing</p>
					</div>
				</div>
				<!--/ End 1st block -->

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-street-view"></i></span>
					<div class="feature-content">
						<h3>Day Night Support</h3>
						<p>Simply dummy text and typesettings industry has been the industry</p>
					</div>
				</div>
				<!--/ End 1st block -->

			</div>
		</div>
	</div>
</section>
<!--/ Image block end -->


<!-- Team start -->
<section id="team" class="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon float-left"><i class="fa fa-weixin"></i></span>
				<h2 class="title">Meet with our Team <span class="title-desc">A Quality Experience Team with 4 years
						experience</span></h2>
			</div>
		</div><!-- Title row end -->

		<div class="row text-center">
			<div class="col-md-3 col-sm-6">
				<div class="team wow slideInLeft">
					<div class="img-hexagon">
						<img src="images/team/team1.jpg" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Vosgi Varduhi</h3>
						<p>Web Designer</p>
						<div class="team-social">
							<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 1 end -->
			<div class="col-md-3 col-sm-6">
				<div class="team wow slideInLeft">
					<div class="img-hexagon">
						<img src="images/team/team2.jpg" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Robert Aleska</h3>
						<p>Web Designer</p>
						<div class="team-social">
							<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 2 end -->
			<div class="col-md-3 col-sm-6">
				<div class="team wow slideInRight">
					<div class="img-hexagon">
						<img src="images/team/team3.jpg" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Taline Voski</h3>
						<p>Web Designer</p>
						<div class="team-social">
							<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 3 end -->
			<div class="col-md-3 col-sm-6">
				<div class="team animate wow slideInRight">
					<div class="img-hexagon">
						<img src="images/team/team4.jpg" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Alban Spencer</h3>
						<p>Web Designer</p>
						<div class="team-social">
							<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 4 end -->
		</div>
		<!--/ Content row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Team end -->

<!-- Parallax 1 start -->
<section class="parallax parallax1">
	<div class="parallax-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Are You Ready to Buy This Template!</h2>
				<h3>Just Click Button and Use Your Own</h3>
				<p>
					<a href="#" class="btn btn-primary white">Purchase Now</a>
					<a href="#" class="btn btn-primary solid">Get In Touch</a>
				</p>
			</div>
		</div>
	</div><!-- Container end -->
</section><!-- Parallax 1 end -->



<!-- Clients start -->
<section id="clients" class="clients">
	<div class="container">
		<div class="row wow fadeInLeft">
			<div id="client-carousel" class="col-sm-12 owl-carousel owl-theme text-center client-carousel">
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="images/clients/client1.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="images/clients/client2.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="images/clients/client3.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="images/clients/client4.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="images/clients/client5.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="images/clients/client6.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="images/clients/client7.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="images/clients/client8.png" alt="client">
					</a>
				</figure>
			</div><!-- Owl carousel end -->
		</div><!-- Main row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Clients end -->



<section class="buy-pro" style="padding: 100px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="pro-block text-center" style="padding: 40px 50px; background: white; box-shadow: 0px 2px 28px 0px #7777775e; border-radius: 5px;">
					<h1 style="font-size: 25px; line-height: 1; font-weight: 600;">You have downloaded free version of <a href="https://themefisher.com/products/bizcraft-multipurpose-business-template/">BizCraft</a>.</h1>
					<h5 style="padding: 10px 0 15px 0;">To get full access of this page please purchase the premium version</h5>
					<h5 style="font-weight: 700;">Why Premium?</h5>
					<ul class="list-unstyled" style="margin-bottom: 20px; ">
						<li>Full Template Pack</li>
						<li>Priority Support</li>
						<li>Documentation Included</li>
						<li>Monthly Update</li>
						<li>Lifetime Download</li>
						<li>Personal and commercial Use</li>
						<li>One time payment</li>
					</ul>
					<a href="https://themefisher.com/products/bizcraft-multipurpose-business-template/#download-area" target="_blank" class="btn btn-primary" style="margin-bottom: 20px; letter-spacing: 2px; font-weight: 700; padding: 16px 45px;">Get Premium Version</a>
					<p><strong>By purchasing the pro version you are actually helping us to contribute the whole community by providing free templates.</strong></p>
				</div>
			</div>
		</div>
	</div>
</section>


	<!-- Footer start -->
	<footer id="footer" class="footer">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-4 col-sm-12 footer-widget">
	        <h3 class="widget-title">Recent Posts</h3>
	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#">Bulgaria claims to find Europe's 'oldest town'</a></h4>
	            <p class="post-meta">
	              <span class="author">Posted by John Doe</span>
	              <span class="post-meta-cat">in<a href="#"> Blog</a></span>
	            </p>
	          </div>
	        </div><!-- 1st Latest Post end -->

	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#">Few Answers in Case of Murdered Law Professor</a></h4>
	            <p class="post-meta">
	              <span class="date"><i class="icon icon-calendar"></i> Mar 15, 2015</span>
	              <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">03</a></span>
	            </p>
	          </div>
	        </div><!-- 2nd Latest Post end -->

	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#">Over the year we have lots of experience in our field</a></h4>
	            <p class="post-meta">
	              <span class="date"><i class="icon icon-calendar"></i> Apr 17, 2015</span>
	              <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">14</a></span>
	            </p>
	          </div>
	        </div><!-- 3rd Latest Post end -->

	      </div>
	      <!--/ End Recent Posts-->


	      <div class="col-md-4 col-sm-12 footer-widget">
	        <h3 class="widget-title">Flickr Photos</h3>

	        <div class="img-gallery">
	          <div class="img-container">
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/1.jpg">
	              <img src="images/gallery/1.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/2.jpg">
	              <img src="images/gallery/2.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/3.jpg">
	              <img src="images/gallery/3.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/4.jpg">
	              <img src="images/gallery/4.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/5.jpg">
	              <img src="images/gallery/5.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="images/gallery/6.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="images/gallery/7.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="images/gallery/8.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="images/gallery/9.jpg" alt="">
	            </a>
	          </div>
	        </div>
	      </div>
	      <!--/ end flickr -->

	      <div class="col-md-3 col-sm-12 footer-widget footer-about-us">
	        <h3 class="widget-title">About Craft</h3>
	        <p>We are a awward winning multinational company. We believe in quality and standard worldwide.</p>
	        <h4>Address</h4>
	        <p>1102 Saint Marys, Junction City, KS</p>
	        <div class="row">
	          <div class="col-md-6">
	            <h4>Email:</h4>
	            <p>info@craftbd.com</p>
	          </div>
	          <div class="col-md-6">
	            <h4>Phone No.</h4>
	            <p>+(785) 238-4131</p>
	          </div>
	        </div>
	        <form action="#" role="form">
	          <div class="input-group subscribe">
	            <input type="email" class="form-control" placeholder="Email Address" required="">
	            <span class="input-group-addon">
	              <button class="btn" type="submit"><i class="fa fa-envelope-o"> </i></button>
	            </span>
	          </div>
	        </form>
	      </div>
	      <!--/ end about us -->

	    </div><!-- Row end -->
	  </div><!-- Container end -->
	</footer><!-- Footer end -->


	<!-- Copyright start -->
	<section id="copyright" class="copyright angle">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <ul class="footer-social unstyled">
	          <li>
	            <a title="Twitter" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
	            </a>
	            <a title="Facebook" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
	            </a>
	            <a title="Google+" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
	            </a>
	            <a title="linkedin" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
	            </a>
	            <a title="Pinterest" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
	            </a>
	            <a title="Skype" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
	            </a>
	            <a title="Dribble" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
	            </a>
	          </li>
	        </ul>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <div class="copyright-info">
	          &copy; Copyright 2019 Themefisher. <span>Designed by <a
	              href="https://themefisher.com">Themefisher.com</a></span>
	        </div>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix position-fixed">
	      <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
	    </div>
	  </div>
	  <!--/ Container end -->
	</section>
	<!--/ Copyright end -->

</div><!-- Body inner end -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="plugins/style-switcher.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="plugins/owl/owl.carousel.js"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="plugins/jquery.prettyPhoto.js"></script>
<!-- Bxslider -->
<script type="text/javascript" src="plugins/flex-slider/jquery.flexslider.js"></script>
<!-- CD Hero slider -->
<script type="text/javascript" src="plugins/cd-hero/cd-hero.js"></script>
<!-- Isotope -->
<script type="text/javascript" src="plugins/isotope.js"></script>
<script type="text/javascript" src="plugins/ini.isotope.js"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="plugins/wow.min.js"></script>
<!-- Eeasing -->
<script type="text/javascript" src="plugins/jquery.easing.1.3.js"></script>
<!-- Counter -->
<script type="text/javascript" src="plugins/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script type="text/javascript" src="plugins/waypoints.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>

</html>