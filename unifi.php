<?php
include 'database.php';

if (isset($_GET['nom_filieres'])) {
   $nom_filieres = $_GET['nom_filieres'];
   // Vous pouvez maintenant utiliser l'identifiant pour afficher les détails de l'université correspondante
   $universites = "SELECT * FROM universites u JOIN filieres f ON u.id_universites = f.id_universites WHERE nom_filieres LIKE '%$nom_filieres%'";
   $unifi = $db->query($universites);

   $universites_par_province = array();   $nom_filieres = $_GET['nom_filieres'];
   // Récupérer toutes les universités qui proposent cette filière
   $universites = "SELECT * FROM universites u JOIN filieres f ON u.id_universites = f.id_universites WHERE f.nom_filieres LIKE '%$nom_filieres%'";
   $resultat = $db->query($universites);
   $unifi = $resultat->fetchAll();
   // Stocker le nom de la filière dans une variable
   $nom_filiere = $unifi[0]['nom_filieres'];
}
  else{
    $sql_publique = "SELECT * FROM universites WHERE genre = 1 AND province = '$province'";
    $publiques = $db->query($sql_publique);
  
    $sql_semi_publique = "SELECT * FROM universites WHERE genre = 2 AND province = '$province'";
    $semi_publiques = $db->query($sql_semi_publique);
  
    $sql_privee = "SELECT * FROM universites WHERE genre = 3 AND province = '$province'";
    $privees = $db->query($sql_privee);
  }
  ?>

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
      <link rel="stylesheet" href="css/mis.css">
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
                 <div class="col-md-6 text-center text-lg-right"style="position: relative;right: -235px;">
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
                                      <a href="filieres.php" class="nav-item nav-link active">Filières</a>
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

      <?php
if (isset($_GET['nom_filieres'])) {
    $universites_par_province = array();
    $genre_precedent = ""; // Variable pour stocker le genre précédent

    // Regrouper les universités par province
    foreach ($unifi as $universite) {
        $province = $universite['province'];
        if (!isset($universites_par_province[$province])) {
            $universites_par_province[$province] = array();
        }
        array_push($universites_par_province[$province], $universite);
    }

    // Afficher les universités par province
    $top_values = array(48, 39, 100, 32, 29); // Tableau de valeurs de marge supérieure pour chaque province

    // Parcours des provinces
    foreach ($universites_par_province as $province => $universites) {
        $top = isset($top_values[$province - 1]) ? $top_values[$province - 1] : ''; // Récupération de la valeur de marge supérieure pour la province en cours
        if (!$top) continue; // Si la valeur de marge supérieure n'est pas définie pour la province, on continue à la prochaine boucle

        echo '<div class="province" style="border: 1px solid black;width: 100%;background: rgb(42,42,42);height: 110px;position: absolute;top: 284px;">';
        echo '<h1 style="color: white;font-size: 45px;font-weight: 100;text-align: center;position:relative;top: 15px;">';

        switch ($province) {
            case 1:
                echo 'ANTANANARIVO';
                break;
            case 2:
                echo 'TOAMASINA';
                break;
            case 3:
                echo 'ANTSIRANANANA';
                break;
            case 4:
                echo 'Fianarantsoa';
                break;
            case 5:
                echo 'Toliara';
                break;
            default:
                break;
        }

        echo '</h1>';
        echo '</div>';
        echo '<div class="team" id="management">';
        echo '<div class="container">';
        echo '<div class="w3grids">';
        $count = 0;

        // Parcours des universités
        foreach ($universites as $universite) {
            if ($count % 3 == 0) {
                echo '<div class="w3grid col-md-12">';
            }

            if ($count % 3 == 0 && $genre_precedent != $universite['genre']) {
                // Afficher le genre si c'est une nouvelle série d'universités du même genre
                switch ($universite['genre']) {
                    case 1:
                        echo '<h2 style="margin-top: 259px; margin-left: -900px;margin-bottom: 55px;">UNIVERSITE PUBLIQUE:</h2>';
                        break;
                    case 2:
                        echo '<h2 style="margin-top: 259px; margin-left: -900px;margin-bottom: 55px;">UNIVERSITE SEMI-PRIVEE:</h2>';
                        break;
                    default:
                        echo '<h2 style="margin-top: 259px; margin-left: -900px;margin-bottom: 55px;">UNIVERSITE PRIVEE:</h2>';
                        break;
                }
            }

            echo '<div class="w3grid col-md-4">';
            echo '<div class="cadre">';
            echo '<img src="img/universites/' . $universite['img_universites'] . '.jpg" alt="' . $universite['nom_universites'] . '">';
            echo '<h5>' . $universite['nom_universites'] . '</h5>';
            echo '<p>' . $universite['info'] . '</p>';
            echo '<a href="" target="_blank"><div class="socialw3-icons">';
            echo '<i class=" so1 fa fa-facebook" aria-hidden="true"></i>';
            echo '<i class=" so2 fa fa-twitter" aria-hidden="true"></i>';
            echo '<i class=" so3 fa fa-google" aria-hidden="true"></i>';
            echo '</div></a>';
            echo '</div>';
            echo '</div>';

            if (($count + 1) % 3 == 0 || ($count + 1) == count($universites)) {
                echo '</div>'; // Fermer la div "w3grid col-md-12" lorsque 3 universités sont affichées ou lors de la dernière université
            }

            $count++;
            $genre_precedent = $universite['genre']; // Mettre à jour le genre précédent
        }

        echo '<div class="clearfix"></div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
?>



   <!-- footer -->
   <div class="w3l-footer" style="margin-top :246px;width: 119%;margin-left: -104px;display: flex;position: relative;top: 23px;">
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