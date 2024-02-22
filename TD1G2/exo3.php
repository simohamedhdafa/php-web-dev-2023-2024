<?php 
    function carre($i){
        $j = $i ** 2;
        return "$i ² = $j";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corr exo 3</title>
</head>
<body>
    <ul>
    <?php 
        for($i=1; $i<=30; $i++){
            $a = carre($i);
            echo "<li>$a</li>";
        }
    ?>
    </ul>
</body>
</html>