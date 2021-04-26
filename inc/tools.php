<?php

function extrait($texte, $max = 150) {

    $texte = strip_tags($texte);

    if (strlen($texte) > $max) {
        $texte = substr($texte, 0, $max);
        $pos = strrpos($texte, ' ');
        if ($pos != false)
            $texte = substr($texte, 0, $pos);
        $texte .= '...';
    }
    return $texte;
}

function formatDate($date, $mask = '%A %d %B %Y %X') {
    return strftime($mask, strtotime($date));
    
}