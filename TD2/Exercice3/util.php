<?php

function afficher_tab($tab, $stop=false){
    echo "<pre>";
    print_r($tab);
    echo "</pre>";
    if($stop) 
        die();
}