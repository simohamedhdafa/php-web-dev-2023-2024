<?php
    require_once "util.php";
    verifyAuthentication();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Page 2</title>
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="page1.php">Page 1</a></li>
            <li><a href="page2.php">Page 2</a></li>
            <li><a href="deconnexion.php" class="logout-btn">Déconnexion</a></li>
        </ul>
    </div>
    <h1>Page 2</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro veniam, 
        sapiente perspiciatis temporibus ducimus facilis maiores, minima doloremque 
        fugit repudiandae magnam ab nobis beatae. Voluptatum expedita ipsa eaque id sit.</p>
</body>
</html>