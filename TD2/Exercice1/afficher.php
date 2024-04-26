<?php 
require_once "util.php";

$form_data = sanitize_data($_GET);
$errors = array();
$params = "";

if(isset($_GET['submit']) && trim($_GET['submit'])==="Envoyer"){
   // Nom obligatoire, alpha, taille sup a 2
   if(isset($_GET['nom']) && ctype_alpha($_GET['nom']) && strlen($_GET['nom'])>2){
    $form_data['nom'] = $_GET['nom'];
   }else{
    $errors['errnom'] = "Nom mal saisi ou pas saisi!";
   }
   // Prenom obligatoire, alpha, taille sup a 2
   if(isset($_GET['prenom']) && ctype_alpha($_GET['prenom']) && strlen($_GET['prenom'])>2){
    $form_data['prenom'] = $_GET['prenom'];
   }else{
    $errors['errprenom'] = "Prenom mal saisi ou pas saisi!";
   }
   // Ville obligatoire, alpha, taille sup a 2
   if(isset($_GET['ville']) && ctype_alpha($_GET['ville']) && strlen($_GET['ville'])>2){
    $form_data['ville'] = $_GET['ville'];
   }else{
    $errors['errville'] = "Ville mal saisie ou pas saisie!";
   }
   // Code postal obligatoire, numeric entier, taille sup a 3 chiffres et inf a 6 chiffres
   //var_dump($_GET['codepostal']);
   //afficher_tableau($_GET);
   if(isset($_GET['codepostal']) && ctype_digit($_GET['codepostal']) && 3<strlen($_GET['codepostal']) && strlen($_GET['codepostal'])<6){
    $form_data['codepostal'] = $_GET['codepostal'];
   }else{
    $errors['errcodepostal'] = "Code postal incorrecte ou mal saisi!";
   }

   // si erreurs, revenir au formulaire, garder la dernière version des données, afficher des messages d'erreur
   if(count($errors)>0){
    foreach($errors as $k => $v){
        $params .= "&".$k."=".$v;
    }
    foreach(array("nom", "prenom", "adresse", "ville", "codepostal") as $champ){
        //$champ_delimite = "'".$champ."'";
        $params .= "&".$champ."=".$_GET[$champ];
    }
    header("Location: formulaire1.php?".trim($params, "&"));
   }
}else{
    header("Location: formulaire1.php?m=1");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Afficher</title>
</head>
<body>
    <h1>Utilisation des données du formulaire1</h1>
    <div class="container">
        <p>Bienvenue <?php echo $form_data['prenom']; ?> <strong><?php echo $form_data['nom']; ?></strong>.</p>
        <p>Nous avon bien noté que vous habitiez <?php echo $form_data['adresse']; ?> à <?php echo $form_data['ville']; ?>(<?php echo $form_data['codepostal']; ?>)</p>
        <p>revenir au <a href="formulaire1.php">formulaire1</a></p>
    </div>
</body>
</html>