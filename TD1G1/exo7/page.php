<?php 

$nom = isset($_GET['n']) && !empty($_GET['n']) ? $_GET['n'] : "nom";
$prenom = isset($_GET['p']) && !empty($_GET['p']) ? $_GET['p'] : "prenom";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>une page web</title>
</head>
<body>
    <h1>Welcome to you!</h1>
    
    <p>vous êtes M/Mme <?php echo "$nom $prenom"; ?>.</p>

</body>
</html>