<?php
    function carre($a){
        $b = $a ** 2;
        return "$a ² = $b<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corr exo2</title>
</head>
<body>
    <h1>Corr de l'exercice 2 du DT1</h1>
    <p>
    <?php 
    for($i=1; $i<=30; $i++)
        echo carre($i);
    ?>
    </p>
</body>
</html>

