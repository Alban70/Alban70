document.addEventListener('DOMContentLoaded', function() {

    var cal = document.getElementById('cal');
    var nbCm = 0;
    var nbVente = 0;
    var totMcm = 0;

    var dPlus = document.getElementById('dPlus');
    var dMoins = document.getElementById('dMoins');
    var prix_id = document.getElementById('prix_id').innerHTML;
    console.log(prix_id);
    //var totMcm = document.getElementById('totMcm');

    var dPlusV = document.getElementById('dPlusV');
    var dMoinsV = document.getElementById('dMoinsV');



if(cal) {
    if (dPlus) {
        dPlus.addEventListener("click", function () {
            console.log(100);
            nbCm++;
            document.getElementById("nbCm").value = nbCm;

            totMcm = prix_id*nbCm;
            console.log(totMcm);
            document.getElementById("totMcm").value = totMcm;
            console.log("nbCm");
        });
    };
    if (dMoins) {
        dMoins.addEventListener("click", function () {
            console.log(100);

            nbCm--;
            if(nbCm<=0){
                nbCm = 0;
            }
            document.getElementById("nbCm").value = nbCm;
            console.log("nbCm");
        });

    };





    if (dPlusV) {
        dPlusV.addEventListener("click", function () {
            console.log(100);
            nbVente++;
            document.getElementById("nbVente").value = nbVente;
            console.log("nbVente");
        });
    };
    if (dMoinsV) {
        dMoinsV.addEventListener("click", function () {
            console.log(100);

            nbVente--;
            if(nbVente<=0){
                nbVente = 0;
            }
            document.getElementById("nbVente").value = nbVente;
            console.log("nbVente");
        });

    };
};
});