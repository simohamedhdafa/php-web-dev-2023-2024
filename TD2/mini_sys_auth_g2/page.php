<?php 
    require_once "util.php";
    session_start();
    if(!isset($_SESSION['login'] ) ){
        session_destroy();
        header("Localisation: connexion.php");
    }else{
        
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
    <ul>
        <li>
            <a href="deconnexion.php">Déconnexion</a>
        </li>
    </ul>
    <h1>Bienvenue à <?php echo $_SESSION['login']; ?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam iusto voluptatibus accusantium perferendis adipisci quaerat ad sit dicta ipsam, veritatis vitae facere quidem error eum nobis! Expedita nesciunt obcaecati dolores!</p>
</body>
</html>

