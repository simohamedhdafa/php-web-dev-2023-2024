<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Adresse</title>
</head>
<body>
    <div class="container">
        <p>Vous habitez :</p>
        <p><?php echo $_GET['adresse']; ?></p>
        <p><?php echo $_GET['codepostal']." ".$_GET['ville']; ?></p>
        <p>revenir au <a href="formulaire1.php">formulaire1</a></p>
    </div>
</body>
</html>