<section id="CM" class="content3">
<section class="view" id="cm_vente">
<form method="post" action="?page=commande">

    <fieldset>
        <legend>Panier</legend> <!-- Titre du fieldset -->

            <label for="libelle">libelle</label>
            <input type="text"  name="libelle" id="libelle" value= "" >


            <label for="type">type</label>
            <input type="text"  name="type" id="type" value= "" >

            <label for="statut">statut</label>
            <input type="text"  name="statut" id="statut" value= "" >
        </fieldset>

        <input type="number" id="valeur_id" name="valeur_id" >
    <button class = "btn btn-primary" name="ajouter">Ajouter</button>
    <button class = "btn btn-primary" name="modifier">Modifier</button>
    <button class = "btn btn-primary" name="supprimer" value = "Supprimer" onclick="return confirm('sur ?')">Supprimer</button><hr><br>

    </form>
</section>



<table id="tableau" class="table table-sm table-dark table-hover" weight="400px">
    <tr>
        <th>N°</th>
        <th>Libellé</th>
        <!--<th>date</th>-->
        <th>Sel</th>
    </tr>

    <tr id='id0'><td id='id0'>54</td><td >Demande d'information cuisine de luxe</td><td><input type='checkbox' id='suppr0' onclick='numeroLigne();' /></td></tr><tr id='id1'><td id='id1'>55</td><td >Commande Web</td><td><input type='checkbox' id='suppr1' onclick='numeroLigne();' /></td></tr><tr id='id2'><td id='id2'>57</td><td >Commande Web</td><td><input type='checkbox' id='suppr2' onclick='numeroLigne();' /></td></tr><tr id='id3'><td id='id3'>61</td><td >Commande</td><td><input type='checkbox' id='suppr3' onclick='numeroLigne();' /></td></tr><tr id='id4'><td id='id4'>62</td><td >Commande</td><td><input type='checkbox' id='suppr4' onclick='numeroLigne();' /></td></tr><tr id='id5'><td id='id5'>63</td><td >Commande</td><td><input type='checkbox' id='suppr5' onclick='numeroLigne();' /></td></tr><tr id='id6'><td id='id6'>68</td><td >Commande Web</td><td><input type='checkbox' id='suppr6' onclick='numeroLigne();' /></td></tr><tr id='id7'><td id='id7'>69</td><td >Commande Web</td><td><input type='checkbox' id='suppr7' onclick='numeroLigne();' /></td></tr><tr id='id8'><td id='id8'>71</td><td >Commande</td><td><input type='checkbox' id='suppr8' onclick='numeroLigne();' /></td></tr><tr id='id9'><td id='id9'>72</td><td >null</td><td><input type='checkbox' id='suppr9' onclick='numeroLigne();' /></td></tr><tr id='id10'><td id='id10'>73</td><td >null</td><td><input type='checkbox' id='suppr10' onclick='numeroLigne();' /></td></tr><tr id='id11'><td id='id11'>74</td><td >null</td><td><input type='checkbox' id='suppr11' onclick='numeroLigne();' /></td></tr><tr id='id12'><td id='id12'>75</td><td >null</td><td><input type='checkbox' id='suppr12' onclick='numeroLigne();' /></td></tr><tr id='id13'><td id='id13'>76</td><td >null</td><td><input type='checkbox' id='suppr13' onclick='numeroLigne();' /></td></tr><tr id='id14'><td id='id14'>77</td><td >Commande Web</td><td><input type='checkbox' id='suppr14' onclick='numeroLigne();' /></td></tr><tr id='id15'><td id='id15'>78</td><td >Commande Web</td><td><input type='checkbox' id='suppr15' onclick='numeroLigne();' /></td></tr>
</table>

</section>





    <!--<section id="CM" class="content3">


        <input type="hidden" id="valeur_id" name="valeur_id" value="">
        <a href=""><button class = "btn btn-primary" name="">test</button></a><hr>


        <a href="?page=article&action=ajouterArticle"><button class = "btn btn-primary" name="Ajouter">Ajouter</button></a>
        <a href="?page=marketing&action=index"><button class = "btn btn-primary" name="Modifier">Modifier</button></a>
        <a href="?action=supprimer"><button class = "btn btn-primary" name="supprimer" value = "Supprimer" >Supprimer</button></a><hr>
        <br>
        <table id="tableau" class="table table-sm table-dark table-hover" weight="400px">
            <tr>
                <th>N°</th>
                <th>Libellé</th>
                <th>date</th>
                <th>Sel</th>
            </tr>


            




            </table>


    </section>-->


