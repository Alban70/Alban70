<br><br>
<?php if( isset($message)): ?>
  <div class="alerte-warning"><?php echo $message; ?> </div>
<?php endif; ?>
    <div>
<form method="post" action="?ref=monster">


    <label>Nom<input type="text" name="nom"></label><br>
    <label>Email<input type="text" name="Email"></label><br>
    <!--<label>Date<input type="date" name="date" value="2018-02-12"></label><br>-->
    <p>Avez vous déjà encadré une équipe de vente ?</p><br>
    <label>Oui <input type="radio" name="vente" value="Oui"></label>
    <label>Non<input type="radio" name="vente" value="Non"></label><br>

    <p>Quelles sont les méthodes de prospection que vous avez utilisées ?</p>
    Phoning <input type="checkbox" name="typePhoning" value="phoning" />
    RDV fourni <input type="checkbox" name="typeRdv" value="rdv" />
    Coupons réponses <input type="checkbox" name="typeCoupon" value="coupon" /><br>

    <input type="submit" name="ok" value="ok" />

</form>

</div>