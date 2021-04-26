$( document ).ready(function() {

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