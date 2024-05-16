<?php 
    require_once "util.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Date envoyée</h1>
    <p>
        <?php 
            $d = str_pad((string)$_GET['day'],2,"0",STR_PAD_LEFT);
            $m = str_pad((string)$_GET['month'],2,"0",STR_PAD_LEFT);
            $a = (string) $_GET['year'];
            echo $d."/".$m."/".$a;
        ?>
    </p>
    <p>
        <?php 
            if(estValide($d, $m, $a)){
                echo "Cette date est valide!";
            }else{
                echo "Cette date n'est pas valide!";
            }
        ?>
    </p>
</body>
</html>