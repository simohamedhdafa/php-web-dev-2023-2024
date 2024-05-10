<?php 

function afficher_tableau($tab, $nom = "", $die = false){
    echo "<div class=\"debug\">";
    if($nom!=="")
        echo "tableau ".$nom."<br>";
    echo "<pre>";
    print_r($tab);
    echo "</pre>";
    if($die) 
        die("debug ended");
    echo "</div>";
}

function validerAuthentification($cheminFichierCSV, $login, $motDePasse) {
    // Ouvrir le fichier CSV en lecture
    $fichier = fopen($cheminFichierCSV, 'r');

    // Vérifier si le fichier a été ouvert avec succès
    if ($fichier !== false) {
        // Parcourir le fichier ligne par ligne
        while (($ligne = fgetcsv($fichier)) !== false) {
            // Vérifier si le login correspond à la première colonne de la ligne
            if ($ligne[0] === $login) {
                // Vérifier si le mot de passe haché correspond au deuxième champ de la ligne
                if (password_verify($motDePasse, $ligne[1])) {
                    // Fermer le fichier
                    fclose($fichier);
                    return true; // Les identifiants sont valides
                }
            }
        }
        
        // Fermer le fichier
        fclose($fichier);
    }
    
    return false; // Les identifiants ne sont pas valides ou une erreur est survenue
}

function verifyAuthentication() {
    session_start(); // Assurez-vous que la session est démarrée

    // Vérifiez si l'utilisateur est authentifié
    if (!isset($_SESSION['login']) || $_SESSION['loggedIn'] !== true) {
        // L'utilisateur n'est pas authentifié, redirigez-le vers la page de connexion
        header("Location: connexion.php");
        exit; // Arrête l'exécution du script
    }

    // Si le code arrive ici, l'utilisateur est authentifié et peut continuer
}

function isUserLoggedIn() {
    // Assurez-vous que la session a été démarrée
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Vérifiez si l'utilisateur est authentifié
    return isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true;
}


