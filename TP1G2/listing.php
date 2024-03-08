<?php 

function afficher_tab($tab){
    echo '<pre>';
    print_r($tab);
    echo '</pre>';
}

// attention potentiel erreur si fichier n existe pas
$movies = file("bd/imdb_top_1000.csv");  
// metadata : les noms de colonnes
$col_names = array_shift($movies);
// les données : les éléments sont separés par virgule
$col_names = str_getcsv($col_names);

//echo count($movies);
//echo "</br>";
/*afficher_tab($col_names);

for($i=0; $i<10; $i++){
    echo "film $i</br>";
    afficher_tab(str_getcsv($movies[$i]));
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>1000 meilleurs films depuis IMDB</title>
</head>
<body>
    <div class="container">
        <h1>Les 1000 meilleurs films</h1>
        <div class="content">
            <?php /* code boucle */ ?>
            <section>
                <div class="poster"><img src="#" alt="file not found"></div>
                <div class="carte-content">
                    <div class="movie-title"></div>
                    <div class="stars"></div>
                    <p></p> 
                    <div class="genre"></div>                   
                </div>
            </section>
            <?php /* fin boucle */ ?>
        </div>
    </div>
</body>
</html>
