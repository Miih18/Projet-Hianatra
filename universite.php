<?php
include 'database.php';

if (isset($_GET['province'])) {
  $province = $_GET['province'];
  if (isset($_GET['q'])) {
    $q = $_GET['q'];
    $sql = "SELECT * FROM universites WHERE province = '$province' AND nom_universites LIKE '%$q%'";
   
    $result = $db->query($sql);
  }

else{
  $sql_publique = "SELECT * FROM universites WHERE genre = 1 AND province = '$province'";
  $publiques = $db->query($sql_publique);

  $sql_semi_publique = "SELECT * FROM universites WHERE genre = 2 AND province = '$province'";
  $semi_publiques = $db->query($sql_semi_publique);

  $sql_privee = "SELECT * FROM universites WHERE genre = 3 AND province = '$province'";
  $privees = $db->query($sql_privee);
}
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
                            <span class="text">|</span>
                            <a class="text px-3" href="">Help</a>
                            <span class="text">|</span>
                            <a class="text pl-3" href="">Support</a>
                           <a href="accueil.php"><img src="img/logo.png" alt="" style="width: 100px;position: relative;left: -280px;top: -22px;"></a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-lg-right">
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
                     
                      <form method="GET" action="universite.php">
  <input type="hidden" name="province" value="<?php echo $province; ?>">
  <input type="text" id="q" name="q" placeholder="Université" style="width: 138px;height: 33px;color: black;font-size: 12px;position: relative;top: -32px;left: 43px;">
  <button type="submit"style=" width: 38px;background-color: rgb(32,164,71); position: relative; top: -34px;height: 33px;right: -45px;"><img src="images/search-icon.png" alt="" srcset=""  ></button>
</form>
                     
                     
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
                                      <a class="nav-item nav-link active dropdown"onclick="toggleUniversiteList()">
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
      <!-- end loader -->
      <!-- header -->

      <?php
if (isset($_GET['q']))
{
  echo'<div class="province" style="border: 1px solid black;width: 100%;background: rgb(42,42,42);height: 110px;position: absolute;top: 290px;">';
  echo'<h1 style="
  color: white;
  font-size: 45px;
  font-weight: 100;
  text-align: center;
  position:relative;
  top: 15px;">';
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
echo'</div>';
echo'<div class="team" id="management">';
echo'<div class="container">';
echo"<h3 style='margin-top :74px;'>Répértoires d'universités</h3>";
echo'<p>Faites le bon choix pour votre avenir</p>';
  echo '<div class="w3grids">';
  echo '<div class="w3grid col-md-12">';
  foreach ($result as $uni) {
    echo '<h2 style="margin-top: 150px; margin-left: -900px;">';
    switch ($uni['genre']) {
      case 1:
        echo 'UNIVERSITE PUBLIQUE:';
        break;
      case 2:
        echo 'UNIVERSITE SEMI-PRIVEE:';
        break;
      default:
        echo 'UNIVERSITE PRIVEE:';
        break;
    }
    echo '</h2>';
    echo'</div>';
    echo'<div class="w3grid col-md-4">';
    echo'<div class="cadre">';
    echo '<a href="'.$uni['site'].'">';
    echo'<img src="img/universites/' . $uni['img_universites'] . '.jpg" alt="' . $uni['nom_universites'] . '">';
    echo'</a>';
    echo "<h5>" . $uni['nom_universites'] . "</h5>";
    echo "<p>" .$uni['info']."</p>";
   echo'<a href="" target="_blank"><div class="socialw3-icons">
   <i class=" so1 fa fa-facebook" aria-hidden="true"></i>
   <i class=" so2 fa fa-twitter" aria-hidden="true"></i>
   <i class=" so3 fa fa-google" aria-hidden="true"></i>
</div>	</a>';
   echo '</div>';
   echo '</div>';
   echo'<div class="clearfix">';
   echo'</div>';
 echo'</div>';
echo'</div>';
     
  }

}


else{
    echo'<div class="province" style="border: 1px solid black;width: 100%;background: rgb(42,42,42);height: 110px;position: absolute;top: 290px;">';
     echo' <h1 style="
    color: white;
    font-size: 45px;
    font-weight: 100;
    text-align: center;
    position:relative;
    top: 15px;">';  
    // Afficher le titre avec le nom de la province sélectionnée
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

echo'</h1>';

echo'</div>';
  echo'<div class="team" id="management">';
	echo'<div class="container">';
		echo'<h3 style="margin-top :74px;"></h3>';
		echo'<p>Faites le bon choix pour votre avenir</p>';
    
    echo'<div class="w3grids">';
  if (!empty($publiques) && $publiques->rowCount() > 0):
    echo'<div class="w3grid col-md-12">';
     echo '<h2 style="margin-top: 165px; margin-left: -914px;margin-bottom: 87px;"">UNIVERSITES PUBLIQUES:</h2>';
    echo'</div>';
  
    $count = 0;
    foreach ($publiques as $publique) {
      if ($count % 3 == 0) {
        echo '<div class="w3grid col-md-12">';
      }
       echo' <div class="w3grid col-md-4">';
          echo'<div class="cadre">';
          echo '<a href="'.$publique['site'].'">';
          echo '<img src="img/universites/' . $publique['img_universites'] . '.jpg" alt="' . $publique['nom_universites'] . '">';
          echo'</a>';
            echo'<h5>'.$publique['nom_universites'].'</h5>';
            echo'<p>'.$publique['info'].'</p>';
            echo'<a href="" target="_blank"><div class="socialw3-icons">
            <i class=" so1 fa fa-facebook" aria-hidden="true"></i>
            <i class=" so2 fa fa-twitter" aria-hidden="true"></i>
            <i class=" so3 fa fa-google" aria-hidden="true"></i>
        </div>	</a>';
          echo'</div>';
        echo'</div>';
      
        $count++;
        if ($count % 3 == 0) {
          echo '</div>';
        }
      }
      if ($count % 3 != 0) {
        echo '</div>';
      }
    endif; 


    echo'<div class="w3grids">';
    if (!empty($semi_publiques) && $semi_publiques->rowCount() > 0):
      echo'<div class="w3grid col-md-12">';
       echo '<h2 style="margin-top: 150px; margin-left: -900px;">UNIVERSITES PUBLIQUES:</h2>';
      echo'</div>';
    
      $count = 0;
      foreach ($semi_publiques as $semi_publique) {
        if ($count % 3 == 0) {
          echo '<div class="w3grid col-md-12">';
        }
         echo' <div class="w3grid col-md-4">';
            echo'<div class="cadre">';
            echo '<a href="'.$semi_publique['site'].'">';
            echo '<img src="img/universites/' . $semi_publique['img_universites'] . '.jpg" alt="' . $semi_publique['nom_universites'] . '">';
            echo'</a>';
              echo'<h5>'.$semi_publique['nom_universites'].'</h5>';
              echo'<p>'.$semi_publique['info'].'</p>';
              echo'<a href="" target="_blank"><div class="socialw3-icons">
            <i class=" so1 fa fa-facebook" aria-hidden="true"></i>
            <i class=" so2 fa fa-twitter" aria-hidden="true"></i>
            <i class=" so3 fa fa-google" aria-hidden="true"></i>
        </div>	</a>';
            echo'</div>';
          echo'</div>';
        
          $count++;
          if ($count % 3 == 0) {
            echo '</div>';
          }
        }
        if ($count % 3 != 0) {
          echo '</div>';
        }
      endif; 
  
      echo'<div class="w3grids">';
      if (!empty($privees) && $privees->rowCount() > 0):
        echo'<div class="w3grid col-md-12">';
         echo '<h2 style="margin-top: 150px; margin-left: -900px;margin-bottom:47px;">UNIVERSITES PRIVEES:</h2>';
        echo'</div>';
      
        $count = 0;
        foreach ($privees as $privee) {
          if ($count % 3 == 0) {
            echo '<div class="w3grid col-md-12">';
          }
           echo' <div class="w3grid col-md-4">';
              echo'<div class="cadre">';
              echo '<a href="'.$privee['site'].'">';
              echo '<img src="img/universites/' . $privee['img_universites'] . '.jpg" alt="' . $privee['nom_universites'] . '">';
              echo'</a>';
                echo'<h5>'.$privee['nom_universites'].'</h5>';
                echo'<p>'.$privee['info'].'</p>';
                echo'<a href="" target="_blank"><div class="socialw3-icons">
            <i class=" so1 fa fa-facebook" aria-hidden="true"></i>
            <i class=" so2 fa fa-twitter" aria-hidden="true"></i>
            <i class=" so3 fa fa-google" aria-hidden="true"></i>
        </div>	</a>';
              echo'</div>';
            echo'</div>';
          
            $count++;
            if ($count % 3 == 0) {
              echo '</div>';
            }
          }
          if ($count % 3 != 0) {
            echo '</div>';
          }
        endif; 
    
    
  

  
		echo'<div class="clearfix">';
    echo'</div>';
	echo'</div>';
echo'</div>';
      }
?>
<!--//meet our management-->
         <!-- footer -->
         <div class="w3l-footer"style="margin-top :160px;width: 116%;margin-left: -89px;">
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