<?php 
function afficher_tab($tab, $nom){
    echo "tableau $$nom :</br>";
    echo '<pre>';
    print_r($tab);
    echo '</pre>';
    //die();
}

//afficher_tab($_GET, '_GET');

$cond = array();
foreach($_GET as $key => $val){
    $cond[$key] = $val;
}

$personnes = array(
    'mdupond'   => array('prenom' => 'Martin', 'nom'    => 'Dupond', 'age'  => 25, 'ville' => 'Paris'),
    'jm'        => array('prenom' => 'Jean', 'nom'      => 'Martin', 'age'  => 20, 'ville' => 'Villetaneuse'),
    'toto'      => array('prenom' => 'Tom', 'nom'       => 'Tonge', 'age'   => 18, 'ville' => 'Epinay'),
    'arn'       => array('prenom' => 'Arnaud', 'nom'    => 'Dupond', 'age'  => 33, 'ville' => 'Paris'),
    'email'     => array('prenom' => 'Emilie', 'nom'    => 'Ailta', 'age'   => 46, 'ville' => 'Villetaneuse'),
    'dask'      => array('prenom' => 'Damien','nom'     => 'Askier','age'   => 7, 'ville'  => 'Villetaneuse')
);

// q3 
function csv2table($f, $cond){
    // extraire les données du csv vers un tableau 
    $lines = file($f);
    $key2index_mapping = array_flip(str_getcsv($lines[0]));
    $taille_csv = count($lines)-1;
    // contruire la table html sous forme de string
        // contruire l'entête 
        $table = '<table><tr>';
        foreach(str_getcsv($lines[0]) as $col)
            $table .= "<td>$col</td>";
        $table .= '</tr>';
        // construire les autres lignes
        for($i=1; $i<=$taille_csv; $i++){
            $line = str_getcsv($lines[$i]);
            // conditions
            if($cond[current(array_keys($cond))] == $line[$key2index_mapping[current(array_keys($cond))]]){
                $table .= '<tr>';
                foreach($line as $col)
                    $table .= "<td>$col</td>";
                $table .= '</tr>';
            }
            
        }
        $table .= '</table>';
    // retourner la table sous forme de string
    return $table;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corr exo6</title>
</head>
<body>
    <h1>Correction TD1 exercice 6</h1>
    <h3>Question 3:</h3>
    <?php echo csv2table('personnes.csv', $cond); ?>
</body>
</html>




