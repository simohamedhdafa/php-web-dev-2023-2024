<?php 
require_once "util.php";
afficher_tab($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nombres</title>
</head>
<body>
    <div class="container">
        <h1>Entrez les nombres</h1>

        <?php if(isset($_GET['alrt']) && $_GET['alrt']==1){ ?>
            <div class="alerte">[ALERTE]: Vous n'avez pas le droit d'acceder à cette page. Veuillez remplir le formulaire ci-dessus :</div>
        <?php } ?>

        <form action="resultat.php" method="GET">
            A = <input class="error" type="text" name="nombre"> est-il compris entre B = <input type="text" name="inf"> et C = <input type="text" name="sup">?
            <input type="submit" name="submit" value="Répondre">
        </form>
    </div>
</body>
</html>