<?php 
function afficher_tab($tab, $nom){
    echo "tableau $$nom :</br>";
    echo '<pre>';
    print_r($tab);
    echo '</pre>';
    //die();
}

$path = 'personnes.csv';
$cond = array();
$lines = file($path); // try
if(isset($_GET)){
    foreach($_GET as $key => $val){
        if(in_array($key, str_getcsv($lines[0])) and !empty($_GET[$key]))
        $cond[$key] = $val;
    }
}

// q3 
function csv2table($lines, $cond){
    $key2index_mapping = array_flip(str_getcsv($lines[0]));
    $taille_csv = count($lines)-1;
    // contruire la table html sous forme de string
        // contruire l'entête 
        $table = '<table  bgcolor="pink"><tr bgcolor="orange">';
        foreach(str_getcsv($lines[0]) as $col)
            $table .= "<td>$col</td>";
        $table .= '</tr>';
        // construire les autres lignes
        for($i=1, $k=0; $i<=$taille_csv; $i++){
            $line = str_getcsv($lines[$i]);
            // conditions
            $bgcolor = $k%2==0 ? "bgcolor=\"brown\"" : "bgcolor=\"pink\"";
            if(empty($cond)){
                $table .= '<tr '.$bgcolor.'>';
                foreach($line as $col)
                    $table .= "<td>$col</td>";
                $table .= '</tr>';
                $k++;
            }else if( $cond[current(array_keys($cond))] == $line[$key2index_mapping[current(array_keys($cond))]] ){
                $table .= '<tr '.$bgcolor.'>';
                foreach($line as $col)
                    $table .= "<td>$col</td>";
                $table .= '</tr>';
                $k++;
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
    <?php echo csv2table($lines, $cond); ?>
</body>
</html>




