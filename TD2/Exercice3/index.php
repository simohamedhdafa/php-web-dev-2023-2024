
<?php 
$error = array();
    if(isset($_GET['g']) and $_GET['g']==1){
        $error[1] = "[Alerte]: Vous n'avez pas le droit d'accéder à cette page, veuillez remplir le formulaire.";
    }else if(isset($_GET['g']) and $_GET['g']==2) {
        $error[2] = "[Error]: Vous devez saisir un entier !";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de tableau</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Générateur de tableau</h1>
        <!-- Afficher l'alerte -->
        <?php if(isset($error[1])){ ?>
        <div class="alert">
            <?php echo $error[1]; ?>
        </div>
        <?php } ?>
        <form action="tableau.php" method="GET">
            <?php if(isset($error[2])){ ?>
            <div class="error">
                <?php echo $error[2]; ?>
            </div>
            <?php } ?>
            <label>Nombre de ligne</label>
            <input type="text" name="nbrligne">
            <input type="submit" value="Generer" name="submit">
        </form>
    </div>
</body>
</html>