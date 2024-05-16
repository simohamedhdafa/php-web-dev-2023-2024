<?php 
    $month = array(
        'fr' => array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "decembre")
    );
    $lang_month = 'fr';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire : date</h1>
    <form action="td2affiche.php" method="GET">
        <select name="day">
            <option value="">--Please choose a day--</option>
            <?php for($i=0; $i<31; $i++){ ?>
                <option value="<?php echo $i+1; ?>"><?php echo str_pad((string) $i+1, 2, "0", STR_PAD_LEFT); $i+1; ?></option>
            <?php } ?>
        </select>
        <select name="month">
            <option value="">--Please choose a month--</option>
            <?php foreach ($month[$lang_month] as $k=>$v) { ?>
                <option value="<?php echo $k+1; ?>"><?php echo ucfirst($v); ?></option>
            <?php } ?>
        </select>
        <select name="year">
            <option value="">--Please choose a year--</option>
            <?php for($i=1980; $i<=2005; $i++){ ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>