<?php 
    session_start();
    if(empty($_SESSION['login'])){
        session_destroy();
        header("Location: connect.php");
    }   
    $login = $_SESSION['login']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page protégée</title>
</head>
<body>
    <h1><?php echo "welcome to ".$login; ?></h1>
    <p>Ce contenu est protégée par authentification.</p>
    <p>cliquez <a href="deconnect.php">ici</a> pour vous déconnecter</p>
</body>
</html>