var header2 = document.querySelector("#page myheader2");
var topheader = document.querySelector(".topheader");
var logo = document.querySelector("#h_hm_crm_nav_bar3 .logo");
var RS = document.querySelector("#h_hm_crm_nav_bar3 .reseau_social2");
var coordonnees = document.querySelector("#h_hm_crm_nav_bar3 .coordonnees2");
var nav = document.querySelector("#h_hm_crm_nav_bar3 .nav_bar");

console.log(header2)
function scrolled(){
var topheaderHeight = topheader.offsetHeight,
currentScroll = document.body.scrollTop || document.documentElement.scrollTop;
	
if(currentScroll > topheaderHeight*1.15)
{
    //header2.classList.remove("myheader2");
    header2.classList.add("fixed");
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
        console.log(12)
        console.log(coordonnees)
    };
    if(nav){
    nav.classList.remove("nav_bar");
    nav.classList.add("nav_barFixe");
        console.log(12)
        console.log(coordonnees)
    };
}
else if(currentScroll == 0)
{
    header2.classList.remove("fixed");
    header2.classList.add("myheader2");
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
         console.log(13)
        console.log(coordonnees)
    };
    if(nav){
    nav.classList.remove("nav_barFixe");
    nav.classList.add("nav_bar");
        console.log(12)
        console.log(coordonnees)
    };
}


}

addEventListener("scroll", scrolled, false);