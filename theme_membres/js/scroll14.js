var header = document.querySelector("#page myheader");
var topheader = document.querySelector("#page .topheader");
var ctafonc4 = document.querySelector("#page .cta-fonct4");

function scrolled(){
var topheaderHeight = topheader.offsetHeight,
currentScroll = document.body.scrollTop || document.documentElement.scrollTop;
	
if(currentScroll > topheaderHeight*1.15)
{
    header.classList.add("fixed");
    if(ctafonc4){
        ctafonc4.classList.remove("ctanormal");
        ctafonc4.classList.add("ctafixed");
    }
}
else if(currentScroll == 0)
{
    header.classList.remove("fixed");
    if(ctafonc4){
        ctafonc4.classList.remove("ctafixed");
        ctafonc4.classList.add("ctanormal");
    }
}

//header.className = (currentScroll > topheaderHeight*1.15) ? "fixed" : "";
    //header.className = (currentScroll > 0) ? "fixed" : "";
}

addEventListener("scroll", scrolled, false);