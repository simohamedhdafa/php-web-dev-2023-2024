<?php 
    session_start();
    require_once "util.php";
    // nettoyage/verification/validation
    $login = "";
    $password = "";
    // Vérifier si la requête est envoyée via un formulaire
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        // Récupération de l'adresse IP de l'utilisateur
        $user_ip = $_SERVER['REMOTE_ADDR'];

        // Récupération du timestamp
        $access_time = date('Y-m-d H:i:s');

        // Récupération de l'URL demandée
        $requested_url = $_SERVER['REQUEST_URI'];

        // Récupération de l'identifiant de session
        $session_id = session_id();

        // Récupération des paramètres de requête
        $query_params = $_SERVER['QUERY_STRING'];

        // Récupération du référant
        $referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'none';

        // Format du message à enregistrer
        $log_message = "Access denied: [$access_time] - IP: $user_ip, Session: $session_id, URL: $requested_url, Params: $query_params, Referrer: $referrer\n";

        // Chemin du fichier log
        $log_file = 'access_log.txt';

        // Écriture dans le fichier log
        file_put_contents($log_file, $log_message, FILE_APPEND);

        // Redirection vers la page du formulaire
        header("Location: connexion.php?Alerte=Access denied");
        exit;
    }else{
        $login = htmlspecialchars(stripslashes(trim($_POST['login'] ?? '')));
        $password = htmlspecialchars(stripslashes(trim($_POST['password'] ?? '')));
        if(
            empty($login) || empty($password) ||
            !ctype_alnum($login) || strlen($login)<5 || strlen($password)<8 || 
            !validerAuthentification("users.csv", $login, $password)
        ){
            // Chemin du fichier log
            $log_file = 'access_log.txt';
            // Récupération de l'adresse IP de l'utilisateur
            $user_ip = $_SERVER['REMOTE_ADDR'];
            // Récupération de l'identifiant de session
            $session_id = session_id();
            // Récupération du timestamp
            $access_time = date('Y-m-d H:i:s');
            // Format du message à enregistrer
            $log_message = "Identifiants invalides: [$access_time] - IP: $user_ip, Session: $session_id, URL: $requested_url, Params: $query_params, Referrer: $referrer\n";
            // Écriture dans le fichier log
            file_put_contents($log_file, $log_message, FILE_APPEND);
            header("Location: connexion.php?error=Les identifiants ne sont pas valides ou une erreur est survenue");
        }else{
            session_regenerate_id(true);  // Pass true to delete the old session
            $_SESSION['login'] = $login;
            $_SESSION['loggedIn'] = true;
            $_SESSION['login_time'] = date('Y-m-d H:i:s');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Accueil</title>
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="page1.php">Page 1</a></li>
            <li><a href="page2.php">Page 2</a></li>
            <li><a href="deconnexion.php" class="logout-btn">Déconnexion</a></li>
        </ul>
    </div>
    <h1>Bienvenu <?php echo $_SESSION['login']; ?></h1>
    
</body>
</html>