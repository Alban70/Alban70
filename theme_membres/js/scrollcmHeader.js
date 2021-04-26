var header = document.querySelector("#page myheader");
//var header2 = document.querySelector("#page myheader2");
var topheader = document.querySelector("#page .topheader");
var ctafonc4 = document.querySelector("#fonct .cta-fonct4");
var fonctionCM4_1 = document.querySelector("#ab");
var fonctionCM4_2 = document.querySelector("#ac");
var fonctionVente = document.querySelector("#fonct .fonction");
var fonctionTxt = document.querySelector("#fonct .fonct_txt");
var logo = document.querySelector("#h_hm_crm_nav_bar3 .logo");
var RS = document.querySelector("#h_hm_crm_nav_bar3 .reseau_social2");
var coordonnees = document.querySelector("#h_hm_crm_nav_bar3 .coordonnees2");
var nav = document.querySelector("#h_hm_crm_nav_bar3 .nav_bar");
console.log(1)
console.log(topheader)
function scrolled(){
var topheaderHeight = topheader.offsetHeight,
currentScroll = document.body.scrollTop || document.documentElement.scrollTop;
	
if(currentScroll >= topheaderHeight*1.15)
{
    header.classList.add("fixed");
    console.log(header)
    //header.classList.remove("myheader");
    if(ctafonc4){
        
        ctafonc4.classList.remove("ctanormal");
        ctafonc4.classList.add("ctafixed");
        console.log(2)
        console.log(ctafonc4)
        //fonctionVente.classList.remove("fonctionNormal");
        //fonctionVente.classList.add("fonctionFixed");
        fonctionCM4_1.classList.remove("fonct_CM5");
        fonctionCM4_1.classList.add("fonct_CM4_HP_Fixe");
        fonctionCM4_2.classList.remove("fonct_CM5");
        fonctionCM4_2.classList.add("fonct_CM4_HP_Fixe");
        console.log(3)
        console.log(fonctionCM4_1)
        console.log(fonctionCM4_2)
        fonctionVente.classList.remove("fonctionNormal");
        fonctionVente.classList.add("fonctionHP");
        fonctionTxt.classList.remove("fonct_txt");
        fonctionTxt.classList.add("fonct_txt_HP");
    };
    if(logo){
    logo.classList.remove("logoNormal");
    logo.classList.add("logoFixe");
            console.log(4)
            console.log(logo)
    };
        if(RS){
    RS.classList.remove("reseau_social2Normal");
    RS.classList.add("reseau_social2Fixe");
    };
    if(coordonnees){
    coordonnees.classList.remove("coordNormal");
    coordonnees.classList.add("coordonnees2Fixe");
        console.log(5)
        console.log(coordonnees)
    };
    if(nav){
    nav.classList.remove("nav_bar");
    nav.classList.add("nav_barFixe");
        console.log(6)
        console.log(nav)
    };

}
else if(currentScroll == 0)
{
    header.classList.remove("fixed");
    header.classList.add("myheader")
            console.log(7)
        console.log(header)
    if(ctafonc4){
        ctafonc4.classList.remove("ctafixed");
        ctafonc4.classList.add("ctanormal");
        console.log(8)
        console.log(ctafonc4)
        //fonctionVente.classList.remove("fonctionFixed");
        //fonctionVente.classList.add("fonctionNormal");
        fonctionCM4_1.classList.remove("fonct_CM4_HP_Fixe");
        fonctionCM4_1.classList.add("fonct_CM5");
        fonctionCM4_2.classList.remove("fonct_CM4_HP_Fixe");
        fonctionCM4_2.classList.add("fonct_CM5");
        console.log(9)
        console.log(fonctionCM4_1)
        console.log(fonctionCM4_2)
        fonctionVente.classList.remove("fonctionHP");
        fonctionVente.classList.add("fonctionNormal");
        fonctionTxt.classList.remove("fonct_txt_HP");
        fonctionTxt.classList.add("fonct_txt");
    };
    if(logo){
    logo.classList.remove("logoFixe");
    logo.classList.add("logoNormal");
                    console.log(10)
            console.log(logo)
    };
    if(RS){
    RS.classList.remove("reseau_social2Fixe");
    RS.classList.add("reseau_social2Normal");
    };
    if(coordonnees){
    coordonnees.classList.remove("coordonnees2Fixe");
    coordonnees.classList.add("coordNormal");
        console.log(11)
        console.log(coordonnees)
    };
    if(nav){
    nav.classList.remove("nav_barFixe");
    nav.classList.add("nav_bar");
                console.log(12)
        console.log(nav)

    };

}

//header.className = (currentScroll > topheaderHeight*1.15) ? "fixed" : "";
    //header.className = (currentScroll > 0) ? "fixed" : "";
}

addEventListener("scroll", scrolled, false);