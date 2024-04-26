
<?php 

function sanitize_data($tab){
    foreach($tab as $k => $v)
        $tab[$k] = htmlspecialchars(stripslashes(trim($v)));
    return $tab;
}

function afficher_tableau($tab){
    echo "<pre>";
    print_r($tab);
    echo "</pre>";
    die();
}
