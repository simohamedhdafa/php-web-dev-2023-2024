<?php 
    if(isset($_GET['nom']) && isset($_GET['prenom'])){
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
    }else{
        $nom = "JUNIA";
        $prenom = "Maroc";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 2</title>
</head>
<body>
    <h1>Deuxième page</h1>
    <a href="page1.php">page 1</a>
    <p><?php echo "Hello $nom $prenom!"; ?></p>
</body>
</html>