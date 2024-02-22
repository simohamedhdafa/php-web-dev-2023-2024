<!DOCTYPE html>
<html lang="en">
<head>
    <title > <?php echo "Premiers pas en PHP"; ?> </title>
    <meta charset=UTF-8" />
</head>
<body>
    <h1> Mes premiers pas en PHP </h1>
    <?php $temps=2; echo "<p> Je débute depuis " ; echo $temps; echo " heures... </p>"; ?>
    <p> Mais cela a l’air intéressant <?php echo '!' ?> </p>
    <?php echo <<<JUNIA
    <h2> Vive le PHP </h2>
    <p> Les pages vont pouvoir être dynamiques! </p>
    JUNIA; ?>
    <p> Encore quelques paragraphes </p>
    <?php echo "<p> Avant dernier paragraphe </p>"; ?>
    <p> Voilà, c’est terminé! </p>
</body>
</html>

<!--
rep quest 2 
URL : www.exemple.org/PremierTP/exo1.php
URL localhost : localhost/PremierTP/exo1.php
notre cas : localhost/td-1-groupe-2/exo1.php
-->