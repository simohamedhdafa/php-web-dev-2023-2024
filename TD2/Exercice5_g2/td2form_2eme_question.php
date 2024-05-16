<?php 
    $mois_en_francais = array(
        "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre","novembre", "decembre"
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
    <h1>Formulaire :</h1>
    <form action="td2affiche.php" method="GET">
        <select name="day">
            <option value="">--Please choose a day--</option>
            <?php for($i=0; $i<31; $i++){ ?>
            <option value="<?php echo $i+1; ?>"><?php echo str_pad((string)$i+1, 2, "0", STR_PAD_LEFT);  ?></option>
            <?php } ?>
        </select>
        <select name="month">
            <option value="">--Please choose a month--</option>
            <?php foreach($mois_en_francais as $k => $v){ ?>
            <option value="<?php echo $k; ?>"><?php echo ucfirst($v); ?></option>
            <?php } ?>
        </select>
        <select name="year">
            <option value="">--Please choose a year--</option>
            <?php for($i=1980; $i<=2025; $i++){ ?>
            <option value="<?php echo $i; ?>"><?php echo $i;  ?></option>
            <?php } ?>
        </select>
        <input name="submit" type="submit" value="ok">
    </form>
</body>
</html>