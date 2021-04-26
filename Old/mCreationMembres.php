<?php
session_start();
$titre="Connexion";
$_SESSION['pass'];
$_SESSION['email'];
$_SESSION['pseudo'];
?>



<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Les marges et la bordure</title>
		<meta name="description" content="Le plus simple des CRM">
		<meta name="author" content="DominicLandra">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="./js/jquery.flexslider-min.js"></script>
        
        <link rel="stylesheet" href="./theme/css/flexslider.css">
        <link rel="stylesheet" href="theme/css/uitotop.css">


        <!--<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">-->
          <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">-->
          <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
          <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>-->
          <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>-->
        <link rel="stylesheet" media="screen" href="theme/css/style.css" type="text/css">
    <style>
        .firstLink{
            color: #000000;
        }
        .firstLink:hover{
            text-decoration:none;
            background-color: antiquewhite;
        }

    </style>

        
        <script>
			// Can also be used with $(document).ready()
			$(window).load(function() {
  			$('.flexslider').flexslider({
			    animation: "slide",
			    pauseOnHover: true,
			    slideshowSpeed: 5000,
			    animationSpeed:500,
			  });
			});
		</script>
                
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	</head>
    <body>
        <div id="page">
                    <section class="topheader">
                    <div class="logo">
                    <a href="HomePageCRMv14.html">WC</a>
                    </div>
                    <div class="reseau_social2">
                    <ul>
                        <li class="linkedin">
                            <a href="#"><img src=".\images\twitter-black-shape.svg" alt"linkedin"></a>
                        </li>
                        <li class="linkedin">
                            <a href="#"><img src=".\images\linked-in-logo-of-two-letters.svg" alt"linkedin"></a>
                        </li>
                        <li class="linkedin">
                            <a href="#"><img src=".\images\facebook-letter-logo.svg" alt"facebook"></a>
                        </li>
                        <li class="linkedin">
                            <a href="#"><img src=".\images\google-plus-logo.svg" alt"google"></a>
                        </li>
                    </ul>
                    </div>

                    <div class="coordonnees2">
                    <ul>
                        <li class="tel">
                            <img src=".\images\tel.svg" alt"facebook">
                            <a href="#">04 42 65 12 55</a>
                        </li>
                        <li class="email">
                            <img src=".\images\contact.svg" alt"facebook">
                            <a href="CRM_contact.html">Contact@well-com-solutions.com</a>
                        </li>
                    </ul>
                    </div>
                    <div class="essai2">
                    <ul>
                        
                        <li class="demo">
                            <a href="connexion2.php" class="myButton_crm">Démonstration</a>
                        </li>
                        <li class="demo">
                            <a href="FonctionnaliteCRM.php" class="myButton_crm">Essai gratuit</a>
                        </li>
                        <li class="demo">
                            <a href="connexion2.php" class="myButton_crm">Connexion</a>
                        </li>
                        
                    </ul>
                    </div>
                </section>
                <myheader2>
                <div id="h_hm_crm_nav_bar3">
                        <div class="logo logoNormal" id="logoMyHeader">
                        <a href="HomePageCRMv17.html">WC</a>
                        </div>
                                <div class="reseau_social2 reseau_social2Normal">
                                <ul>
                                    <li class="linkedin">
                                        <a href="#"><img src=".\images\twitter-black-shape.svg" alt"linkedin"></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><img src=".\images\linked-in-logo-of-two-letters.svg" alt"linkedin"></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><img src=".\images\facebook-letter-logo.svg" alt"facebook"></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><img src=".\images\google-plus-logo.svg" alt"google"></a>
                                    </li>
                                </ul>
                                </div>
                    <div class="coordonnees2 coordNormal" id="coordMyHeadar">
                    <ul>
                        <li class="tel">
                            <img src=".\images\tel.svg" alt"facebook">
                            <a href="#">04 42 65 12 55</a>
                        </li>
                        <li class="email">
                            <img src=".\images\contact.svg" alt"facebook">
                            <a href="CRM_contact.html">Contact@well-com-solutions.com</a>
                        </li>
                    </ul>
                    </div>
                    
                    <nav class="nav_bar">
                    <ul>
                        <li class="Fonctionnalite">
                            <a class="mon_nav" href="societe.php">Société</a>
                                    <!--<div class="slideshow-text">
                                    <a href="FonctionnaliteCRM">Qui sommes nous</a>
                                    <a href="FonctionnaliteCRMcopie.php">philosophie</a>
                                    </div>-->
                        </li>
                        <li class="Fonctionnalite">
                            <a class="mon_nav" href="ContactManager.php">Fonctionnalités</a>
                        </li>
                        <li class="Fonctionnalite">
                            <a class="mon_nav" href="accompagnement.php">Accompagnement</a>
                        </li>
                        <li class="Fonctionnalite">
                            <a class="mon_nav" href="tarifs.php">Tarifs</a>
                        </li>
                        <li class="Fonctionnalite">
                            <a class="mon_nav" href="mConnexion.php">Ressources</a>
                        </li>
                    </ul>
                    </nav>
                    </div>
                    
                    
                        <div id="fonct" class="content_titre_blue">
                        <p class="txt_titre_white_centre">Un logiciel CRM pour PME Simple, Responsive, Sécurisé</p>
                        </div>
            </myheader2>
            
            
            
            <section class="content4">
                
             <section class="view" id="cm_vente">
                    <div class="content_main">
                     <div class="content_titre_gray">
                <p class="txt_titre_black_left_margin">Vos coordonnées</p>
                </div>
                        <div class="content_formulaire">
                          <div class="cadreFormulaire">
                              
   
                              
                              <form method="post" action="mPcreat_membre.php">
                                  
                              <label for="profil">Entreprise ?</label>
                               <!--<input type="text" name="profil" onfocus="consultant();" id="profil" value= <?php echo $_SESSION['profil'];?>  /> </br>-->
                               <input type="text" name="profil"  id="profil" /> 
                            
                             <label for="pseudo">Pseudo :</label>
                               <input type="text" name="pseudo" id="pseudo" value= <?php echo $_SESSION['pseudo'];?> /><br/>
                            
                               <label for="nom">Nom :</label>
                               <input type="text" name="nom" id="nom"/>

                               <label for="prenom">Prénom :</label>
                               <input type="text" name="prenom" id="prenom"/> <br/>

                               <label for="ville">Ville :</label>
                               <input type="text" name="ville" id="ville"/>
	   
                                      
                                 <label for="pays">Dans quel pays habitez-vous ?</label>
                                       <select name="pays" id="pays">
                                           <option value="france">France</option>
                                           <option value="espagne">Espagne</option>
                                           <option value="italie">Italie</option>
                                           <option value="royaume-uni">Royaume-Uni</option>
                                           <option value="canada">Canada</option>
                                           <option value="etats-unis">États-Unis</option>
                                           <option value="chine">Chine</option>
                                           <option value="japon">Japon</option>
                                       </select><br />

                                    
                        
                            <label for="email">Email :</label>
                             <input type="email" name="email" id="email" value= <?php echo $_SESSION['email'];?> />
                            
                               <label for="pass">Password :</label>
                               <input type="password" name="pass" id="pass" value= <?php echo $_SESSION['pass'];?> /><br/>


                       <input type="submit" value="Valider" />



                        </form>

                    </div> 
                   </div> 
                </div> 
                <div class="imag_vente">
                     <img src=".\uploads\Logo-Well-Com-Couleur.svg" class="imag_vente" alt="logo">
                </div>
                </section>   
                
 


                   
            <footer class="view" id="myfooter">
            <div class="element_myfooter">
                <h2>S'informer</h2>
                <ul>
               <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                </ul>
            </div>
            <div class="element_myfooter">
                <h2>S'informer</h2>
            <ul>
                 <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                </ul>
            </div>
                <div class="element_myfooter3">
                    <h2>S'informer</h2>
                        <ul>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                    </ul>
            </div>
            </footer>
                </section>

<script src="js/scrollHP.js"></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<script src="js/easing.js"></script>
<script src="js/jquery.ui.totop.min.js"></script>
<script src="js/wow.min.js"></script>

<script>



    new WOW().init();

    $().UItoTop({ easingType: "easeOutQuart"});

</script>                    
                    
                    
                    
</body>
</html>
    
            
            
            
            
            
            
            
 


