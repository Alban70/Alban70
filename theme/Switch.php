<?php

$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

switch ($page) {
        default :
        case 1:
            $file = 'societe.php';
            break;
        case 2:
            $file = 'contactManager.php';
            break;
        case 3:
            $file = 'accompagnement.php';
            break;
        case 4:
            $file = 'tarifs.php';
            break;      
}

include 'theme/index.php';




