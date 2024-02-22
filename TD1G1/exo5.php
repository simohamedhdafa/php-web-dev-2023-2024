<?php 
    $annee = 2023;
    $months = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "decembre");
    /*
    $mois = [
        "janvier"   => 31,
        "fevrier"   => 28,
        "mars"      => 31,
        "avril"     => 30,
        "mai"       => 31,
        "juin"      => 30,
        "juillet"   => 31,
        "août"      => 31,
        "semtembre" => 30,
        "octobre"   => 31,
        "novembre"  => 30,
        "decembre"  => 31
    ];
    */
    $mois = array();
    for($i=0; $i<12; $i++){

        switch($i+1){
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12: $mois[$months[$i]] = 31; break;
            case 4: 
            case 6:
            case 9:
            case 11: $mois[$months[$i]] = 30; break;
            default : $mois[$months[$i]] = $annee%4==0 ? 29 : 28;
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corr exo 5</title>
</head>
<body>
    <ol>
        <?php 
            foreach($months as $month){
                echo "<li>$month</li>";
            }
        ?>
    </ol>
    <ol>
    <?php 
        foreach($mois as $m => $j){
            $b = ucfirst($m);
            echo "<li>$b = $j</li>";
        }
    ?>
    </ol>
</body>
</html>