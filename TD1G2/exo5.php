<?php 
    $months = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "decembre");
    /*
    $assoc_months = array(
        "janvier"   => 31, 
        "fevrier"   => 29, 
        "mars"      => 31, 
        "avril"     => 30, 
        "mai"       => 31, 
        "juin"      => 30, 
        "juillet"   => 31, 
        "août"      => 31, 
        "septembre" => 30, 
        "octobre"   => 31, 
        "novembre"  => 30, 
        "decembre"   => 31
    );
    */
    // intialiser $assoc_months à l'aide d'une instruction switch. voila les données :
    $annee = 2024;
    $assoc_months = array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <?php 
            foreach($months as $month){  
                echo "<li>$month</li>";  
            } 
        ?>
    </ol>
    <table>
        <?php 
            foreach($assoc_months as $k => $v){
                echo <<<ANNEE
                <tr>
                    <td>$k</td>
                    <td>$v</td>
                </tr>
                ANNEE;
            }
        ?>
    </table>
</body>
</html>