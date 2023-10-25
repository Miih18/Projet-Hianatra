<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Hi'Anatra</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      
      <link rel="stylesheet" href="css/Styles.css">
      <link rel="stylesheet" href="css/style1.css">
      <link rel="stylesheet" href="css/header/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
     
      <!-- end loader -->
      <!-- header -->
      <div class="container-fluid bg-primary py-3 d-none d-md-block">
         <div class="container">
             <div class="row">
                 <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                     <div class="d-inline-flex align-items-center">
                         <a class="text" href="">FAQs</a>
                         <span class="text">|</span>
                         <a class="text" href="">Help</a>
                         <span class="text">|</span>
                         <a class="text" href="">Support</a>
                        <a href="accueil.php"><img src="img/logo.png" alt="" style="width: 100px;position: relative;left: -280px;top: -22px;"></a>
                     </div>
                 </div>
                 <div class="col-md-6 text-center text-lg-right" style="position: relative;right: -200px;">
                     <div class="d-inline-flex align-items-center">
                      
                     <a class="text-white px-3" href="">
                           
                           <img src="images/facebook-logo-button.png" alt="">
                        
                      </a>
                      <a class="text-white px-3" href="">
                         <img src="images/twitter-logo-button.png" alt="">
                      </a>
                      <a class="text-white px-3" href="">
                          <img src="images/linkedin.png" alt="">
                      </a>
                      <a class="text-white px-3" href="">
                         <img src="images/instagram.png" alt="">
                      </a>
                     
                     
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Topbar End -->
 
 
     <!-- Navbar Start -->
     
     
     <!-- Navbar End -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="tete" style="background-color: rgb(32,164,71);">
            <div class="container" style="background-color: rgb(32,164,71); ;">
               <div class="row">
                
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0" style="width:150%;">
                              
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                  <span class="navbar-toggler-icon"></span>
                              </button>
                              
                                  <div class="navbar-nav ms-auto py-0">
                                      <a href="accueil.php" class="nav-item nav-link">Accueil</a>
                                      <a href="apropos.php" class="nav-item nav-link  active">A propos</a>
                                      <a class="nav-item nav-link dropdown"onclick="toggleUniversiteList()">
                                       <label for="universite">Universités<img src="img/caret-vers-le-bas.png"/></label>
                                       </a>
                                       <div class="dropdown-menu" aria-labelledby="universitiesDropdown" style="position: absolute;">
                                       <a class="dropdown-item" href="universite.php?province=1">Université d'Antananarivo</a>
                                       <a class="dropdown-item" href="universite.php?province=2">Université de Toamasina</a>
                                       <a class="dropdown-item" href="universite.php?province=3">Université d'Antsiranana</a>
                                       <a class="dropdown-item" href="universite.php?province=4">Université de Fianarantsoa</a>
                                       <a class="dropdown-item" href="universite.php?province=5">Université de Toliara</a>
                                          <!-- Ajoutez d'autres universités ici -->
                                        </div>
                                        <script>
                                        function toggleUniversiteList() {
                                          var maListe = document.getElementsByClassName("dropdown-menu")[0];
                                          if (maListe.style.display === "none") {
                                             maListe.style.display = "block";
                                          } else {
                                             maListe.style.display = "none";
                                          }
                                       }

                  
                  
                                      </script>
                                       <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                                          <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Hi'</span>Anatra</h1>
                                      </a>
                                      <div class="navbar-nav mr-auto py-0">
                                      <a href="filieres.php" class="nav-item nav-link">Filières</a>
                                      <a href="lieux.php" class="nav-item nav-link">Lieux</a>
                                      <a href="contact.php" class="nav-item nav-link">Contact</a>
                                      </div>
                                  </div>
                              </div>
                          </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
         
         <!-- end header inner -->
      </header>
      <!-- end header -->
      
      <!-- about -->
      
      <!-- end about -->

     
      <div class="agile-main" id="about">
        <div class="container">
        <!--about-->
        <div class="about">
            <h2>A propos</h2>
            <h4>Un site qui présente la liste des universités à Madagascar a pour but de fournir des informations sur les différentes institutions d'enseignement supérieur présentes dans le pays. Il peut contenir une liste exhaustive des universités, des écoles supérieures, des instituts de recherche et d'autres types d'établissements d'enseignement supérieur présents à Madagascar.</h4>
            <img src="img/su.jpg" alt="sucess">
            <p>Le site peut également fournir des informations détaillées sur chaque institution, y compris leur histoire, leur mission, leur offre de formation, leurs exigences d'admission, leurs programmes de recherche, leurs installations, leurs professeurs et leurs diplômes délivrés. Ce site peut être très utile pour les étudiants qui cherchent à poursuivre des études supérieures à Madagascar, ainsi que pour les parents, les enseignants, les chercheurs et les professionnels qui souhaitent en savoir plus sur le système éducatif malgache.</p>		
            <p>En résumé, un tel site offre une plateforme importante pour accéder à des informations pertinentes et actualisées sur les institutions d'enseignement supérieur de Madagascar.</p>
        </div>
        <div class="clearfix"></div>
        </div>
    </div>
     <!-- footer -->
    <div class="w3l-footer">
      <div class="container">
         <div class="left-w3">
            <a href="#" style="color:white;">Hi'Anatra</a>
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
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>