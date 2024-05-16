<?php 
    $loisir = array(
        "echecs" => "jeu d'echecs",
        "foot" => "football",
        "natation" => "natation",
        "gaming" => "jeux videos",
        "carting" => "carting",
        "pingpong" => "tennis de table"
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire : Radio</h1>
    <form action="td2affiche.php" method="GET">
        <?php foreach($loisir as $k=>$v){ ?>
        <input type="radio" name="loisir" value="<?php echo $k; ?>"  />
        <label><?php echo $v; ?></label>
        <?php } ?>
        <input type="submit" name="envoyer" value="Envoyer">
    </form>
</body>
</html>