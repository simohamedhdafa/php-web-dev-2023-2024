<?php 

function valider($login, $password, $path){
    $users = file($path);
    foreach($users as $ligne){
        $combinaison = str_getcsv($ligne);
        if($login==$combinaison[0] && $password==$combinaison[1])
            /*
            var_dump($login);
            var_dump($combinaison[0]);
            var_dump($password);
            var_dump($combinaison[0]);
            echo "$login==$combinaison[0]\t";
            echo "ET\t$password==$combinaison[1]\n";
            */
            return true;
    }
    return false;
    //die();
}

function afficher_tab($tab){
    echo "<pre>";
    print_r($tab);
    echo "</pre>";
    die();
}