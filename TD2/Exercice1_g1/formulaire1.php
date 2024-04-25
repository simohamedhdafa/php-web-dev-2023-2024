<?php 
    if(isset($_GET['m']) && !empty($_GET['m'])){
        echo "<p><strong>".$_GET['m']."</strong></p>";
        unset($_GET['m']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="affiche.php" method="GET">
        Prénom: <input type="text" name="prenom" /><br>
        Nom: <input type="text" name="nom" /><br>
        Adresse : <input type="text" name="adresse" /><br>
        Ville : <input type="text" name="ville" /><br>
        Code postal : <input type="text" name="codePostal" /><br>
        <input type="submit" value=" Envoyer " name="ok">
        <input type="reset" value=" Réinitialiser">
    </form>
</body>
</html>