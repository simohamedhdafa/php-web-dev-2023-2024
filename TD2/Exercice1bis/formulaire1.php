<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire</title>
</head>
<body>
    <h1>Exercice 1</h1>
    <?php if(isset($_GET['m'])) { ?>
            <div class="alert">[ALERTE]: Vous ne pouvez pas accéder directement à cette page. Veuillez remplir le formulaire correctement.</div>
    <?php } ?>
    <form action="afficher.php" method="GET">
        <?php if(isset($_GET['errnom'])){ ?>
            <div class="error">[ERROR]: <?php echo $_GET['errnom']; ?></div>
        <?php } ?>
        <label>Nom :</label>
        <input type="text" name="nom"
        <?php if(isset($_GET['nom'])){ ?>
            value = "<?php echo $_GET['nom'] ?>"
        <?php } ?>
        >
        <span class="obligatoire">*</span>

        <?php if(isset($_GET['errprenom'])){ ?>
            <div class="error">[ERROR]: <?php echo $_GET['errprenom']; ?></div>
        <?php } ?>
        <label>Prénom :</label>
        <input type="text" name="prenom" 
        <?php if(isset($_GET['prenom'])){ ?>
            value = "<?php echo $_GET['prenom'] ?>"
        <?php } ?>
        >  
        <span class="obligatoire">*</span>

        <label>Adresse :</label>
        <input type="text" name="adresse"
        <?php if(isset($_GET['adresse'])){ ?>
            value = "<?php echo $_GET['adresse'] ?>"
        <?php } ?>
        >

        <?php if(isset($_GET['errville'])){ ?>
            <div class="error">[ERROR]: <?php echo $_GET['errville']; ?></div>
        <?php } ?>
        <label>Ville :</label>
        <input type="text" name="ville"
        <?php if(isset($_GET['ville'])){ ?>
            value = "<?php echo $_GET['ville'] ?>"
        <?php } ?>
        >
        <span class="obligatoire">*</span>
        
        <?php if(isset($_GET['errcodepostal'])){ ?>
            <div class="error">[ERROR]: <?php echo $_GET['errcodepostal']; ?></div>
        <?php } ?>
        <label>Code Postal :</label>
        <input type="text" name="codepostal"
        <?php if(isset($_GET['codepostal'])){ ?>
            value = "<?php echo $_GET['codepostal'] ?>"
        <?php } ?>
        >
        <span class="obligatoire">*</span>

        <input type="submit" value="Envoyer" name="submit">
        <input type="reset" value="Réinitialiser">
    </form>
</body>
</html>