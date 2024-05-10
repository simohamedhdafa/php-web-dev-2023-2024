<?php
    require_once "util.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Public</title>
</head>
<body>
    <div class="menu">
        
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <?php if(isUserLoggedIn()){ ?>
            <li><a href="page1.php">Page 1</a></li>
            <?php } ?>
            <?php if(isUserLoggedIn()){ ?>
            <li><a href="page2.php">Page 2</a></li>
            <?php } ?>
            <?php if(!isUserLoggedIn()){ ?>
            <li><a href="connexion.php" class="login-btn">Connexion</a></li>
            <?php }else{ ?>
            <li><a href="deconnexion.php" class="logout-btn">Déconnexion</a></li>
            <?php } ?>
        </ul>
    </div>
    <h1>Bienvenue</h1>
    <p>Vous être sur une page accessible au public.</p>
</body>
</html>