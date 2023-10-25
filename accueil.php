<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hi'Anatra</title>
<link rel="shortcut icon" href="img/logo.png">
</head>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Education Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/mi.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&subset=latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900iSource+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

		<script src="js/jquery.chocolat.js"></script>
		
		<!--light-box-files -->
		
<!-- //js -->
<script src="js/responsiveslides.min.js"></script>
		<script>
				$(function () {
					$("#slider").responsiveSlides({
						auto: true,
						pager:false,
						nav: true,
						speed: 1000,
						namespace: "callbacks",
						before: function () {
							$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
					});
				});
			</script>
	

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/mi.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->



</head>
<body>
<div class="header" id="home">
  <div class="logo">
    <a href="accueil.php">
      <img id="title"src="img/logo.png" alt="" style="width: 100px;position: absolute;z-index: 9999;color: white;left: 123px;top: 42px;letter-spacing: 2px;left: 12px;top: 20px;">
      <h1 id="title">Hi'Anatra</h1>
    </a>
  </div>
</div>


<!-- navigation -->
		<div class="ban-top-con">
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1" style="position: relative;top: -280px;">
					  <ul class="nav navbar-nav menu__list">
						<li class="active menu__item menu__item--current"><a class="menu__link" href="accueil.php">Accueil <span class="sr-only">(current)</span></a></li>
						<li class="menu__item"><a  class="menu__link" href="apropos.php">A propos</a></li>
						<li class="menu__item">
							<a class="menu__link dropdown" href="#" onclick="toggleUniversiteList()">
							  <label for="universite">Universités<img src="img/caret-vers-le-bas.png"/></label>
							</a>
							<div class="dropdown-menu" style="border: 1px solid white;background-color:rgb(0,128,64,0.3);" aria-labelledby="universitiesDropdown">
							<a class="dropdown-item" href="universite.php?province=1">Université d'Antananarivo</a>
                             <a class="dropdown-item" href="universite.php?province=2">Université de Toamasina</a>
                            <a class="dropdown-item" href="universite.php?province=3">Université d'Antsiranana</a>
                            <a class="dropdown-item" href="universite.php?province=4">Université de Fianarantsoa</a>
                            <a class="dropdown-item" href="universite.php?province=5">Université de Toliara</a>
							  <!-- Ajoutez d'autres universités ici -->
							</div>
						  </li>
						  <script>function toggleUniversiteList() {
    var maListe = document.getElementsByClassName("dropdown-menu")[0];
    var estAffichee = maListe.style.display === "block";

    if (!estAffichee) {
        maListe.style.display = "block";
    } else {
        maListe.style.display = "none";
    }
}
</script>
						  

						<li class=" menu__item"><a class="menu__link" href="filieres.php">Filières</a></li>
                        <li class=" menu__item"><a class="menu__link" href="lieux.php">lieux</a></li>
						<li class=" menu__item"><a class="menu__link" href="contact.php">contact</a></li>

					  </ul>
					</div>
				  </div>
				</nav>	
				
			</div>
			<div class="clearfix"></div>
			</div>
	<!-- //navigation -->
<!-- Slider -->
<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<li>
				<div class="slider-img">
					<img src="img/bg2.jpg" class="img-responsive" alt="education">
				</div>
				<div class="slider-info">
					<h3 id="title">Hi'Anatra</h3>
					<p>L'éducation est l'arme la plus puissante que vous pouvez utiliser pour changer le monde.</p>
				</div>
			</li>
			<li>
				<div class="slider-img">
					<img src="img/bg3.jpg" class="img-responsive" alt="education">
				</div>
				<div class="slider-info">
					<h3>Hi'Anatra</h3>
					<p>Le but de l'éducation est de remplacer un esprit vide par un esprit ouvert. </p>
				</div>
			</li>
			<li>
				<div class="slider-img">
					<img src="img/bg1.jpg" class="img-responsive" alt="education">
				</div>
				<div class="slider-info">
					<h3>Hi'Anatra</h3>
					<p>L'éducation est l'arme la plus puissante que vous pouvez utiliser pour changer le monde.</p>
				</div>
			</li>
			<li>
				<div class="slider-img">
					<img src="img/bg4.jpg" class="img-responsive" alt="education">
				</div>
				<div class="slider-info">
					<h3>Hi'Anatra</h3>
					<p>Le but de l'éducation est de remplacer un esprit vide par un esprit ouvert.</p>
				</div>
			</li>
			<li>
				<div class="slider-img">
					<img src="img/bg5.jpg" class="img-responsive" alt="education">
				</div>
				<div class="slider-info">
					<h3>Hi'Anatra</h3>
					<p>L'objectif de l'éducation est la progression des connaissances et la diffusion de la vérité.</p>
				</div>
			</li
		</ul>
	</div>
	<div class="clearfix"></div>
</div>
		<!-- //Slider -->
</div>
<!--main-content-->

<!--meet our management-->
<div class="team" id="management">
	<div class="container">
		<h3>Répértoires d'universités</h3>
		<p>Faites le bon choix pour votre avenir</p>
		<div class="w3grids">
			<div class="w3grid col-md-3">
			<div class="cadre">
				<img src="img/ispm.png" alt="team1" class="img1-w3l">
				<h5>ISPM</h5>
				<p>Institut supérieur polytechnique de Madagascar</p>
				<div class="socialw3-icons">
					<i class=" so1 fa fa-facebook" aria-hidden="true"></i>
					<i class=" so2 fa fa-twitter" aria-hidden="true"></i>
					<i class=" so3 fa fa-google" aria-hidden="true"></i>
			</div>			
			</div>
			</div>
			<div class="w3grid col-md-3">
				<div class="cadre">
				<img src="img/inscae.png" alt="team1" class="img1-w3l">
				<h5>INSCAE</h5>
				<p>Institut national des sciences comptables et de l'administration d'entreprises</p>
				<div class="socialw3-icons">
					<i class=" so1 fa fa-facebook" aria-hidden="true"></i>
					<i class=" so2 fa fa-twitter" aria-hidden="true"></i>
					<i class=" so3 fa fa-google" aria-hidden="true"></i>
				</div>
			</div>
			</div>
			<div class="w3grid col-md-3">
			<div class="cadre">
				<img src="img/aceem.png" alt="team1" class="img1-w3l">
				<h5>ACEEM</h5>
				<p> Ecole Supérieure de Maintenance, de Gestion et de Communication</p>
				<div class="socialw3-icons">
					<i class=" so1 fa fa-facebook" aria-hidden="true"></i>
					<i class=" so2 fa fa-twitter" aria-hidden="true"></i>
					<i class=" so3 fa fa-google" aria-hidden="true"></i>
				</div>
			</div>
			</div>
			<div class="w3grid col-md-3">
			<div class="cadre">
				<img src="img/iscam.jpg" alt="team1" class="img1-w3l">
				<h5>ISCAM</h5>
				<p> Ecole Supérieure de Maintenance, de Gestion et de Communication</p>
				<div class="socialw3-icons">
					<i class=" so1 fa fa-facebook" aria-hidden="true"></i>
					<i class=" so2 fa fa-twitter" aria-hidden="true"></i>
					<i class=" so3 fa fa-google" aria-hidden="true"></i>
				</div>
			</div>
			</div>
		</div>
		
		<div class="clearfix"></div>
		<div class="bouton" style="position:relative;top:46px;left:42%;">
		<a class="menu__link dropdown" href="#" style="background-color:rgb(59,59,59); color:white; font-size: 15px; font-weight: bold;display:flex;align-items:center; justify-content:center;width: 130px; height: 45px; border: 3px solid white; border-radius: 20px;"onclick="toggleUniversiteList()">Voir plus</a>
</div>

	</div>
</div>
<!--//meet our management-->

<!--welcome-->

<!--//welcome-->

  
<!--activities-->
<div class="gallery" id="activities">
	<div class="container">
	  <div class="gallery-main">
     		<section>
	 			<h3 style="text-align: center;position: relative;top: -40px;font-size: 35px;color: rgb(0,128,64);">FILIERES</h3>
				<p style="text-align: center;font-size: 20px;position: relative;top: -24px;">Poursuivez vos rêves et atteignez le sommet</p>
					<div class="gallery-bott">
						<div id="da-thumbs" class="da-thumbs">
							<div class="row">
								<div class="column">
									<div class="col-md-4 col1 gallery-grid">
									<a href="unifi.php?nom_filieres=Informatique"class="b-link-stripe b-animate-go  thickbox">
										<figure class="effect-bubba">
											<img class="img-responsive" src="img/g1.jpg" alt="">
											<figcaption>
												<h4 class="gal">Informatique</h4>
												<p class="gal1">"Vis comme si tu devais mourir demain. Apprends comme si tu devais vivre pour toujours."</p>	
											</figcaption>			
										</figure>
							</a>
						</div>
					</div>
					<div class="column">
						<div class="col-md-4 col1 gallery-grid">
							<a href="unifi.php?nom_filieres=Genie civil" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive" src="img/g2.jpg" alt="">
								<figcaption>
									<h4 class="gal">Genie Civil</h4>
									<p class="gal1">"Vis comme si tu devais mourir demain. Apprends comme si tu devais vivre pour toujours."</p>	
								</figcaption>			
							</figure>
							</a>
						</div>
					</div>
					<div class="column">
						<div class="col-md-4 col1 gallery-grid">
							<a href="unifi.php?nom_filieres=Gestion" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive" src="img/g3.jpg" alt="">
								<figcaption>
									<h4 class="gal">Gestion</h4>
									
									<p class="gal1">"Vis comme si tu devais mourir demain. Apprends comme si tu devais vivre pour toujours."</p>	
								</figcaption>			
							</figure>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="column">
						<div class="col-md-4 col1 gallery-grid">
							<a href="unifi.php?nom_filieres=Management" class="b-link-stripe b-animate-go  thickbox">
									<figure class="effect-bubba">
										<img class="img-responsive" src="img/g4.jpg" alt="">
										<figcaption>
											<h4 class="gal">Management</h4>
											<p class="gal1">"Vis comme si tu devais mourir demain. Apprends comme si tu devais vivre pour toujours."</p>	
										</figcaption>			
									</figure>
								</a>
						</div>
					</div>
					<div class="column">
						<div class="col-md-4 col1 gallery-grid">
							<a href="unifi.php?nom_filieres=Medecine" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive" src="img/g5.jpg" alt="">
								<figcaption>
									<h4 class="gal">Medecine</h4>
									<p class="gal1">"Vis comme si tu devais mourir demain. Apprends comme si tu devais vivre pour toujours."</p>	
								</figcaption>			
							</figure>
							</a>
						</div>
					</div>
					<div class="column">
						<div class="col-md-4 col1 gallery-grid">
							<a href="Communication" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive" src="img/g6.jpg" alt="">
								<figcaption>
									<h4 class="gal">Communication</h4>
									<p class="gal1">"Vis comme si tu devais mourir demain. Apprends comme si tu devais vivre pour toujours." </p>	
								</figcaption>			
							</figure>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="column">
						<div class="col-md-4 col1 gallery-grid">
							<a href="unifi.php?nom_filieres=Comptabilité" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive" src="img/g7.jpg" alt="">
								<figcaption>
									<h4 class="gal">Comptabilité</h4>
									<p class="gal1">"Vis comme si tu devais mourir demain. Apprends comme si tu devais vivre pour toujours." </p>	
								</figcaption>			
							</figure>
							</a>
						</div>
					</div>
					<div class="column">
						<div class="col-md-4 col1 gallery-grid">
							<a href="unifi.php?nom_filieres=Droit" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive" src="img/g8.jpg" alt="">
								<figcaption>
									<h4 class="gal">Droit</h4>
									<p class="gal1">"Vis comme si tu devais mourir demain. Apprends comme si tu devais vivre pour toujours."</p>	
								</figcaption>			
							</figure>
							</a>
						</div>
					</div>
					<div class="column">
						<div class="col-md-4 col1 gallery-grid">
							<a href="unifi.php?nom_filieres=" class="b-link-stripe b-animate-go  thickbox">
							<figure class="effect-bubba">
								<img class="img-responsive" src="img/g9.jpg" alt="">
								<figcaption>
									<h4 class="gal">Tourisme & Hotellerie</h4>
									<p class="gal1">"Vis comme si tu devais mourir demain. Apprends comme si tu devais vivre pour toujours."</p>	
								</figcaption>			
							</figure>
							</a>
						</div>
					</div>
				</div>
			     <div class="clearfix"> </div>
			</div>
		</section>
      </div>
	</div>
	</div>
   
   
   <script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > div ').each( function() { $(this).hoverdir(); } );

			});
		</script>
