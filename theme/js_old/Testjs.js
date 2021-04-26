                    var STATUT = STATUT || {};


                    // Variables gérées dans l'application
                    STATUT.vars = {
                        profil: document.getElementById('m'),
                        madiv: document.getElementsByClassName("viewM")

                };

                    STATUT.events = {
                        ajouterEvent: function(el, action) {
                            el.addEventListener("click", function(e) {
                                console.log('3');

                                switch(action) {
                                    case 'cacher':
                                        STATUT.vars.madiv.style.display = 'none';
                                        console.log('a:'+'profil')
                                        break;
                                    case 'afficher':
                                        STATUT.vars.madiv.style.display = 'block';
                                        break;

                                }
                            });
                        }
                    };

                    var cacher = document.getElementById('m');
                    STATUT.events.ajouterEvent(cacher, 'cacher');
                    console.log("cacher");
                    var afficher = document.getElementById('s');
                    STATUT.events.ajouterEvent(afficher, 'afficher');

                };







                    /*var STATUT = STATUT || {};


                    // Variables gérées dans l'application
                    STATUT.vars = {
                        profil: document.getElementById('m'),
                        madiv: document.getElementsByClassName("viewM")

                };

                    STATUT.events = {
                        ajouterEvent: function(el, action) {
                            el.addEventListener("click", function(e) {
                                console.log('3');

                                switch(action) {
                                    case 'cacher':
                                        STATUT.vars.madiv.style.display = 'none';
                                        console.log('a:'+'profil')
                                        break;
                                    case 'afficher':
                                        STATUT.vars.madiv.style.display = 'block';
                                        break;

                                }
                            });
                        }
                    };

                    var cacher = document.getElementById('m');
                    STATUT.events.ajouterEvent(cacher, 'cacher');
                    console.log("cacher");
                    var afficher = document.getElementById('s');
                    STATUT.events.ajouterEvent(afficher, 'afficher');

                };


                
                
                
                
                

                   
                    var STATUT = STATUT || {};

                console.log('3');
                    // Variables gérées dans l'application
                    STATUT.vars = {
                        profil: document.getElementById('m'),
                        madiv: document.getElementById('module_marketing'),
                        annee_courante: (new Date()).getFullYear(),
                        result: document.getElementById('zone_affichage_annee'),
                        afficher_annee_courante: document.getElementById('m')

                };
               
                STATUS.actions = {
                    get_annee_courante: function() {
                        STATUT.vars.result.innerHTML = STATUT.vars.annee_courante;
                    }
                };

                    STATUT.events = {
                        ajouterEvent: function(el, action) {
                            el.addEventListener("click", function(e) {
                                console.log('5');
                                STATUT.actions[e.target.action]();

                                if(STATUT.vars.madiv.style.visibility==="visible")
                                                switch(action) {
                                                    case 'cacher':
                                                        console.log('8');
                                                        console.log(STATUT.vars.madiv.style);
                                                        STATUT.vars.madiv.innerHTML="comment ca va";
                                if(STATUT.vars.madiv.style.visibility==="visible")
                                {
                                    STATUT.vars.madiv.style.color="red";
                                    console.log(STATUT.vars.madiv.style.visibility)
                                    console.log('9');
                                };


                                    break;
                                case 'afficher':
                                    console.log('7');
                                    STATUT.vars.madiv.style.visibility="visible";
                                    console.log(STATUT.vars.madiv.style.visibility="visible")
                                    break;
                                    case 'afficher_date':
                                        console.log('7');
                                        STATUT.vars.madiv.style.visibility="visible";
                                        console.log(STATUT.vars.madiv.style.visibility="visible")
                                        break;
        }
    });
}
};

STATUT.vars.afficher_annee_courante.action = 'get_annee_courante';
var cacher = document.getElementById('m');
STATUT.events.ajouterEvent(cacher, 'cacher');
console.log('4');
console.log(cacher);
var afficher = document.getElementById('s');
STATUT.events.ajouterEvent(afficher, 'afficher');

                
                
var objet = document.getElementById('module_marketing');
objet.addEventListener("click", function(){
  objet.className = 'viewS'
}); 
*/





















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


    monConsultantfunc = function() {
        
        // Espace de nom global
        var STATUT = STATUT || {};


        // Variables gérées dans l'application
        STATUT.vars = {
            profil: document.getElementById('profil'),
            madiv: document.getElementById("madiv"),
        };
        
        STATUT.events = {
    ajouterEvent: function(el, action) {
        el.addEventListener("focus", function(e) {
        

            switch(action) {
                case 'cacher':
                    STATUT.vars.madiv.style.display = 'none';
                    break;
                case 'afficher':
                    STATUT.vars.madiv.style.display = 'block';
                    break;

                                    }
                                });
                            }
                        };

var cacher = document.getElementById('profil').value=="consultant";
STATUT.events.ajouterEvent(cacher, 'cacher');
        
var afficher = document.getElementById('profil').value=="client";
STATUT.events.ajouterEvent(afficher, 'afficher');


    }




    
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
        document.getElementById("madiv").style.display = 'block';
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
    
