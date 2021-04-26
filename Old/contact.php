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
        <link rel="stylesheet" href="./css/flexslider.css">
        
        <link rel="stylesheet" href="css/uitotop.css">



        <link rel="stylesheet" href="./css/flexslider.css">
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
<?php
include "./include/myHeader2HamburgerCss.php";
?>
                                    

            <section class="content3">
                <section class="view" id="cm_vente">
                    <div class="content_main">
                     <div class="content_titre_gray">
                <p class="txt_titre_black_left_margin">Well-Com Solution</p>
                </div>
                    <div class="content_slogan_blue">
                    <p class="txt_slogan_blue"><strong>Faites confiance à des spécialistes</strong></p>
                    </div>
                    <div class="content_txt">
               <p class="txt_societe">Spécialisée dans le développement d'un gestionnaire d'application, Well-Com Solution propose aux équipes commerciales, marketing ou encore au service client une plateforme informatique permettant de créer et gérer une grande diversité d'applications spécifiques ou non.</p>
                    </div>
                   
                </div> 
                <div class="imag_vente">
                     <img src=".\uploads\Logo-Well-Com-Couleur.svg" class="imag_vente" alt="logo">
                </div>
                </section>
            <!--<section class="view" id="societe">
                <div class="content_titre_gray">
                <p class="txt_titre_black_left_margin">Restons en contact</p>
                </div>
            </section>
            <section class="view" id="tarifs">
                <div class="content_vente" id="a_propos">
                <p class="txt_titre_gray_left">Nous sommes à votre écoute</p>
                <p class="txt_societe">Vous avez des questions à propos de Well-Com Solutions ? ou souhaitez une démonstration personnalisée ? Notre équipe est prête à répondre à toutes vos questions</p>
                </div>
                <div class="imag_vente">
                     <img src=".\uploads\Logo-Well-Com-Couleur.svg" class="imag_vente" alt="logo">
                </div>
            </section>-->
                <div class="content_titre_blue">
                <p class="txt_titre_white_centre">UNE  EQUIPE D’EXPERTS</p>
                <p class="txt_withe_centre">Notre équipe possède une solide expertise dans le développement de solutions informatiques au sein du système d’information de l’entreprise.
Riche de son expérience, elle forme et maintient les collaborateurs de l’entreprise.</p>
                </div>
                <section class="formulaire">
                <form action="" method="post">

                    <div class="bloc_form">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" placeholder="Saisir votre nom">
                    </div>
                    <div class="bloc_form">
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" placeholder="Saisir votre prénom">
                    </div>
                    
                    <div class="bloc_form">
                    <label for="email">email :</label>
                    <input type="email" id="email" placeholder="Saisir votre email">
                    </div>
                    <div class="bloc_form">
                    <label for="tel">Tél :</label>
                    <input type="text" id="tel" placeholder="Saisir votre téléphone">
                    </div>
                    <div class="bloc_form">
                    <textarea placeholder="Commentaires">
                    </textarea>
                    <input type="submit" value="Envoie">
                    </div>
                </form>
                 <!--<section class="bloc_form">
                <div class="column-form2">
                <label>Vous etes :</label>
                <input type="radio" value="homme" id="male"> <label for="male">Un homme</label>
                <input type="radio" value="femme" id="female"> <label for="female">Une femme</label>
                </div>
                <div class="column-form2">
                <label>Vous nous avez connu par :</label>
                <input type="checkbox" value="radio" name="relation" id="radio" checked/>
                <label for="radio">Radio</label>
                <input type="checkbox" value="presse" name="relation" id="presse"><label for="presse">Presse</label>
                <input type="checkbox" value="web" name="relation" id="web"><label for="web">Web</label>
                </div>
                </section>-->


            </section>

               <?php
include "./include/footer.php";
?>   
                             </section>
                </section>

<!--<script src="js/scrollHP.js"></script>-->
    <script src="js/scrollcmHeader2.js"></script>
        <!--<script src="js/hamburgerCss2.js"></script>-->

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

