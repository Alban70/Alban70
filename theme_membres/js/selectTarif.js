$( document ).ready(function() {
    

    $( "#i" ).hide(".deviceCacher");
    $(".device").animate({left: '1230px'});
    $( ".device" ).show("1000");

    $(".device").animate({left: '0px'});
        
        $("#h").css('margin-left','7vw');
    
        $( "#u" ).hide(".hm_crm_baseline_text2Cacher");
    //$(".hm_crm_baseline_text2").animate({left: '1230px'});
    $( "#u" ).show(".hm_crm_baseline_text2");
    
    $( "#c" ).hide(".content_titre_slideCacher");
    $( "#c" ).show(".content_titre_slide");
    
    $( "#b" ).hide(".bouton_accorcheCacher");
    $( "#b" ).show(".bouton_accorche");
    
    $( "#f" ).show(".fusee");
    $(".fusee").animate({top: '230px'});
    //$(".fusee").css('padding-bottom', '230px');
    $( ".fusee" ).hide(4000);


    
/*$( ".hamburger" ).click(function() {
    $( ".menu" ).show();
    $(".menu").css('display','inline-block');
    $( ".cross" ).show();
    
    $( ".hamburger" ).hide();
    $(".txtCross").hide();
});

$( ".cross" ).click(function() {
   
    $( ".menu" ).hide();
    $( ".cross" ).hide();
   
    $( ".hamburger" ).show();
    $(".txtCross").show();
    
       
});*/
    
    $( ".cross" ).hide();
    $( ".menu" ).hide();



    $( "#logicielVente" ).hide();
    $( "#logicielMarketing" ).hide();
    $( "#logicielSc" ).hide();
    $( "#logicielGestion" ).hide();


});

$( "#contacts" ).click(function() {
    $( "#logicielMarketing" ).hide();
    $( "#logicielVente" ).hide();
    $( "#logicielSc" ).hide();
    $( "#logicielGestion" ).hide();
    $( "#logicielContacts" ).show();
});
$( "#vente" ).click(function() {
    $( "#logicielMarketing" ).hide();
    $( "#logicielContacts" ).hide();
    $( "#logicielSc" ).hide();
    $( "#logicielGestion" ).hide();
    $( "#logicielVente" ).show();
});
$( "#marketing" ).click(function() {
    $( "#logicielVente" ).hide();
    $( "#logicielContacts" ).hide();
    $( "#logicielSc" ).hide();
    $( "#logicielGestion" ).hide();
    $( "#logicielMarketing" ).show();
});
$( "#serviceClients" ).click(function() {
    $( "#logicielVente" ).hide();
    $( "#logicielContacts" ).hide();
    $( "#logicielMarketing" ).hide();
    $( "#logicielGestion" ).hide();
    $( "#logicielSc" ).show();
});
$( "#gestion" ).click(function() {
    $( "#logicielVente" ).hide();
    $( "#logicielContacts" ).hide();
    $( "#logicielMarketing" ).hide();
    $( "#logicielSc" ).hide();
    $( "#logicielGestion" ).show();
});