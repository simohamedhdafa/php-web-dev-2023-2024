<!DOCTYPE html>
<html>
    <head>
        <title > <?php echo "Premiers pas en PHP avec JUNIA"; ?> </title>
        <meta content="charset=UTF-8" />
    </head>
    <body>
        <h1> Mes premiers pas en PHP </h1>
        <?php $temps=2; echo "<p> Je débute depuis $temps heures... </p>"; ?>
        <p> Mais cela a l’air intéressant <?php echo '!' ?> </p>
        <?php echo <<<LION
        <h2> Vive le PHP </h2>
        <p> Les pages vont pouvoir être dynamiques! </p>
        LION; ?>
        <p> Encore quelques paragraphes </p>
        <?php echo "<p> Avant dernier paragraphe </p>"; ?>
        <p> Voilà, c’est terminé! </p>
    </body>
</html>

<!-- 
question 2:
URL: localhost/PremierTP/www.exemple.org/exo1.php
localhost:
localhost/td1/td1.php
-->