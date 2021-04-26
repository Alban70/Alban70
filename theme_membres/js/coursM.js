/*console.log(150);
var supprimer = document.getElementById('suppr');
var check = document.getElementsByName('check');

var i = 0;
var COCHE = false;
console.log(COCHE);
var tableau = document.getElementById('tableau');
console.log(250);
console.log(supprimer);
console.log(350);
console.log(tableau);
console.log(check);
if(check) {
    check.addEventListener("click", function () {
        console.log(200);
        // Parcours les lignes du tableau
        for (i = 1; i < document.getElementById("tableau").rows.length; i++) {
            console.log(i);
            console.log(80);
            // Vérifie si les cases sont cochées
            if (document.getElementById("suppr" + i).checked) {
                console.log(suppr);
                console.log(tableau);
                // case cochée
                COCHE = true;
                // Recupère l'identifiant des lignes cochées
                var valeur_id = document.getElementById("id" + i).innerHTML;
                // Transmet la variable valeur_id dans le input hidden de la page fournisseur.php
                document.getElementById("valeur_id").value = valeur_id;
                //console.log(document.getElementById("valeur_id").value= valeur_id);
            }
        }
        if (!COCHE) {
            alert("Pas de case cochée");
            //return 0;
        }


    });

};*/


function numeroLigne() {

    var tableau = document.getElementById('tableau');
    var suppr = document.getElementById('"suppr"+i');


    var i = 0;
    var COCHE = false;
    // Parcours les lignes du tableau
    for (i=1;i< document.getElementById("tableau").rows.length;i++)
    {

        //console.log(750);

        // Vérifie si les cases sont cochées
        //console.log(document.getElementById("suppr"+i).checked);

        var ch = document.getElementById("suppr"+i).checked;
        console.log(ch);
        //console.log(document.getElementById("suppr"+i);
        if(ch === true)
        //if(document.getElementById("suppr"+i).checked)
        {
            console.log(3050);
            console.log(document.getElementById("suppr"+i));
            // case cochée
            COCHE = true;
            // Recupère l'identifiant des lignes cochées
            var valeur_id = document.getElementById("id"+i).innerHTML;
            console.log(4050);
            console.log(valeur_id);
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

