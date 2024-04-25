
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

    // verification et validation des données du form
    // si la requete ne provient pas depuis mon formulaire
    if(isset($_GET['ok']) && trim($_GET['ok'])==="Envoyer"){
        $prenom = $_GET['prenom'];
        $nom = $_GET['nom'];
        $adresse = $_GET['adresse'];
        $ville = $_GET['ville'];
        $codePostal = $_GET['codePostal'];
?>
    <p>
        Bienvenue <?php echo $prenom; ?> <strong><?php echo $nom; ?></strong>.<br>
        Nous avons bien noté que vous habitiez<br>
        <?php echo $adresse; ?> à <strong><?php echo $ville; ?></strong>(<strong><?php echo $codePostal; ?></strong>).
    </p>

<?php
    }else{
        $m = "[ALERTE] Veuillez saisir vos données avant d'afficher la bienvenue!";
        header("Location: /Exercice1_g1/formulaire1.php?m=$m");
    }
?>
    
</body>
</html>