//Fonction qui compte le nombre de ligne du tableau
function nb_ligne()
{
      var nbLignes = document.getElementById("tableau").rows.length;
      
      alert("Nombre de lignes " + nbLignes);
}
// recupère la valeur de l'identifiant de la page supprimefrs.php et verifie si il y a des cases cochées ou pas
function numeroLigne()
{
    var i = 0;
    var COCHE = false;
    // Parcours les lignes du tableau  
    for (i=1;i< document.getElementById("tableau").rows.length;i++)
    {
              // Vérifie si les cases sont cochées
        if(document.getElementById("suppr"+i).checked)
        {
                        // case cochée
            COCHE = true;
                        // Recupère l'identifiant des lignes cochées
            var valeur_id = document.getElementById("id"+i).innerHTML;
                        // Transmet la variable valeur_id dans le input hidden de la page fournisseur.php
                        document.getElementById("valeur_id").value= valeur_id;
                     //console.log(document.getElementById("valeur_id").value= valeur_id);						
                }
        }
        if(!COCHE)
                {
                     alert("Pas de case cochée");
                     //return 0;
                }
}

/* function f_consultant()
    {
     document.getElementById("profil").focus();
        if (document.getElementById("profil").focus = 'consultant')
        {
        document.getElementById("madiv").style.display = none;
        }
        else
        {
///Pour afficher la division :
        document.getElementById("ma_div").style.display = block;
        }
   window.onload = f_consultant;

function cacher_div()
    {
     //Pour masquer la division :
document.getElementById("").style.display = none;
///Pour afficher la division :
document.getElementById("").style.display = block;
   } */
        


 /*var profilELT = document.getElementById("profil").focus();
if (profilElt.value == 'consultant')
        
        {
        console.log(profilElt("profil").value= profil);
        document.getElementById("madiv").style.display = none;
        }
        else
        {
///Pour afficher la division :
        document.getElementById("ma_div").style.display = block;
        }
   window.onload;*/
/*$(window).load(function() {
  			$('.flexslider').flexslider({
			    animation: "slide",
			    pauseOnHover: true,
			    slideshowSpeed: 5000,
			    animationSpeed:500,
			  });
			});*/
    
function consultant()
{
  
var profil = document.getElementById("profil").focus();
    var madiv = document.getElementById("madiv");
       
    if(document.getElementById("profil").value=="consultant")
        {
        /*console.log(document.getElementById("profil").value);*/ 
     document.getElementById("madiv").style.display = 'none';
        }
        else 
        {
///Pour afficher la division :
        document.getElementById("ma_div").style.display = 'block';
        }
    if(document.getElementById("profil").value=="client")
         {
      
         /*console.log("sac");*/   
     document.getElementById("madiv").style.display = 'block';
        }
        else 
        {
///Pour afficher la division :
        document.getElementById("ma_div").style.display = 'none';
        }
    });


     /* var profilELT = document.getElementById("profil");
    pseudoElt.addEventListener("focus", function () {
    switch (form.elements.abonnement.value) {
    case "abonewspromo":;
});
    .focus(e) {
    var profil = document.getElementById.profil.value;
      console.log(document.getElementById("profil").focus());
if (profilElt.value == "consultant")
        
        {
        console.log(profilElt("profil").value= profil);
        document.getElementById("madiv").style.display = none;
        }
        else
        {
///Pour afficher la division :
        document.getElementById("ma_div").style.display = block;
        }
   window.onload;*/
    
