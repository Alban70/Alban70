<section class="topheader">
    <div class="logo">
        <a href="<?php echo RACINE; ?>">WC</a>
    </div>
    <div class="reseau_social2">
        <ul>
            <li class="google">
                <a href="#"><img src="<?php echo RACINE; ?>\images\icon\icon-social-twitter.png" alt"linkedin"></a>
            </li>
            <li class="google">
                <a href="#"><img src="<?php echo RACINE; ?>\images\icon\icon-social-linkedin.png" alt"linkedin"></a>
            </li>
            <li class="google">
                <a href="#"><img src="<?php echo RACINE; ?>\images\icon\icon-social-facebook.png" alt"facebook"></a>
            </li>
            <li class="google">
                <a href="#"><img src="<?php echo RACINE; ?>\images\icon\icon-social-g+.png" alt"google"></a>
            </li>
        </ul>
    </div>



    <div class="coordonnees2">
        <ul>
            <li class="tel">
                <img src="<?php echo RACINE; ?>\images\icon\tel-icon.png" alt"facebook">
                <a href="#">04 42 65 12 55</a>
            </li>
            <li class="email">
                <img src="<?php echo RACINE; ?>\images\icon\mail-icon.png" alt"facebook">
                <!--<a href="<?php echo RACINE; ?>contact">Contact@well-com-solutions.com</a>-->
                <a href="<?php echo RACINE; ?>societe/contact" class="txt_lien_blue">Contact@well-com-solutions.com</a>
            </li>
        </ul>
    </div>

    <div class="essai2">
        <div class="demo">
            <a href="connexion2.php" class="myButton_crm">Démonstration</a>
        </div>
        <div class="demo">
            <a href="FonctionnaliteCRM.php" class="myButton_crm">Essai gratuit</a>
        </div>
        <!--<div class="demo">
            <a href="connexion2.php" class="myButton_crm">Connexion</a>
        </div>-->
        <?php if (isset($_SESSION['auth']) AND $_SESSION['auth'] === true) : ?>
            <div class="demo">
                <a href="?page=deconnexion" class="myButton_crm">Déconnexion</a>
            </div>
        <?php else: ?>
            <div class="demo">
                <a href="membres.php" class="myButton_crm">Connexion</a>
            </div>
        <?php endif; ?>

    </div>

    <!--<div class="essai1">
        <div class="demo">
            <a href="FonctionnaliteCRM.php" class="myButton_crm">Essai gratuit</a>
        </div>
    </div>-->

</section>
<myheader2>
    <div id="h_hm_crm_nav_bar3" class="hpTop">
        <nav class="nav_bar">
            <ul>
                <li class="Fonctionnalite">
                    <a class="mon_nav" href="?page=client">Prospects</a>
                    <!--<div class="slideshow-text">
                    <a href="FonctionnaliteCRM">Qui sommes nous</a><br/>
                    <a href="FonctionnaliteCRMcopie.php">philosophie</a>
                    </div>-->
                </li>
                <li class="Fonctionnalite">
                    <a class="mon_nav" href="?page=client">Actions</a>
                    <!--<div class="slideshow-text">
                    <a href="FonctionnaliteCRM">Qui sommes nous</a><br/>
                    <a href="FonctionnaliteCRMcopie.php">philosophie</a>
                    </div>-->
                </li>
                <li class="Fonctionnalite">
                    <a class="mon_nav" href="?page=famille">Famille</a>
                    <!--<div class="slideshow-text">
                    <a href="FonctionnaliteCRM">Qui sommes nous</a><br/>
                    <a href="FonctionnaliteCRMcopie.php">philosophie</a>
                    </div>-->
                </li>
                <li class="Fonctionnalite">
                    <a class="mon_nav" href="?page=article">Article</a>
                </li>
                <!--<li class="Fonctionnalite">
                    <a class="mon_nav" href="accompagnement.php">Accompagnement</a>
                </li>-->
                <li class="Fonctionnalite">
                    <a class="mon_nav" href="tarifs.php">Tarifs</a>
                </li>
                <li class="Fonctionnalite">
                    <a class="mon_nav" href="?page=edito">Edito</a>
                </li>
            </ul>
        </nav>
    </div>
</myheader2>
