<?php 
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    // Récuperer les données depuis la superglobale adequate : GET, POST 
    // Verification/Validation 
    // Utilisation
    $prenom = "PRENOM";
    if(isset($_GET['prenom']) && !empty($_GET['prenom']) && ctype_alpha($_GET['prenom'])){
        $prenom = $_GET['prenom'];
    }else{
        echo "attention au type de la valeur prenom!";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher</title>
</head>
<body>
    <p>
        Bienvenue <?php echo $_GET['nom']; ?> <strong><?php echo $prenom; ?></strong>.<br>
        Nous avons bien noté que vous habitiez <?php echo $_GET['adresse']; ?> à <strong><?php echo $_GET['ville']; ?></strong>(<?php echo $_GET['codePostal']; ?>)
    </p>
</body>
</html>