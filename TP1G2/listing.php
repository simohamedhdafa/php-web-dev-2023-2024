<?php 

function afficher_tab($tab){
    echo '<pre>';
    print_r($tab);
    echo '</pre>';
}

$movies = file("bd/imdb_top_1000.csv"); // attention potentiel erreur si fichier n existe pas 
$col_names = array_shift($movies);
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
            <?php foreach($movies as $movie){ $movie = str_getcsv($movie); ?>
            <section>
                <?php $image = @is_array(getimagesize($movie[0])) ? true : false; ?>
                <div class="poster"><img src="<?php echo $image ? $movie[0] : "css/image/inf_404.jpg"; ?>" ></div>
                <div class="carte-content">
                    <div class="movie-title"><?php echo $movie[1]; ?></div>
                    <div class="stars"><?php echo $movie[6]; ?></div>
                    <p>
                    <?php echo "Directed by $movie[9], played by $movie[10], $movie[11], $movie[12] and $movie[13]"; ?>
                    </p> 
                    <div class="genre"><?php echo $movie[5]; ?></div>                   
                </div>
            </section>
            <?php } ?>
        </div>
    </div>
</body>
</html>
