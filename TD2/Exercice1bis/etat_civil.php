<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Etat civil</title>
</head>
<body>
    <div class="container">
        <p>Prénom : <?php echo $_GET['prenom']; ?></p>
        <p>Nom : <?php echo $_GET['nom']; ?></p>
        <p>revenir au <a href="formulaire1.php">formulaire1</a></p>
    </div>
</body>
</html>