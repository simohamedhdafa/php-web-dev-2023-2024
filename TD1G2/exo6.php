<?php 
$personnes = array(
    'mdupond'   => array('prenom' => 'Martin', 'nom' => 'Dupond', 'age' => 25, 'ville' => 'Paris'),
    'jm'        => array('prenom' => 'Jean', 'nom' => 'Martin', 'age' => 20, 'ville' => 'Villetaneuse'),
    'toto'      => array('prenom' => 'Tom', 'nom' => 'Tonge', 'age' => 18, 'ville' => 'Epinay'),
    'arn'       => array('prenom' => 'Arnaud', 'nom' => 'Dupond', 'age' => 33, 'ville' => 'Paris'),
    'email'     => array('prenom' => 'Emilie', 'nom'=>'Ailta', 'age'=>46, 'ville'=>'Villetaneuse'),
    'dask'      => array('prenom' => 'Damien', 'nom'=>'Askier','age'=>7,'ville'=>'Villetaneuse')
    );

function afficher_tab($tab, $name){
    //echo "tableau : ".$$tab."</br>";
    echo "tableau : $$name</br>";
    echo '<pre>';
    print_r($tab);
    echo '</pre>';
}

$f = "personnes.csv";
$taille = -1;
$lines = file($f);
foreach($lines as $v){
    $taille++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo6</title>
</head>
<body>
    <h1>Question 1</h1>
    <?php 
    echo '33 est donnée par : $personnes[\'arn\'][\'age\'] : '.$personnes['arn']['age']; // \ est un cara d'echappement
    ?>
    <h1>Question 2</h1>
    <?php
    echo 'affichage du tableau $personnes["dask"]</br>';

    echo '<pre>';
    print_r($personnes["dask"]);
    echo '</pre>';

    ?>
    <h1>Question 3</h1>
    <?php 
        afficher_tab($personnes, 'personnes');
    ?>
    <h1>Question 4</h1>
    <table>
    <?php 
    $colonnes = str_getcsv($lines[0], ";");
    ?>
    <tr>
        <td><?php echo $colonnes[0]; ?></td>
        <td><?php echo $colonnes[1]; ?></td>
        <td><?php echo $colonnes[2]; ?></td>
        <td><?php echo $colonnes[3]; ?></td>
    </tr>
    <?php
    for ($i=1; $i<=$taille; $i++) {
        $line_data = str_getcsv($lines[$i], ";");
    ?>
       <tr>
            <td><?php echo $line_data[0]; ?></td>
            <td><?php echo $line_data[1]; ?></td>
            <td><?php echo $line_data[2]; ?></td>
            <td><?php echo $line_data[3]; ?></td>
        </tr> 
    <?php } ?>
    </table>
</body>
</html>