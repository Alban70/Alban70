var header = document.querySelector("#page myheader2");
//var header2 = document.querySelector("#page myheader2");
var topheader = document.querySelector("#page .topheader");

var navCM = document.querySelector(".menu_fonct4");
var navCM5 = document.querySelector(".menu_fonct5");
console.log(11)
console.log(navCM)
var ctafonc4 = document.querySelector("#fonct .cta-fonct4");
console.log(ctafonc4)
var fonctionCM4_1 = document.querySelector("#ab");
var fonctionCM4_2 = document.querySelector("#ac");
var fonctionVente = document.querySelector("#fonct .fonction");
var fonctionTxt = document.querySelector("#fonct .fonct_txt");
var logo = document.querySelector("#h_hm_crm_nav_bar3 .logo");
var RS = document.querySelector("#h_hm_crm_nav_bar3 .reseau_social2");
var coordonnees = document.querySelector("#h_hm_crm_nav_bar3 .coordonnees2");
var nav = document.querySelector("#h_hm_crm_nav_bar3 .nav_bar");
function scrolled(){
var topheaderHeight = topheader.offsetHeight,
currentScroll = document.body.scrollTop || document.documentElement.scrollTop;
	
if(currentScroll >= topheaderHeight*1.15)
{
    header.classList.add("fixed");
    console.log(header)

    if(navCM){
        navCM.classList.remove("menu_fonct4Normal");
        navCM.classList.add("menu_fonct4Fixed");
        console.log(2)
        console.log(navCM)
    };
    if(navCM5){
        navCM5.classList.remove("menu_fonct4Normal");
        navCM5.classList.add("menu_fonct4Fixed");
    };
    /*if(ctafonc4){
        
        ctafonc4.classList.remove("ctanormal");
        ctafonc4.classList.add("ctafixed");
        fonctionCM4_1.classList.remove("fonct_CM5");
        fonctionCM4_1.classList.add("fonct_CM4_HP_Fixe");
        fonctionCM4_2.classList.remove("fonct_CM5");
        fonctionCM4_2.classList.add("fonct_CM4_HP_Fixe");
        fonctionVente.classList.remove("fonctionNormal");
        fonctionVente.classList.add("fonctionHP");
        fonctionTxt.classList.remove("fonct_txt");
        fonctionTxt.classList.add("fonct_txt_HP");
    };*/
    if(logo){
    logo.classList.remove("logoNormal");
    logo.classList.add("logoFixe");
    };
        if(RS){
    RS.classList.remove("reseau_social2Normal");
    RS.classList.add("reseau_social2Fixe");
    };
    if(coordonnees){
    coordonnees.classList.remove("coordNormal");
    coordonnees.classList.add("coordonnees2Fixe");
    };
    if(nav){
    nav.classList.remove("nav_bar");
    nav.classList.add("nav_barFixe");
    };

}
else if(currentScroll == 0)
{
    header.classList.remove("fixed");
    header.classList.add("myheader")

        if(navCM){
        navCM.classList.remove("menu_fonct4Fixed");
        navCM.classList.add("menu_fonct4Normal");
    };
    if(navCM5){
        navCM5.classList.remove("menu_fonct4Fixed");
        navCM5.classList.add("menu_fonct4Normal");
    };
    
    /*if(ctafonc4){
        ctafonc4.classList.remove("ctafixed");
        ctafonc4.classList.add("ctanormal");
        fonctionCM4_1.classList.remove("fonct_CM4_HP_Fixe");
        fonctionCM4_1.classList.add("fonct_CM5");
        fonctionCM4_2.classList.remove("fonct_CM4_HP_Fixe");
        fonctionCM4_2.classList.add("fonct_CM5");
        fonctionVente.classList.remove("fonctionHP");
        fonctionVente.classList.add("fonctionNormal");
        fonctionTxt.classList.remove("fonct_txt_HP");
        fonctionTxt.classList.add("fonct_txt");
    };*/
    
    if(logo){
    logo.classList.remove("logoFixe");
    logo.classList.add("logoNormal");
    };
    
    if(RS){
    RS.classList.remove("reseau_social2Fixe");
    RS.classList.add("reseau_social2Normal");
    };
    
    if(coordonnees){
    coordonnees.classList.remove("coordonnees2Fixe");
    coordonnees.classList.add("coordNormal");
    };
    
    if(nav){
    nav.classList.remove("nav_barFixe");
    nav.classList.add("nav_bar");
    };

}

//header.className = (currentScroll > topheaderHeight*1.15) ? "fixed" : "";
    //header.className = (currentScroll > 0) ? "fixed" : "";
}

addEventListener("scroll", scrolled, false);