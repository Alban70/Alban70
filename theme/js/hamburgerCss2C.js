document.addEventListener('DOMContentLoaded', function() {

    var ID_h_hm_crm_nav_bar3 = document.getElementById('h_hm_crm_nav_bar3');
    var ID_fonctNav = document.getElementById('fonctNav');
    var ID_fonctNav3 = document.getElementById('fonctNav3');
    var ID_fonctNav4 = document.getElementById('fonctNav4');

    var fonctions = document.getElementById('CM');

    var dHamburger = document.getElementById('dHamburger');
    var dCross = document.getElementById('dCross');

    var dHamburger2 = document.getElementById('dHamburger2');
    var dCross2 = document.getElementById('dCross2');

    var dHamburger3 = document.getElementById('dHamburger3');
    var dCross3 = document.getElementById('dCross3');

    var dHamburger4 = document.getElementById('dHamburger4');
    var dCross4 = document.getElementById('dCross4');

    var hamburger = document.getElementById('hamburger');
    var cross = document.getElementById('cross');
    var txtMenu = document.getElementById('txtMenu');

    var hamburger2 = document.getElementById('hamburger2');
    var cross2 = document.getElementById('cross2');
    var txtMenu2 = document.getElementById('txtMenu2');

    var hamburger3 = document.getElementById('hamburger3');
    var cross3 = document.getElementById('cross3');

    var hamburger4 = document.getElementById('hamburger4');
    var cross4 = document.getElementById('cross4');

    var txtMenu3 = document.getElementById('txtMenu3');


/*var dHamburger = document.querySelector(".container");
var dCross = document.querySelector(".changeCacher");

var dHamburger2 = document.querySelector(".container");
var dCross2 = document.querySelector(".changeCacher");

var hamburger = document.querySelector(".txt");
var cross = document.querySelector(".menuCacher");

var txtMenu = document.querySelector(".txt_menu_white_centre");*/

    var CM = document.getElementById('CM');


if(ID_h_hm_crm_nav_bar3) {
    if (dHamburger) {
        dHamburger.addEventListener("click", function () {
            dHamburger.classList.remove("container");
            dHamburger.classList.add("containerCacher");
            dCross.classList.remove("changeCacher");
            dCross.classList.add("change");

            hamburger.classList.remove("txt");
            hamburger.classList.add("txtCacher");
            cross.classList.add("menu");
            cross.classList.remove("menuCacher");
        });
    }
    ;

    if (dCross) {
        dCross.addEventListener("click", function () {
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

    if (CM) {
        txtMenu.innerHTML = "DÉCOUVREZ NOS LOGICIELS MÉTIERS";
    };
};





    if(ID_fonctNav) {
        if (dHamburger2) {
            dHamburger2.addEventListener("click", function () {
                dHamburger2.classList.remove("container");
                dHamburger2.classList.add("containerCacher");
                dCross2.classList.remove("changeCacher");
                dCross2.classList.add("change");

                hamburger2.classList.remove("txt");
                hamburger2.classList.add("txtCacher");
                cross2.classList.add("menu");
                cross2.classList.remove("menuCacher");
            });
        };

        if (dCross2) {
            dCross2.addEventListener("click", function () {
                dCross2.classList.remove("change");
                dCross2.classList.add("changeCacher");
                dHamburger2.classList.remove("containerCacher");
                dHamburger2.classList.add("container");


                hamburger2.classList.remove("txtCacher");
                hamburger2.classList.add("txt");
                cross2.classList.add("menuCacher");
                cross2.classList.remove("menu");
            });
        };

        /*if (CM) {
            txtMenu.innerHTML = "Modules Additionnels";
        };*/
    };


    if(ID_fonctNav3) {
        if (dHamburger3) {
            dHamburger3.addEventListener("click", function () {
                dHamburger3.classList.remove("content4");
                dHamburger3.classList.add("containerCacher");
                dCross3.classList.remove("changeCacher");
                dCross3.classList.add("change1");

                hamburger3.classList.remove("txt");
                hamburger3.classList.add("txtCacher");
                cross3.classList.add("menu_fonct_HP");
                cross3.classList.remove("menuCacher");

                fonctions.classList.remove("fonctions");
                fonctions.classList.add("fonctions_Padding");


                addEventListener("scroll", scrolled, false);
                function scrolled() {
                    currentScroll == 0
                };

            });
        };

        if (dCross3) {
            dCross3.addEventListener("click", function () {
                dCross3.classList.remove("change1");
                dCross3.classList.add("changeCacher");
                dHamburger3.classList.remove("containerCacher");
                dHamburger3.classList.add("content4");

                fonctions.classList.add("fonctions");
                fonctions.classList.remove("fonctions_Padding");

                hamburger3.classList.remove("txtCacher");
                hamburger3.classList.add("txt");
                cross3.classList.add("menuCacher");
                cross3.classList.remove("menu_fonct_HP");
            });
        };

        /*if (CM) {
            txtMenu.innerHTML = "Modules Additionnels";
        };*/
    };


    if(ID_fonctNav4) {
        if (dHamburger4) {
            dHamburger4.addEventListener("click", function () {
                dHamburger4.classList.remove("hpTop");
                dHamburger4.classList.add("hpTopCacher");
                dCross4.classList.remove("hpTopCacher");
                dCross4.classList.add("hpTop");

                hamburger4.classList.remove("txt");
                hamburger4.classList.add("txtCacher");
                cross4.classList.add("menu_fonct_HP");
                cross4.classList.remove("menuCacher");

                fonctions.classList.remove("fonctions");
                fonctions.classList.add("fonctions_Padding");


                addEventListener("scroll", scrolled, false);
                function scrolled() {
                    currentScroll == 0
                };

            });
        };

        if (dCross4) {
            dCross4.addEventListener("click", function () {
                dCross4.classList.remove("hpTop");
                dCross4.classList.add("hpTopCacher");
                dHamburger4.classList.remove("hpTopCacher");
                dHamburger4.classList.add("hpTop");

                fonctions.classList.add("fonctions");
                fonctions.classList.remove("fonctions_Padding");

                hamburger4.classList.remove("txtCacher");
                hamburger4.classList.add("txt");
                cross4.classList.add("menuCacher");
                cross4.classList.remove("menu_fonct_HP");
            });
        };

        /*if (CM) {
            txtMenu.innerHTML = "Modules Additionnels";
        };*/
    };


});