</div>
<!--//activities-->

<!-- opening -->

<!--//faculty-->

<!--contact-->

<!--//contact-->
<!--//main-content-->

<!--footer-->
<div class="w3l-footer">
	<div class="container">
		<div class="left-w3">
			<a href="#">Hi'Anatra</a>
		</div>
		<div class="right-social">
			<i class="fa fa-facebook-square" aria-hidden="true"></i>
			<i class="fa fa-twitter-square" aria-hidden="true"></i>
			<i class="fa fa-google-plus-square" aria-hidden="true"></i>
		</div>
		<div class="clearfix"></div>
		<div class="footer-nav">
			<ul>
				<li><a class="menu__link scroll" href="accueil.php">Accueil</a></li>
				<li><a class="menu__link scroll" href="apropos.php">a propos</a></li>
				<li><a class="menu__link scroll" href="universite.php">Universités</a></li>
				<li><a class="menu__link scroll" href="filieres.php">Filieres</a></li>
                <li><a class="menu__link scroll" href="lieux.php">Lieux</a></li>
				<li><a class="menu__link scroll" href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="copyright-agile">
			<p>&copy; 2023 Hi'Anatra. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
</div>
<!--//footer-->
<!-- smooth scrolling -->

<!-- //smooth scrolling -->
</body>
</html>