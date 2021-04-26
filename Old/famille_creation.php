<?php
session_start();
$titre="Connexion";
echo $_SESSION['pass'];
echo $_SESSION['email'];
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

        <link rel="stylesheet" href="style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <link rel="stylesheet" href="css/flexslider.css">
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
            <header id="h_hp_crm_autre">
                <div class="logo">
                      <img src=".\uploads\Logo-Well-Com-Couleur.svg" alt="logo">
                     <!--<a href="HomePageCRM.php">
                          trefecta
                    </a>-->
                </div>
                <section id="h_hm_crm_top">
                    <!--<p>Découvrez nos offres</p>-->
                    <ul class="cta-content">
                        <li>
                            <a href="#">
                                <div class="thumbnail">
                                    <img src=".\images\Logo_linkedin.png" alt"linkedin">
                                </div>
                            
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="thumbnail">
                                    <img src=".\images\facebook.jpg" alt"facebook">
                                </div>
                            
                            </a>
                        </li>
                    </ul>
                </section>
                <section id="h_hm_crm_nav_bar">
                    <ul class="cta-button">
                        <li>
                            <a href="#">
                                <div class="thumbnail2">
                                    <a href="crm.php" class="myButton_crm">CRM</a>
                                </div>
                            
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="thumbnail2">
                                    <a href="crm.php" class="myButton_crm">Marketing</a>
                                </div>
                            
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="thumbnail2">
                                    <a href="crm.php" class="myButton_crm">Gestion</a>
                                </div>
                            
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="thumbnail2">
                                    <a href="crm.php" class="myButton_crm">Service client</a>
                                </div>
                            
                            </a>
                        </li>
                         <li>
                            <a href="#">
                                <div class="thumbnail2">
                                    <a href="FonctionnaliteCRM" class="myButton_crm">Sur mesure</a>
                                </div>
                            
                            </a>
                        </li>
                    </ul>
                    
                          <nav id="main-navigation">
                                <ul class="cta-navigation">                                        
									
                                            <li>
                                                <div class="societe-nav">
                                                <a href="#">société</a>
                                                </div>
								        <section id="sous-navigation">
												<ul>
                                                    <div class="slideshow-text">
												<li>
                                                <div class="emplacement">
												<a href="#">Qui sommes nous</a>
                                                <a href="#">philosophie</a>
                                                </div>
												</li>
                                                    </div>
												</ul>
								        </section>
                                            </li>
                                    
                                </ul>
								<ul>                                        
									
                                            <li>
                                                <div class="societe-nav">
                                                <a href="#">Logiciel</a>
                                                </div>
								        <section id="sous-navigation">
												<ul>
                                                    <div class="slideshow-text">
												<li>
                                                <div class="emplacement">
												<a href="#">Vente</a>
                                                <a href="#">Marketing</a>
                                                </div>
												</li>
                                                        </div>
												</ul>
				                        </section>
                                            </li>
                                    
                                </ul>
                        </nav>
                </section>
            </header>  
                <nav id="nav-bar">
                    <ul>
                        <li><a href="#">Présentation générale (3mn)</a></li>
                        <li><a href="#">Collection</a></li>
                        <li><a href="#">Configurator</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="contact.htm">Contact</a></li>
                        
                    </ul>
                </nav>
            <section class="main-view">
                  <div class="Famille">
	               <form method="post" action="creat_famille.php">
         
                    <fieldset>
                   <legend>Famille</legend> <!-- Titre du fieldset --> 

                        <label for="famille">Famille</label>
                        <input type="text" name="famille" id="famille">

                   <fieldset>

                   <input type="submit" value="Valider">

                </form>
                </div>

                
                
            </section>
             <footer id="myfooter" class="myfooter_fonct">
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
                <ul/>
            </div>
            </footer>

            

        
<!--            <-->
            
        </div>
 	</body>
</html>



