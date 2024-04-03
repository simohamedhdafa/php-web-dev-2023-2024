<?php 
require_once "inc/functions.inc.php";

// movies data
$movies = file("bd/imdb_top_1000.csv"); // attention potentiel erreur si fichier n existe pas 
$col_names = array_shift($movies);
$col_names = str_getcsv($col_names);
$total_movies = count($movies);

// pagination vars
$pp = 8; // per page
$lp = ceil($total_movies/$pp); // last page

// current page : numeric comprised between 1 and $lp
if(isset($_GET['cp']) and !empty($_GET['cp']))
    if(is_numeric($_GET['cp']) and (1<=$_GET['cp'] and $_GET['cp']<=$lp))
        $cp = $_GET['cp'];
    else 
        $cp = 1;
else
    $cp = 1;

// vars 
$stylesheet = "css/gptCss.css";
$page_title = "Meilleurs films page $cp";
// entete html 
require_once "inc/head.inc.php";
?>
<div class="menu">menu</div>
    <div class="container">
    <div class="bg">Bloc gauche</div>
        
        <div class="content">
        <!--<h1>Les 1000 meilleurs films</h1>-->
            <?php //die("ici = $cp"); ?>
            <?php for($i=($cp-1)*$pp+1; $i<($cp-1)*$pp+$pp+1 and $i<$total_movies; $i++){ $movies[$i] = str_getcsv($movies[$i]); ?>
            <section>
                <?php $image = @is_array(getimagesize($movies[$i][0])) ? true : false; ?>
                <div class="poster"><img src="<?php echo $image ? $movies[$i][0] : "css/image/inf_404.png"; ?>" ></div>
                <div class="carte-content">
                    <div class="movie-title"><?php echo $movies[$i][1]; ?></div>
                    <div class="stars"><?php echo $movies[$i][6]; ?></div>
                    <p>
                    <?php echo "Directed by ".$movies[$i][9].", played by ".$movies[$i][10].", ".$movies[$i][11].", ".$movies[$i][12]." and ".$movies[$i][13]; ?>
                    </p> 
                    <div class="genre"><?php echo $movies[$i][5]; ?></div>                   
                </div>
            </section>
            <?php } ?>
        </div>

        <div class="center">
            <div class="pagination">
                <a href="<?php $k= $cp-1>=1 ? $cp-1 : $cp; echo $_SERVER['PHP_SELF']."?cp=$k"; ?>">&laquo;</a>
                <?php if($cp-2>=1){ ?>
                    <a href="<?php $k=$cp-2; echo $_SERVER['PHP_SELF']."?cp=$k"; ?>"><?php echo $k; ?></a>
                <?php } ?>
                <?php if($cp-1>=1){ ?>
                    <a href="<?php $k=$cp-1; echo $_SERVER['PHP_SELF']."?cp=$k"; ?>"><?php echo $k; ?></a>
                <?php } ?>
                <a href="#" class="active"><?php echo $cp; ?></a>
                <?php if($cp+1<=$lp){ ?>
                    <a href="<?php $k=$cp+1; echo $_SERVER['PHP_SELF']."?cp=$k"; ?>"><?php echo $k; ?></a>
                <?php } ?>
                <?php if($cp+2<=$lp){ ?>
                    <a href="<?php $k=$cp+2; echo $_SERVER['PHP_SELF']."?cp=$k"; ?>"><?php echo $k; ?></a>
                <?php } ?>
                <a href="<?php $k= $cp+1<=$lp ? $cp+1 : $cp; echo $_SERVER['PHP_SELF']."?cp=$k"; ?>">&raquo;</a>
            </div>
        </div>
        <div class="bd">bloc droit</div>
    </div>

<?php 
require_once "inc/pied.inc.php";
?>

