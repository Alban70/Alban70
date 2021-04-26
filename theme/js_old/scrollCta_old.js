var header = document.querySelector("#page myheader");
var ctafonc4 = document.querySelector("#fonct .cta-fonct4");
var fonctionCM4_1 = document.querySelector("#ab");
var fonctionCM4_2 = document.querySelector("#ac");
var fonctionVente = document.querySelector("#fonct .fonction");
var fonctionTxt = document.querySelector("#fonct .fonct_txt");
console.log(1)
function scrolled(){
var topheaderHeight = topheader.offsetHeight,
currentScroll = document.body.scrollTop || document.documentElement.scrollTop;
	
if(currentScroll > topheaderHeight*1.15)
{
    header.classList.add("fixed");
    console.log(2)
    if(ctafonc4){
        
        ctafonc4.classList.remove("ctanormal");
        ctafonc4.classList.add("ctafixed");
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
    

}
else if(currentScroll == 0)
{
    header.classList.remove("fixed");
    if(ctafonc4){
        ctafonc4.classList.remove("ctafixed");
        ctafonc4.classList.add("ctanormal");
        console.log(ctafonc4)
        //fonctionVente.classList.remove("fonctionFixed");
        //fonctionVente.classList.add("fonctionNormal");
        fonctionCM4_1.classList.remove("fonct_CM4_HP_Fixe");
        fonctionCM4_1.classList.add("fonct_CM5");
        fonctionCM4_2.classList.remove("fonct_CM4_HP_Fixe");
        fonctionCM4_2.classList.add("fonct_CM5");
                console.log(fonctionVente)
        fonctionVente.classList.remove("fonctionHP");
        fonctionVente.classList.add("fonctionNormal");
        fonctionTxt.classList.remove("fonct_txt_HP");
        fonctionTxt.classList.add("fonct_txt");
    };

}

//header.className = (currentScroll > topheaderHeight*1.15) ? "fixed" : "";
    //header.className = (currentScroll > 0) ? "fixed" : "";
}

addEventListener("scroll", scrolled, false);