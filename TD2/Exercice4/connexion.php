<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>authentification</title>
</head>
<body>
    <h1>Connectez-vous:</h1>
    <form action="authentification.php" method="POST">
        <label for="login">login</label>
        <input type="text" name="login">
        <label for="password">password</label>
        <input type="password" name="password">
        <input type="submit" name="submit" value="connexion">
    </form>
    <p>Aller à l'<a href="index.php">accueil</a></p>
</body>
</html>