<?php 
    require_once "util.php";
    $login = null;
    $password = null;
    $error = null;
    if(isset($_POST['submit'])){
        //afficher_tab($_POST);
        // nettoyage verif/valid :
            // trim, htmlspecialchars, stripslashes
            $login = stripslashes((htmlspecialchars(trim($_POST['login']))));
            $password = stripslashes((htmlspecialchars(trim($_POST['password']))));
            // login and password are not empty 
            if(empty($login) || empty($password)){
                $error = "mot de pass ou login invalide!";
            }elseif(!strlen($login)>=2 || !ctype_alpha($login)){// |login| >= 2 and is alpha 
                $error = "mot de pass ou login invalide!";
            }elseif(!strlen($password)>=8 || !str_contains_alph_and_num($password)){// |password| > 8 and contains alpha and num
                $error = "mot de pass ou login invalide!";
            }
            
            if($error!==null){
                $_GET['error'] = $error;
            }else{
                if(valider($login, $pass)){ // don't forget the definition 
                    session_start();
                    $_SESSION['login'] = $login;
                    $_SESSION['connected'] = date("Y-m-d H:m:s");
                    header("Location: index.php");
                }
            }
            
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
</head>
<body>
    <h1>Formulaire de connexion</h1>
    <?php if(isset($_GET['error'])) echo "<span>".$_GET['error']."</span>"; ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <label>login </label><input type="text" name="login">
        <label>password </label><input type="password" name="password">
        <input type="submit" name="submit" value="Envoyer">
    </form>
</body>
</html>