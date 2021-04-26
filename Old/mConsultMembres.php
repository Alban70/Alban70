<?php
session_start();
$titre="Connexion";
$_SESSION['pass'];
$_SESSION['pseudo'];
$_SESSION['email'];
$_SESSION['nom'];
$_SESSION['prenom'];
$_SESSION['ville'];
$_SESSION['pays'];
$_SESSION['profil'];
$_SESSION['id'];

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







<html lang="fr">
	<!--<head>

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

			$(window).load(function() {
  			$('.flexslider').flexslider({
			    animation: "slide",
			    pauseOnHover: true,
			    slideshowSpeed: 5000,
			    animationSpeed:500,
			  });
			});
		</script>
                

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
            </myheader2>-->
                

            <section class="content4">
                
             <section class="view" id="cm_vente">
                    <div class="content_main">
                     <div class="content_titre_gray">
                <p class="txt_titre_black_left_margin">Vos coordonnées</p>
                </div>
                        <div class="content_formulaire">
                          <div class="cadreFormulaire">
                              
                              <label for="profil" class="labelEntreprise">Entreprise ?</label>
                               <!--<input type="text" name="profil" onfocus="consultant();" id="profil" value= <?php echo $_SESSION['profil'];?>  /> </br>-->
                               <input type="text" name="profil"  id="profil" value= <?php echo $_SESSION['profil'];?>  /> 
                            
                             <label for="pseudo">Pseudo :</label>
                               <input type="text" name="pseudo" id="pseudo" value= <?php echo $_SESSION['pseudo'];?> /></br>
                            
                               <label for="nom">Nom :</label>
                               <input type="text" name="nom" id="nom" value= <?php echo $_SESSION['nom'];?> />

                               <label for="prenom">Prénom :</label>
                               <input type="text" name="prenom" id="prenom" value= <?php echo $_SESSION['prenom'];?> /> </br>

                               <label for="ville">Ville :</label>
                               <input type="text" name="ville" id="ville" value= <?php echo $_SESSION['ville'];?> />
	   
                                 <label for="pays">Pays :</label>
                                <input type="text" name="pays" id="pays" value= <?php echo $_SESSION['pays'];?> /> </br>
                        
                            <label for="email">Email :</label>
                             <input type="email" name="email" id="email" value= <?php echo $_SESSION['email'];?> />
                            
                               <label for="pass">Password :</label>
                               <input type="password" name="pass" id="pass" value= <?php echo $_SESSION['pass'];?> /></br>


                       <input type="submit" value="Modifier" />	
                        <input type = 'button' name = 'supprimer' value = "Supprimer" onclick = "document.location.href = 'sup_membre.php'" >


                                
                        </div>  
                            
                            
                        </div>

                   
                </div> 
                <div class="imag_vente">
                     <img src=".\uploads\Logo-Well-Com-Couleur.svg" class="imag_vente" alt="logo">
                </div>
                </section>   
                
                
                
                <!--<section class="main-view">

  <div class="membre">
	<form method="post" action="modif_membre.php">

        <p>
		   
		<fieldset>
       <legend>Vos coordonnées</legend> 
	   
	   <label for="email">Quel est votre e-mail ?</label>
       <input type="email" name="email" id="email" value= <?php echo $_SESSION['email'];?> />
	   
	   <label for="pass">Votre mot de passe :</label>
       <input type="password" name="pass" id="pass" value= <?php echo $_SESSION['pass'];?> />
	   
	    <label for="pseudo">Votre pseudo :</label>
       <input type="text" name="pseudo" id="pseudo" value= <?php echo $_SESSION['pseudo'];?> />

       <label for="nom">Quel est votre nom ?</label>
       <input type="text" name="nom" id="nom" value= <?php echo $_SESSION['nom'];?> />

       <label for="prenom">Quel est votre prénom ?</label>
       <input type="text" name="prenom" id="prenom" value= <?php echo $_SESSION['prenom'];?> /> </br>
           
	   <label for="ville">Votre ville :</label>
       <input type="text" name="ville" id="ville" value= <?php echo $_SESSION['ville'];?> />
	   
	   
			 
 <label for="pays">Dans quel pays habitez-vous ?</label>
<input type="text" name="pays" id="pays" value= <?php echo $_SESSION['pays'];?> /> </br>
	
     
 <label for="profil">Quel est votre profil ?</label>
       <!--<input type="text" name="profil" onfocus="consultant();" id="profil" value= <?php echo $_SESSION['profil'];?>  /> </br>-->

      		

 </p>   
</form>




</div>


<div class="domaineConsutant">
    <p> <a href="consult_membres2_creation.php?" class="myButton_crm">Domaine</a></p>
</div>
  
	

