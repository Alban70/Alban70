function search1() {
    var ID_fonct_search = document.getElementById('fonct_search');
    var ID_libelle = document.getElementById('libelle');
    if(ID_fonct_search) {
        var libelle = ID_libelle.value;
        $.ajax({
            //type : 'POST{"term"}',
            type : 'POST',
            data: {"search": libelle},
            //data: term,
            url: "./inc/demande.php"
        });
    };
};



/*document.addEventListener('DOMContentLoaded', function() {
    var ID_fonct_search = document.getElementById('fonct_search');
    var ID_search = document.getElementById('search');
    var libelle = document.getElementById("libelle");
    console.log('test');
    console.log(ID_search);
if(ID_fonct_search) {
    console.log('test1');
    if (ID_search) {
        console.log('test2');
        console.log(ID_search);
        ID_search.addEventListener("click", function () {
            var libelle1 = libelle.value;
            console.log(libelle1);
            console.log('test3');
            console.log('test55');
            console.log(50000);
            console.log(70000);
            console.log('test');

            $.ajax({
                //type : 'POST{"term"}',
                type : 'POST',
                data: {"search": libelle1},
                //data: term,
                url: "./inc/demande.php"
            });
            //document.location.href="?page=commandeLigne";
        });
    };
};
});*/

/*$( document ).ready(function() {
    console.log(3000);
    $( ".search").on("click", function(event) {
        console.log(5000);
        /*var libelle = document.getElementById("libelle");
        console.log(libelle);
        console.log(1200);
//$("this").parent().find("input[name='libelle']").val()
        //console.log($(this).parentElement.children[0].value);
        console.log(2000);
        event.stopPropagation();
        console.log(3000);
        var $form = $(this);
        console.log($form);
        var  term = $form.find("input[name='libelle']").val();
        var tableau = document.getElementById('tableau');

        console.log(term);


        console.log(document.getElementById("valeur_id").value= term);
        console.log(5);
//url = $form.attr("action");
        console.log(url);

        $.ajax({
            //type : 'POST{"term"}',
            type : 'POST',
            data: {"search": term},
            //data: term,
            url: "inc/commandeLigne.php"
        });

    });
});*/


