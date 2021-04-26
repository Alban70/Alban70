$( document ).ready(function() {
    $( "#i" ).hide(".deviceCacher");
    $(".device").animate({left: '1230px'});
    $( ".device" ).show("1000");

    //$("#h").animate({left: '430px'});
    $(".device").animate({left: '0px'});
    
    //$("#h").hide('hm_crm_baseline_text2Cacher');
    //$("#h").css('margin-left','330px');
//$("#h").animate({left: '330px'});
    //$("#h").show('hm_crm_baseline_text2');
        
        $("#h").css('margin-left','330px');
    
        $( "#u" ).hide(".hm_crm_baseline_text2Cacher");
    $( "#u" ).show(".hm_crm_baseline_text2");
    
    $( "#c" ).hide(".content_titre_slideCacher");
    $( "#c" ).show(".content_titre_slide");
    
    $( "#b" ).hide(".bouton_accorcheCacher");
    $( "#b" ).show(".bouton_accorche");
    
    
    
    
    
$( ".hamburger" ).click(function() {
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
    
       
});
    
    $( ".cross" ).hide();
    $( ".menu" ).hide();

});