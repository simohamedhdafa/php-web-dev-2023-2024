<?php 

    session_start();
    if(!isset($_SESSION['login'])){
        session_destroy();
        header("Location: connexion.php");
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
    <h1>Bienvenue à <?php echo $_SESSION['login']; ?></h1>
    <ul>
        <li><a href="deconnexion.php">Déconnexion</a></li>
    </ul>
    <p>C'est la maroc qui va organiser la prochaine coupe du monde!</p>
</body>
</html>