<?php
    function sanitize_and_validate($field, $cond, $message, &$data){
        /**
         * nettoyage et validation d'un champ du formulaire
         * @param 
         * $field : le champ à traiter
         * $cond : exigences specifiques à la validation de $field
         * $message : message d'erreur 
         * $value : 
         * $data : résumé du traitement des données du formulaire 
         * @return 
         */
        $data[$field] = array(
            'valide'    => (int) $cond,
            'err'       => $message,
            'valeur'    => isset($_GET[$field]) && !empty(trim($_GET[$field])) ? htmlspecialchars(stripslashes(trim($_GET[$field])))  : 0
        );
    }

    function afficher_tab($tab, $die = false){
        echo "<pre>";
        print_r($tab);
        echo "</pre>";
        if($die) die();
    }

