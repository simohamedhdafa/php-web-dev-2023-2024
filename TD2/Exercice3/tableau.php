<?php 
    require_once "util.php";
    //afficher_tab($_GET);
    $nbrligne = 0;
    if(isset($_GET['submit']) && $_GET['submit']===trim("Generer")){
        if(!isset($_GET['nbrligne']) || !ctype_digit(htmlentities(stripslashes(trim($_GET['nbrligne']))))){
            header("Location: index.php?g=2");
        }else{
            $nbrligne = trim($_GET['nbrligne']);
        }
    }else{
        header("Location: index.php?g=1");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Tableau</h1>
        <table>
            <?php for($i=0; $i<$nbrligne; $i++){ ?>
                <tr>
                    <td><?php //echo "une phrase!"; ?></td>
                </tr>
            <?php } ?>
        </table>
        <p>Cliquer <a href="index.php">ici</a> pour retourner au formulaire.</p>
    </div>
</body>
</html>