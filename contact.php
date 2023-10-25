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
      <body class="main-layout">
         <!-- loader  -->
         <div class="container-fluid bg-primary py-3 d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                        <div class="d-inline-flex align-items-center">
                        <a class="text pr-3" href="">FAQs</a>
                         <span class="text-white">|</span>
                         <a class="text px-3" href="">Help</a>
                         <span class="text">|</span>
                         <a class="text pl-3" href="">Support</a>
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
      <!-- loader  -->
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
                                      <a href="apropos.php" class="nav-item nav-link  ">A propos</a>
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
                                      <a href="filieres.php" class="nav-item nav-link ">Filières</a>
                                      <a href="lieux.php" class="nav-item nav-link ">Lieux</a>
                                      <a href="contact.php" class="nav-item nav-link active">Contact</a>
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
      <!-- end loader -->
      <!-- header -->
         <!--contact-->

<!--//contact-->
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Contacter nous </h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Votre nom" required="required" data-validation-required-message="Entrer votre nom s'il vous plait" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Votre e-mail" required="required" data-validation-required-message="Entrer votre e-mail s'il vous plait" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Sujet" required="required" data-validation-required-message="Entrer un sujet s'il vous plait" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Entrer votre message s'il vous plait"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                     <li><a class="menu__link scroll" href="accueil.php">Acceuil</a></li>
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