<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saisir</title>
</head>
<body>
    <form action="sousdossier1/affiche.php" method="GET">
        <label>Prénom :</label>
        <input name="prenom" type="text" /><br>
        <label>Nom :</label>
        <input name="nom" type="text" /><br>
        <label>Adresse :</label>
        <input name="adresse" type="text" /><br>
        <label>Ville :</label>
        <input name="ville" type="text" /><br>
        <label>Code Postal :</label>
        <input name="codePostal" type="text" /><br>
        <button type="submit">Envoyer</button>
        <input type="reset">
    </form>
</body>
</html>