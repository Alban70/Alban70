<section class="content3" style="margin-top: 30px">


    <section class="view" id="cm_vente">
        <div class="content_main">
            <!--<div class="content_titre_gray">
                <p class="txt_titre_black_left_margin">Well-Com Solution</p>
            </div>-->
            <div class="content_slogan_blue">
                <p class="txt_slogan_blue"><strong>Prospect</strong></p>
            </div>
    </section>

    <section id="logicielContacts" class="view2">

                    <div class="content_vente">

                        <form method="post" action="?page=entreprise">
                            <!--<div class="membre">-->
                <fieldset>
                    <legend>Coordonnées</legend> <!-- Titre du fieldset -->
                    <input type="hidden" name="idSte" id="idSte" value= "1" />
                    <!--<div class="form">
                        <p>Société :</p>
                    </div>
                    <div class="form">
                                            </div>-->

                    <input type="hidden" name="idContact" id="idContact" value= "1" >

                    <div class="form">
                        <p>Profil :</p>
                    </div>

                    <div class="form">
                        gester                    </div>
                    <div class="form">
                        alban                    </div></br>

                    <input type="hidden" name="idCoord" id="idCoord" value= "1" >
                    <input type="hidden" name="idMembre" id="idMembre" value= "1" >
                    <div class="form">
                        <p>Email :</p>
                    </div>
                    <div class="form">
                        alban.gester@gmail.com                    </div>
                    <div class="form">
                        <p>Téléphone :</p>
                    </div>
                    <div class="form">
                        0491556689                    </div></br>
                    <div class="form">
                        <p>Adresse :</p>
                    </div>
                    <div class="form" style="width: 250px; !important;">
                        rue du parc                    </div><br/>
                    <div class="form">
                        83000                    </div>
                    <div class="form">
                        toulon                    </div><br/>
                </fieldset>
                <!--</div>-->
                    <button class = "btn btn-primary" name="ModifSte">Modifier votre profil</button>
                    <button class = "btn btn-primary" name="supprimer" value = "Supprimer" >Supprimer</button><hr>
                        </form>
                    </div>

</section>

    <section class="content4" id="cm_vente">
        <form method="post" action="?page=commande">

            <!--<fieldset>


        <label for="libelle">libelle</label>
        <input type="text"  name="libelle" id="libelle" value=  >


        <label for="type">type</label>
        <input type="text"  name="type" id="type"  >

        <label for="statut">statut</label>
        <input type="text"  name="statut" id="statut" >
            </fieldset>-->

            <input type="number" id="valeur_id" name="valeur_id" >
                <!--<button class = "btn btn-primary" name="ajouter">Ajouter une commande</button>-->
            <button class = "btn btn-primary" name="ajouterCom">Ajouter une commande</button>
                <button class = "btn btn-primary" name="Modifier">Modifier</button>
                <button class = "btn btn-primary" name="supprimer" value = "Supprimer" >Supprimer</button><hr><br>

    </form>
    </section>



    <table id="tableau" class="table table-sm table-dark table-hover" weight="400px">
        <tr>
            <th>N°</th>
            <th>Libellé</th>
            <th>date</th>
            <th>Sel</th>
        </tr>

        <tr id='id0'><td id='id0'>54</td><td>Demande d'information cuisine de luxe</td><td>2018-03-09 11:52:34</td><td><input type='checkbox' id='suppr0' onclick='numeroLigne();' /></td></tr><tr id='id1'><td id='id1'>55</td><td>Commande Web</td><td>2018-06-25 18:46:10</td><td><input type='checkbox' id='suppr1' onclick='numeroLigne();' /></td></tr><tr id='id2'><td id='id2'>57</td><td>Commande Web</td><td>2018-06-26 09:39:04</td><td><input type='checkbox' id='suppr2' onclick='numeroLigne();' /></td></tr><tr id='id3'><td id='id3'>61</td><td>Commande</td><td>2018-07-09 09:26:59</td><td><input type='checkbox' id='suppr3' onclick='numeroLigne();' /></td></tr><tr id='id4'><td id='id4'>62</td><td>Commande</td><td>2018-07-09 09:27:20</td><td><input type='checkbox' id='suppr4' onclick='numeroLigne();' /></td></tr><tr id='id5'><td id='id5'>63</td><td>Commande</td><td>2018-07-09 09:27:42</td><td><input type='checkbox' id='suppr5' onclick='numeroLigne();' /></td></tr><tr id='id6'><td id='id6'>68</td><td>Commande Web</td><td>2018-09-13 15:57:53</td><td><input type='checkbox' id='suppr6' onclick='numeroLigne();' /></td></tr><tr id='id7'><td id='id7'>69</td><td>Commande Web</td><td>2018-09-13 15:58:25</td><td><input type='checkbox' id='suppr7' onclick='numeroLigne();' /></td></tr><tr id='id8'><td id='id8'>71</td><td>Commande</td><td>2018-09-22 18:57:49</td><td><input type='checkbox' id='suppr8' onclick='numeroLigne();' /></td></tr><tr id='id9'><td id='id9'>72</td><td>null</td><td>2018-09-24 07:15:57</td><td><input type='checkbox' id='suppr9' onclick='numeroLigne();' /></td></tr><tr id='id10'><td id='id10'>73</td><td>null</td><td>2018-09-24 07:17:19</td><td><input type='checkbox' id='suppr10' onclick='numeroLigne();' /></td></tr><tr id='id11'><td id='id11'>74</td><td>null</td><td>2018-09-24 07:26:04</td><td><input type='checkbox' id='suppr11' onclick='numeroLigne();' /></td></tr><tr id='id12'><td id='id12'>75</td><td>null</td><td>2018-09-24 07:35:19</td><td><input type='checkbox' id='suppr12' onclick='numeroLigne();' /></td></tr><tr id='id13'><td id='id13'>76</td><td>null</td><td>2018-09-24 07:35:53</td><td><input type='checkbox' id='suppr13' onclick='numeroLigne();' /></td></tr><tr id='id14'><td id='id14'>77</td><td>Commande Web</td><td>2018-09-24 07:38:44</td><td><input type='checkbox' id='suppr14' onclick='numeroLigne();' /></td></tr><tr id='id15'><td id='id15'>78</td><td>Commande Web</td><td>2018-09-24 07:44:23</td><td><input type='checkbox' id='suppr15' onclick='numeroLigne();' /></td></tr>





        
    </table>





</section>

<!--<script src="./theme_membres/js/coursM.js"></script>-->