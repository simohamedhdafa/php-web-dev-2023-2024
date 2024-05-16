<?php   
    require "util.php";

    $data = array();
    $params = "";
    if(isset($_GET['submit']) && $_GET['submit']==='Répondre'){
        // vérification nettoyage et validation
        sanitize_and_validate('nombre', isset($_GET['nombre']) && ctype_digit($_GET['nombre']), "[ERROR]: Entrer un nombre!", $data);
        sanitize_and_validate('inf', isset($_GET['inf']) && ctype_digit($_GET['inf']), "[ERROR]: Entrer un nombre!", $data);
        sanitize_and_validate('sup', isset($_GET['sup']) && ctype_digit($_GET['sup']), "[ERROR]: Entrer un nombre!", $data);
        // preparation des params d'url
        foreach($data as $k => $v)
            $params .= "&valide$k=".$v['valide']."&err$k=".$v['err']."&$k=".$v['valeur'];
        // si les entrées ne sont pas toutes valides 
        if(!$data['nombre']['valide'] || !$data['inf']['valide'] || !!$data['sup']['valide'] ){
            header("Location: nombres.php?".trim($params, "&"));
        }
    }else{
        // accees direct interdit
        header("Location: nombres.php?alrt=1");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultat</title>
</head>
<body>
    <h1>Résultats</h1>
    <p>
        <?php echo ((string) $data['inf'])." <= ".((string) $data['nombre'])." <= ".((string) $data['sup']); ?>
    </p>
</body>
</html>