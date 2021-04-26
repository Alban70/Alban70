$( document ).ready(function() {
    var valeur_id = 0;
    document.getElementById("valeur_id").value= valeur_id;

});

function numeroLigne() {
    var tableau = document.getElementById('tableau');
    var suppr = document.getElementById('"suppr"+i');
    var i = 0;
    var COCHE = false;
    // Parcours les lignes du tableau
    for (i=1;i< tableau.rows.length;i++)
    {
        // Vérifie si les cases sont cochées
        var ch = document.getElementById("suppr"+i).checked;
        if(ch === true)
        {
            // case cochée
            COCHE = true;
            // Recupère l'identifiant des lignes cochées
            var valeur_id = document.getElementById("id"+i).cells[0].innerHTML;
            var libelle = document.getElementById("id"+i).cells[1].innerHTML;
            console.log(4050);
            console.log(valeur_id);
            console.log(libelle);
            // Transmet la variable valeur_id dans le input hidden de la page fournisseur.php
            document.getElementById("valeur_id").value= valeur_id;
            document.getElementById("libelle").value= libelle;
        }
    }
    if(!COCHE)
    {
        alert("Pas de case cochée");
        //return 0;
    }
}
function articleL() {
    console.log(102);
    var tableau = document.getElementById('article_id').innerHTML;

    console.log(102);
    console.log(tableau);

    console.log(103);

    var i = 0;
    var COCHE = false;
    // Parcours les lignes du tableau
    for (i = 1; i < tableau.length; i++) {
        console.log(1099);
        // Vérifie si les cases sont cochées
        var ch = document.getElementById("suppr" + i);

        if (ch === true) {
            // case cochée
            COCHE = true;
            // Recupère l'identifiant des lignes cochées
            //var valeur_id = document.getElementById("id"+i);
            var valeur_id = document.getElementById("id" + i).innerHTML;

            console.log(4050);
            console.log(valeur_id);

            // Transmet la variable valeur_id dans le input hidden de la page fournisseur.php
            document.getElementById("valeur_id").value = valeur_id;

        }

    }
    /*if (!COCHE) {
        alert("Pas de case cochée");
        //return 0;
    }*/
}
function numeroL(){

    var tableau = document.getElementById('tableau');
    var suppr = document.getElementById('"suppr"+i');
    console.log(102);
    console.log(tableau);
    console.log(suppr);
    console.log(103);

    var i = 0;
    var COCHE = false;
    // Parcours les lignes du tableau
    for (i=1;i< tableau.rows.length;i++)
    {
        // Vérifie si les cases sont cochées
        var ch = document.getElementById("suppr"+i).checked;
        console.log(i);
        console.log(ch);
        if(ch === true)
        {
            console.log(1033);
            // case cochée
            COCHE = true;
            // Recupère l'identifiant des lignes cochées
            var valeur_id = document.getElementById("id"+i).cells[0].innerHTML;
            var libelle = document.getElementById("id"+i).cells[1].innerHTML;
            var prix = document.getElementById("id"+i).cells[2].innerHTML;

            // Transmet la variable valeur_id dans le input hidden de la page fournisseur.php
            document.getElementById("valeur_id").value= valeur_id;
            document.getElementById("libelle").value= libelle;
            document.getElementById("prix").value= prix;
        }

    }
    if(!COCHE)
    {
        alert("Pas de case cochée");
        //return 0;

        var valeur_id = 0;
        var libelle = "";
        var prix = 0;

        document.getElementById("valeur_id").value= valeur_id;
        document.getElementById("libelle").value= libelle;
        document.getElementById("prix").value= prix;
    }
}

function valideArticle() {
    console.log(200050);
    var valeur_id = document.getElementById('valeur_id').value;

    console.log(valeur_id);
    if(valeur_id==0){
        console.log(300050);
        alert("Vous devez selectionner un article à l'aide de la case à cocher !");
        return false;
    }else{
        return true;
    }

}
function calculPrix() {

}



/*function numeroLigne() {

    var tableau = document.getElementById('tableau');
    var suppr = document.getElementById('"suppr"+i');


    var i = 0;
    var COCHE = false;
    // Parcours les lignes du tableau
    for (i=1;i< tableau.rows.length;i++)
    {
        // Vérifie si les cases sont cochées
        var ch = document.getElementById("suppr"+i).checked;
        if(ch === true)
        {
            // case cochée
            COCHE = true;
            // Recupère l'identifiant des lignes cochées
            var valeur_id = document.getElementById("id"+i).cells[0].innerHTML;
            var libelleFam = document.getElementById("id"+i).cells[1].innerHTML;
            console.log(4050);
            console.log(valeur_id);
            console.log(libelleFam);
            // Transmet la variable valeur_id dans le input hidden de la page fournisseur.php
            document.getElementById("valeur_id").value= valeur_id;
            document.getElementById("libelleFam").value= libelleFam;
        }

    }
    if(!COCHE)
    {
        alert("Pas de case cochée");
        //return 0;
    }
}*/






/*function numeroLigne() {

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
}*/

