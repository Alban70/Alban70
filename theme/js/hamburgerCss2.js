document.addEventListener('DOMContentLoaded', function() {
    
    var dHamburger = document.getElementById('dHamburger');
    var dCross = document.getElementById('dCross');
   //var objet = document.getElementsByClassName('container');
    var hamburger = document.getElementById('hamburger');
    var cross = document.getElementById('cross');
    var CM = document.getElementById('CM');
    var txtMenu = document.getElementById('txtMenu');



    if(dHamburger){
    dHamburger.addEventListener("click", function(){
    dHamburger.classList.remove("container");
    dHamburger.classList.add("containerCacher");
        dCross.classList.remove("changeCacher");
        dCross.classList.add("change");
                
    hamburger.classList.remove("txt");
    hamburger.classList.add("txtCacher");
    cross.classList.add("menu"); 
    cross.classList.remove("menuCacher");
});        
};
        
if(dCross){    
    dCross.addEventListener("click", function(){
    dCross.classList.remove("change");
    dCross.classList.add("changeCacher");
         dHamburger.classList.remove("containerCacher");
    dHamburger.classList.add("container");
              
                
                
                
    hamburger.classList.remove("txtCacher");
    hamburger.classList.add("txt");
    cross.classList.add("menuCacher"); 
    cross.classList.remove("menu");
}); 
};   
    
    if(CM){
        txtMenu.innerHTML = "Modules Additionnels";
    };




});

