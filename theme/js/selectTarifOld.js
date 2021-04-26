$( document ).ready(function() {


    console.log(500);
$( ".fonct_tarifs").on("click", function(event) {
    //var valeur_id = document.getElementById("valeur_id");

    console.log(500);
//$("this").parent().find("input[name='article_id']").val()
    //console.log($(this).parentElement.children[0].value);
    console.log(2000);
    event.stopPropagation();
    console.log(3000);
    var $form = $(this);
    console.log($form);
      var  term = $form.find("input[name='article_id']").val();
    var valeur_id = term.innerHTML;
      console.log(term);


    console.log(document.getElementById("valeur_id").value= term);
    console.log(5);
//url = $form.attr("action");


    $.ajax({
        //type : 'POST{"term"}',
        type : 'POST',
        data: {"article": term},
        //data: term,
        url: "./inc/commandeLigne.php"
    });

});
});
