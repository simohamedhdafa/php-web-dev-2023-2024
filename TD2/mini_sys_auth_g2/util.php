<?php 

function valider($login, $password, $path){
    $users = file($path);
    foreach($users as $ligne){
        $combinaison = str_getcsv($ligne);
        if($login==$combinaison[0] && $password==$combinaison[1])
            return true;
    }
    return false;
}

function afficher_tableau($tab){
    echo "<pre>";
    print_r($tab);
    echo "</pre>";
    die();
}