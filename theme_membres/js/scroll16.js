var header = document.querySelector("#page myheader");
var topheader = document.querySelector("#page .topheader");
//var ctafonc4 = document.querySelector("#page .cta-fonct4");
//var fonctionVente = document.querySelector("#page .fonction");
var logo = document.querySelector("#h_hm_crm_nav_bar3 .logo");
console.log(logo)
console.log(1)
function scrolled(){
var topheaderHeight = topheader.offsetHeight,
currentScroll = document.body.scrollTop || document.documentElement.scrollTop;
	
if(currentScroll > topheaderHeight*1.15)
{
    header.classList.add("fixed");
    console.log(2)
    //if(ctafonc4){
        //console.log(3)
        //ctafonc4.classList.remove("ctanormal");
        //ctafonc4.classList.add("ctafixed");
        //fonctionVente.classList.remove("fonctionNormal");
        //fonctionVente.classList.add("fonctionFixed");
        //logo.classList.remove("logoNormal");
        //logo.classList.add("logoFixe");
    };
        if(logo){
            console.log(4)
        logo.classList.remove("logoNormal");
        logo.classList.add("logoFixe");
        };
    /*if(fonctionVente){
        fonctionVente.classList.remove("fonctionNormal");
        fonctionVente.classList.add("fonctionFixed");
    };*/
}
else if(currentScroll == 0)
{
    header.classList.remove("fixed");
    //if(ctafonc4){
        //ctafonc4.classList.remove("ctafixed");
        //ctafonc4.classList.add("ctanormal");
        //fonctionVente.classList.remove("fonctionFixed");
        //fonctionVente.classList.add("fonctionNormal");
        //logo.classList.remove("logoFixe");
        //logo.classList.add("logoNormal");
    };
        if(logo){
        logo.classList.remove("logoFixe");
        logo.classList.add("logoNormal");
        };
    /*if(fonctionVente){
        fonctionVente.classList.remove("fonctionFixed");
        fonctionVente.classList.add("fonctionNormal");
    };*/
}

//header.className = (currentScroll > topheaderHeight*1.15) ? "fixed" : "";
    //header.className = (currentScroll > 0) ? "fixed" : "";
}

addEventListener("scroll", scrolled, false);