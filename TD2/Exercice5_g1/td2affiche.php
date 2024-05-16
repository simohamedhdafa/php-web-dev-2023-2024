<?php 
    require_once "util.php";
    extract(array('j'=> $_GET['day'],
        'm'=> $_GET['month'],
        'a'=> $_GET['year']
    )); // $j $m $a
    $j = str_pad((string) $j, 2, "0", STR_PAD_LEFT);
    $m = str_pad((string) $m, 2, "0", STR_PAD_LEFT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Date:</h1>
    <p><?php echo $j."/".$m."/".$a; ?></p>
    <?php if(estValide($j, $m, $a)){ ?>
        <p>Cette date est valide.</p>
    <?php }else{ ?>
        <p>Cette date n'est pas valide!</p>
    <?php } ?>   
</body>
</html>