<div id=madiv>
<form method="post" action="rechercherMembreConsult.php">      <!--mettre l'adresse du form avec le get id contact ou pas pour rester sur le meme page-->
 
 	  <p>  
	  	<fieldset>
       <legend>Vos recherches</legend> <!-- Titre du fieldset --> 
	  
    <label for="secteur">Quel secteur ?</label>
		<select name="secteur" id="secteur" value= <?php echo $_SESSION['pays'];?>/>

           <option value="italie">Italie</option>
           <option value="royaume-uni">Royaume-Uni</option>
           <option value="canada">Canada</option>
           <option value="etats-unis">États-Unis</option>
           <option value="chine">Chine</option>
           <option value="japon">Japon</option>
		   <option value="france">France</option>
           <option value="espagne">Espagne</option>
       </select><br />

		</fieldset>	</br>
	   <input type="submit" value="Valider" />

 </p> 
 
 </form>


<?php
$reponse = $bdd->prepare('SELECT * FROM membre WHERE profil = :profil AND pays = :pays');
$reponse->execute(array(
'profil' => 'consultant',
'pays' => $_SESSION['secteur'],
));
?>
 <Form action = "ajout_select_membres.php" method="POST" />
 
    <input type="hidden" id="valeur_id" name="valeur_id" value="">

    <!--Bouton supprimer aligné a droite au click les lignes cochées dans les checkbox sont supprimées-->   
   
     
        <table id="tableau">
                <tr>
					<th>id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>ville</th>
                    <th>Pays</th>
                    <th>Email</th>
                    <th>Profil</th>
					<th><p align="right"><th><input type="submit" name="ajou" value="Ajouter" /></th></p>
                </tr>
                     
            <?php
                        $i=1;
            while ($donnees = $reponse->fetch())
            {
                echo"<tr>";
                                        echo "<center><td id='id".(string)$i."'>".$donnees['id']."</td></center>";
                    echo "<center><td>".$donnees['nom']."</td></center>";
                    echo "<center><td>".$donnees['prenom']."</td></center>";
                    echo "<center><td>".$donnees['ville']."</td></center>";
                    echo "<center><td>".$donnees['pays']."</td></center>";
                    echo "<center><td>".$donnees['email']."</td></center>";
                    echo "<center><td>".$donnees['profil']."</td></center>";
                    echo "<center><td><input type='checkbox' id='suppr".(string)$i."' onclick='numeroLigne();' /></td></center>";                                       
                                echo"</tr>";
                                         
                                    $i++;
            }

            ?>
		 
        </table>

	</form>
	
<h2 id="personnalisable">un logiciel personnalisable</h2><br/>



<?php
$rep = $bdd->prepare('SELECT m.id AS id_membre, ms.ms_id AS id_membre_selection, ms.ms_idm AS id_membre_selection_consult, ms.ms_idmcl AS membre_selection_client, m.nom AS nom_membre, m.prenom AS prenom_membre, m.ville AS ville_membre, m.pays AS pays_membre, m.email AS email_membre, m.profil AS profil_membre FROM membre AS m INNER JOIN membre_selection AS ms ON ms.ms_idmcl = m.id WHERE ms.ms_idmcl = :id_membre');
$rep->execute(array(
'id_membre' => $_SESSION['id']));
?>
 <Form action = "action_select_membres.php" method="POST" />
 
    <input type="hidden" id="valeur_id" name="valeur_id" value="">

    <!--Bouton supprimer aligné a droite au click les lignes cochées dans les checkbox sont supprimées-->   
   
     
        <table id="tableau2">
                <tr>
					<th>id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>ville</th>
                    <th>Pays</th>
                    <th>Email</th>
                    <th>Profil</th>
					<th><p align="right"><th><input type="submit" name="act" value="Action" /></th></p>
                    <th><p align="right"><th><input type="submit" name="suppr" value="Supprimer" /></th></p>
                </tr>
                     
            <?php
                        $i=1;
            while ($data = $rep->fetch())
            {
                echo"<tr>";
                                        echo "<center><td id='id".(string)$i."'>".$data['id_membre']."</td></center>";
                    echo "<center><td>".$data['nom_membre']."</td></center>";
                    echo "<center><td>".$data['prenom_membre']."</td></center>";
                    echo "<center><td>".$data['ville_membre']."</td></center>";
                    echo "<center><td>".$data['pays_membre']."</td></center>";
                    echo "<center><td>".$data['email_membre']."</td></center>";
                    echo "<center><td>".$data['profil_membre']."</td></center>";
                    echo "<center><td><input type='checkbox' id='suppr".(string)$i."' onclick='numeroLigne();' /></td></center>";                                       
                                echo"</tr>";
                                         
                                    $i++;
            }

            ?>
		 
        </table>
</form>
</div>	
            </section>


                   

</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 