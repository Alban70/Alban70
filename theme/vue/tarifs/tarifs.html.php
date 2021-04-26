<section class="content3">
    <div class="view2" id="cm_vente">
        <div class="content_vente">
            <div class="content_titre_gray">
                <p class="txt_titre_black_left_margin">Découvrez notre gamme ?</p>
            </div>
            <!--<div class="content_slogan_blue">
                <p class="txt_slogan_blue"><strong>Nous sommes à votre écoute</strong></p>
            </div>-->
            <div class="content4">
                <p class="txt_slogan">Well-Com solution vous propose son logiciel CRM décliné sous forme de module selon vos besoins fonctionnels,  Testez et découvrez librement la richesse notre gamme. N'hésitez pas à contacter notre service client au 04 55 66 88 99. Nos conseillers sauront vous accompagner dans l'éxpressions de vos besoins</p>
            </div>

        </div>

        <div class="content_vente">
            <div class="imag_vente">
                <img src="<?php echo RACINE; ?>\uploads\Logo-Well-Com-Couleur.svg" alt="logo">
            </div>
        </div>
    </div>


    <section class="menu_fonct3">

        <div class="content_titre_blue">
            <div class="content4">
            <p class="txt_titre_white_centre">TARIFS</p>
        </div>
            <div class="content4">
            <p class="txt_withe_centre">Choisissez les modules en fonction des besoins pour chacun de vos collaborateurs.</p>
        </div>
        </div>
        <div class="content_footer">
            <form method="post" action="?page=tarifs">
                <div class="content4">

                    <ul class="cta-tarifs" style="background-color: white">

                        <li class="fonct_tarifs">
                            <div class="content4" style="background-color: #ffc107">
                                <div class="fonction_tarif">
                                    <a href="HomePageCRMv2.html" class="txt_lien_white"
                                       ;><?php echo $cm['libelle'] ?></a><br>
                                </div>
                                <div class="imag_bandeau">
                                    <img src="<?php echo RACINE; ?>\images\icon\sign-icon.png" alt="logo">
                                </div>

                                <div class="fonction_tarif">
                                    <input type="hidden" name="cm_id" id="cm_id"
                                           value="<?php echo $cm['article_id'] ?>">
                                    <input type="hidden" name="prix_id" id="prix_id" value="<?php echo $cm['prixHT'] ?>">
                                    <span style="color: white"><?php echo $cm['prixHT'] ?>€HT\Mois</span><br>
                                </div>
                                <div class="fonction_tarif">
                                    <a href="HomePageCRMv2.html" class="txt_lien_white"
                                       ;>Découvrez toutes les fonctionnalités</a><br>
                                </div>
                            </div>
                            <div class="content4" style="background-color: lightgray;">

                            <div class="content_cm">
                                <ul class ="ul_center_sm">
                                    <li class="txt_tarif">Gestion &amp; Suivi d’affaires</li>
                                    <li class="txt_tarif">Pilotage des Objectifs commerciaux</li>
                                    <li class="txt_tarif">Automatisation des processus spécifiques</li>
                                    <li class="txt_tarif">Géolocalisation</li>
                                    <li class="txt_tarif">Partage de documents</li>
                                    <li class="txt_tarif">Reporting commercial</li>
                                </ul>
                            </div>

                            <div class="content4" id="cal">
                                <div class="content_center" style="background-color: #4A89DC">
                                    <div class="fonct_txt_HP">
                                        <p style="color: white;">Nombre d'utilisateurs :</p>
                                    </div>
                                    </br>
                                    <div class="form">
                                        <input type="number" name="nbCm" id="nbCm" value=""
                                               style="width: 90px; background-color: white; !important;"/>
                                    </div>
                                    <!--<div class="add">-->
                                    <div class="content_contact">

                                        <div class="addbt">
                                            <div id="dPlus" class="containerPlus">
                                                <span class="glyphicon glyphicon-plus" style="width: 20%; height: 20%;"></span>
                                                <!--<div class="bars1"></div>
                                                <div class="bars2"></div>
                                                <div class="bars3"></div>-->

                                            </div>

                                        </div>
                                        <div class="addbt">

                                            <div id="dMoins" class="containerMoins">

                                                <div class="bars1"></div>
                                                <div class="bars2"></div>
                                                <div class="bars3"></div>

                                            </div>

                                        </div>
                                        <!--</ul>-->
                                    </div>

                                    <div class="content4">
                                        <div class="fonct_txt_HP">
                                            <p style="color: white;">Total mensuel HT:</p>
                                        </div>
                                        </br>
                                        <div class="form">
                                            <input type="number" name="totMcm" id="totMcm" value=""
                                                   style="width: 90px; background-color: white; !important;"/>
                                            <div class="form">
                                                <p style="color: white;">€</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="content_padding_top_button">
                                        <button class="btn btn-primary" name="test"
                                                style="background-color: #ffc107; !important;">Tester grauitement
                                        </button>
                                    </div>
                                </div>
                            </div>


                        </li>





                        <li class="fonct_tarifs">
                            <div class="content4" style="background-color: #ffc107">
                                <div class="imag_bandeau">
                                    <img src="<?php echo RACINE; ?>\images\icon\users-icon.png" alt="logo">
                                </div>

                                <div class="fonction_tarif">
                                    <input type="hidden" name="vente_id" id="vente_id"
                                           value="<?php echo $vente['article_id'] ?>">
                                    <a href="HomePageCRMv2.html" class="txt_lien_white"
                                       ;><?php echo $vente['libelle'] ?></a><br>

                                    <span style="color: white"><?php echo $vente['prixHT'] ?>€HT\Mois</span>
                                </div>
                            </div>
                            <div class="content_contact" style="margin:0; background-color: #cacaca; !important;">
                                <div class="content4">
                                    <div class="containerPlus">
                                        <div class="bars1" style="background-color: blue"></div>
                                        <div class="bars2" style="background-color: blue"></div>
                                        <div class="bars3" style="background-color: blue"></div>
                                    </div>
                                    <div class="fonct_txt_HP">
                                        <p class="txt_contact_manager">Contact
                                            manager</p>
                                    </div>
                                </div>
                                <ul class ="ul_center_sm">
                                    <li class="txt_tarif">Gestion &amp; Suivi d’affaires</li>
                                    <li class="txt_tarif">Pilotage des Objectifs commerciaux</li>
                                    <li class="txt_tarif">Automatisation des processus spécifiques</li>
                                    <li class="txt_tarif">Géolocalisation</li>
                                    <li class="txt_tarif">Partage de documents</li>
                                    <li class="txt_tarif">Reporting commercial</li>
                                </ul>
                            </div>
                            <div class="content4" id="cal">
                                <div class="content_center" style="background-color: #4A89DC">
                                    <div class="fonct_txt_HP">
                                        <p style="color: white;">Nombre d'utilisateurs :</p>
                                    </div>
                                    </br>
                                    <div class="form">
                                        <input type="number" name="nbVente" id="nbVente" value=""
                                               style="width: 90px; background-color: white; !important;"/>
                                    </div>
                                    <div class="content_contact">
                                        <div class="addbt">
                                            <div id="dPlusV" class="containerPlus">

                                                <div class="bars1"></div>
                                                <div class="bars2"></div>
                                                <div class="bars3"></div>
                                            </div>
                                        </div>
                                        <div class="addbt">
                                            <div id="dMoinsV" class="containerMoins">

                                                <div class="bars1"></div>
                                                <div class="bars2"></div>
                                                <div class="bars3"></div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="content4">
                                        <div class="fonct_txt_HP">
                                            <p style="color: white;">Total mensuel HT:</p>
                                        </div>
                                        </br>
                                        <div class="form">
                                            <input type="decimal" name="totMvente" id="totMvente" value=""
                                                   style="width: 90px; background-color: white; !important;"/>
                                            <div class="form">
                                                <p style="color: white;">€</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="content_padding_top_button">
                                        <button class="btn btn-primary" name="test"
                                                style="background-color: #ffc107; !important;">Tester grauitement
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </li>









                        <li class="fonct_tarifs">
                            <div class="content4" style="background-color: #ffc107">
                                <div class="imag_bandeau">
                                    <img src="<?php echo RACINE; ?>\images\icon\users-icon.png" alt="logo">
                                </div>

                                <div class="fonction_tarif">
                                    <input type="hidden" name="marketing_id" id="marketing_id"
                                           value="<?php echo $marketing['article_id'] ?>">
                                    <a href="HomePageCRMv2.html" class="txt_lien_white"
                                       ;><?php echo $marketing['libelle'] ?></a><br>

                                    <span style="color: white"><?php echo $marketing['prixHT'] ?>€HT\Mois</span>
                                </div>
                            </div>
                            <div class="content_contact" style="margin:0; background-color: #cacaca; !important;">
                                <div class="content4">
                                    <div class="containerPlus">
                                        <div class="bars1" style="background-color: blue"></div>
                                        <div class="bars2" style="background-color: blue"></div>
                                        <div class="bars3" style="background-color: blue"></div>
                                    </div>
                                    <div class="fonct_txt_HP">
                                        <p class="txt_contact_manager">Contact
                                            manager</p>
                                    </div>
                                </div>
                                <ul class ="ul_center_sm">
                                    <li class="txt_tarif">Gestion &amp; Suivi d’affaires</li>
                                    <li class="txt_tarif">Pilotage des Objectifs commerciaux</li>
                                    <li class="txt_tarif">Automatisation des processus spécifiques</li>
                                    <li class="txt_tarif">Géolocalisation</li>
                                    <li class="txt_tarif">Partage de documents</li>
                                    <li class="txt_tarif">Reporting commercial</li>
                                </ul>
                            </div>
                            <div class="content4" id="cal">
                                <div class="content_center" style="background-color: #4A89DC">
                                    <div class="fonct_txt_HP">
                                        <p style="color: white;">Nombre d'utilisateurs :</p>
                                    </div>
                                    </br>
                                    <div class="form">
                                        <input type="number" name="nbMarketing" id="nbMarketing" value=""
                                               style="width: 90px; background-color: white; !important;"/>
                                    </div>
                                    <div class="content_contact">
                                        <div class="addbt">
                                            <div id="dPlus" class="containerPlus">

                                                <div class="bars1"></div>
                                                <div class="bars2"></div>
                                                <div class="bars3"></div>
                                            </div>
                                        </div>
                                        <div class="addbt">
                                            <div id="dMoins" class="containerMoins">

                                                <div class="bars1"></div>
                                                <div class="bars2"></div>
                                                <div class="bars3"></div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="content4">
                                        <div class="fonct_txt_HP">
                                            <p style="color: white;">Total mensuel HT:</p>
                                        </div>
                                        </br>
                                        <div class="form">
                                            <input type="decimal" name="totMmarketing" id="totMmarketing" value=""
                                                   style="width: 90px; background-color: white; !important;"/>
                                            <div class="form">
                                                <p style="color: white;">€</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="content_padding_top_button">
                                        <button class="btn btn-primary" name="test"
                                                style="background-color: #ffc107; !important;">Tester grauitement
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </li>



                        <li class="fonct_tarifs">
                            <div class="content4" style="background-color: #ffc107">
                                <div class="imag_bandeau">
                                    <img src="<?php echo RACINE; ?>\images\icon\users-icon.png" alt="logo">
                                </div>

                                <div class="fonction_tarif">
                                    <input type="hidden" name="sc_id" id="sc_id"
                                           value="<?php echo $sc['article_id'] ?>">
                                    <a href="HomePageCRMv2.html" class="txt_lien_white"
                                       ;><?php echo $sc['libelle'] ?></a><br>

                                    <span style="color: white"><?php echo $sc['prixHT'] ?>€HT\Mois</span>
                                </div>
                            </div>
                            <div class="content_contact" style="margin:0; background-color: #cacaca; !important;">
                                <div class="content4">
                                    <div class="containerPlus">
                                        <div class="bars1" style="background-color: blue"></div>
                                        <div class="bars2" style="background-color: blue"></div>
                                        <div class="bars3" style="background-color: blue"></div>
                                    </div>
                                    <div class="fonct_txt_HP">
                                        <p class="txt_contact_manager">Contact
                                            manager</p>
                                    </div>
                                </div>
                                <ul class ="ul_center_sm">
                                    <li class="txt_tarif">Gestion &amp; Suivi d’affaires</li>
                                    <li class="txt_tarif">Pilotage des Objectifs commerciaux</li>
                                    <li class="txt_tarif">Automatisation des processus spécifiques</li>
                                    <li class="txt_tarif">Géolocalisation</li>
                                    <li class="txt_tarif">Partage de documents</li>
                                    <li class="txt_tarif">Reporting commercial</li>
                                </ul>
                            </div>
                            <div class="content4" id="cal">
                                <div class="content_center" style="background-color: #4A89DC">
                                    <div class="fonct_txt_HP">
                                        <p style="color: white;">Nombre d'utilisateurs :</p>
                                    </div>
                                    </br>
                                    <div class="form">
                                        <input type="number" name="nbSc" id="nbSc" value=""
                                               style="width: 90px; background-color: white; !important;"/>
                                    </div>
                                    <div class="content_contact">
                                        <div class="addbt">
                                            <div id="dPlus" class="containerPlus">

                                                <div class="bars1"></div>
                                                <div class="bars2"></div>
                                                <div class="bars3"></div>
                                            </div>
                                        </div>
                                        <div class="addbt">
                                            <div id="dMoins" class="containerMoins">

                                                <div class="bars1"></div>
                                                <div class="bars2"></div>
                                                <div class="bars3"></div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="content4">
                                        <div class="fonct_txt_HP">
                                            <p style="color: white;">Total mensuel HT:</p>
                                        </div>
                                        </br>
                                        <div class="form">
                                            <input type="decimal" name="totMsc" id="totMsc" value=""
                                                   style="width: 90px; background-color: white; !important;"/>
                                            <div class="form">
                                                <p style="color: white;">€</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="content_padding_top_button">
                                        <button class="btn btn-primary" name="test"
                                                style="background-color: #ffc107; !important;">Tester grauitement
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </li>



                        <li class="fonct_tarifs">
                            <div class="content4" style="background-color: #ffc107">
                                <div class="imag_bandeau">
                                    <img src="<?php echo RACINE; ?>\images\icon\users-icon.png" alt="logo">
                                </div>

                                <div class="fonction_tarif">
                                    <input type="hidden" name="gestion_id" id="gestion_id"
                                           value="<?php echo $gestion['article_id'] ?>">
                                    <a href="HomePageCRMv2.html" class="txt_lien_white"
                                       ;><?php echo $gestion['libelle'] ?></a><br>

                                    <span style="color: white"><?php echo $gestion['prixHT'] ?>€HT\Mois</span>
                                </div>
                            </div>
                            <div class="content_contact" style="margin:0; background-color: #cacaca; !important;">
                                <div class="content4">
                                    <div class="containerPlus">
                                        <div class="bars1" style="background-color: blue"></div>
                                        <div class="bars2" style="background-color: blue"></div>
                                        <div class="bars3" style="background-color: blue"></div>
                                    </div>
                                    <div class="fonct_txt_HP">
                                        <p class="txt_contact_manager">Contact
                                            manager</p>
                                    </div>
                                </div>
                                <ul class ="ul_center_sm">
                                    <li class="txt_tarif">Gestion &amp; Suivi d’affaires</li>
                                    <li class="txt_tarif">Pilotage des Objectifs commerciaux</li>
                                    <li class="txt_tarif">Automatisation des processus spécifiques</li>
                                    <li class="txt_tarif">Géolocalisation</li>
                                    <li class="txt_tarif">Partage de documents</li>
                                    <li class="txt_tarif">Reporting commercial</li>
                                </ul>
                            </div>
                            <div class="content4" id="cal">
                                <div class="content_center" style="background-color: #4A89DC">
                                    <div class="fonct_txt_HP">
                                        <p style="color: white;">Nombre d'utilisateurs :</p>
                                    </div>
                                    </br>
                                    <div class="form">
                                        <input type="number" name="nbGestion" id="nbGestion" value=""
                                               style="width: 90px; background-color: white; !important;"/>
                                    </div>
                                    <div class="content_contact">
                                        <div class="addbt">
                                            <div id="dPlus" class="containerPlus">

                                                <div class="bars1"></div>
                                                <div class="bars2"></div>
                                                <div class="bars3"></div>
                                            </div>
                                        </div>
                                        <div class="addbt">
                                            <div id="dMoins" class="containerMoins">

                                                <div class="bars1"></div>
                                                <div class="bars2"></div>
                                                <div class="bars3"></div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="content4">
                                        <div class="fonct_txt_HP">
                                            <p style="color: white;">Total mensuel HT:</p>
                                        </div>
                                        </br>
                                        <div class="form">
                                            <input type="decimal" name="totMgestion" id="totMgestion" value=""
                                                   style="width: 90px; background-color: white; !important;"/>
                                            <div class="form">
                                                <p style="color: white;">€</p>
                                            </div>
                                        </div>


                                    <div class="content_padding_top_button">
                                        <button class="btn btn-primary" name="test"
                                                style="background-color: #ffc107; !important;">Tester grauitement
                                        </button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>


                <section class="content4">

                    <ul class="cta-tarifs2" id="cm_vente">

                        <li class="tot_tarifs" style="background-color: #4A89DC; !important;">
                            <section class="content_contact">

                                <div class="form">
                                    <p style="color: white;">Nombre
                                        d'utilisateurs finals :</p>
                                </div>
                                </br>
                                <div class="form">
                                    <input type="number" style="width: 90px; background-color: white; !important;"
                                           name="nbreG" id="nbreG" value=""/>
                                </div>
                                </br>

                                <div class="form">
                                    <p style="color: white;">Total mensuel
                                        HT :</p>
                                </div>
                                </br>
                                <div class="form">
                                    <input type="decimal" name="totalHtG" id="totalHtG" value=""
                                           style="width: 90px; background-color: white; !important;"/>
                                </div>
                                <div class="form">
                                    <p style="color: white;">€</p>
                                </div>
                                </br>

                                <button class="btn btn-primary" name="commande">Sauvegareder votre configuration
                                </button>
                                </br>

                                <!--<div class="content4">
                                    <div class="containerPlus">
                                        <div class="bars1" style="background-color: white"></div>
                                        <div class="bars2" style="background-color: white"></div>
                                        <div class="bars3" style="background-color: white"></div>
                                    </div>
                                    <div class="fonct_txt_HP">
                                        <p class="txt_titre_white_centre" style="color: white; font-size: 1.8em;">Mise
                                            en service offerte</p>
                                    </div>
                                    <div class="fonct_txt_HP">
                                        <p style="color: white;">Comprend l’assistance au paramètrage de votre outil et
                                            une formation par visio-conférence.</p>
                                    </div>
                                </div>-->

                            </section>
                        </li>
                        <!--<li class="tot_abo">-->
                        <li class="tot_tarifs" style="background-color: #4A89DC; !important;">
                            <section class="content_contact">

                                <div class="content4">
                                    <div class="containerPlus">
                                        <div class="bars1" style="background-color: white"></div>
                                        <div class="bars2" style="background-color: white"></div>
                                        <div class="bars3" style="background-color: white"></div>
                                    </div>
                                    <div class="fonct_txt_HP">
                                        <p class="txt_titre_white_centre" style="color: white; font-size: 1.8em;">Infrastructure</p>
                                    </div>
                                    <div class="fonct_txt_HP">
                                        <ul class="ul_center_sm">
                                            <li class="txt_fonctionnalite_t">1Go pour vos données</li>
                                            <li class="txt_fonctionnalite_t">Sauvegardes journalières</li>
                                            <li class="txt_fonctionnalite_t">Accés sécurisés HTTPS</li>

                                        </ul>
                                    </div>
                                </div>



                                <div class="content4">
                                    <div class="containerPlus">
                                        <div class="bars1" style="background-color: white"></div>
                                        <div class="bars2" style="background-color: white"></div>
                                        <div class="bars3" style="background-color: white"></div>
                                    </div>
                                    <div class="fonct_txt_HP">
                                        <p class="txt_titre_white_centre" style="color: white; font-size: 1.8em;">Mise
                                            en service offerte</p>
                                    </div>
                                    <div class="fonct_txt_HP">
                                        <p style="color: white;">Comprend l’assistance au paramètrage de votre outil et
                                            une formation par visio-conférence.</p>
                                    </div>
                                </div>
                            </section>
                        </li>
                        <li class="tot_tarifs" style="background-color: #4A89DC; !important;">
                            <section class="content_contact">
                                <div class="content4">
                                    <div class="containerPlus">
                                        <div class="bars1" style="background-color: white"></div>
                                        <div class="bars2" style="background-color: white"></div>
                                        <div class="bars3" style="background-color: white"></div>
                                    </div>
                                    <div class="fonct_txt_HP">
                                        <p class="txt_titre_white_centre" style="color: white; font-size: 1.8em;">Services</p>
                                    </div>
                                    <div class="content_contact">
                                        <div class="fonct_txt_HP">
                                        <ul class="ul_center_sm">
                                            <li class="txt_fonctionnalite_t" style="color: white">Assistance téléphonique</li>
                                            <li class="txt_fonctionnalite_t" style="color: white">Maintenance technique</li>
                                            <li class="txt_fonctionnalite_t" style="color: white">Mise à jours automatiques</li>
                                            <li class="txt_fonctionnalite_t" style="color: white">Prise de controle à distance</li>

                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </li>
                    </ul>
                </section>
            </form>
        </div>
    </section>
</section>