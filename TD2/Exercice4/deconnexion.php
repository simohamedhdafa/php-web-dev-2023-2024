<?php 
    session_start(); // Démarre ou reprend une session

    // Détruit toutes les données de session
    session_destroy();
    
    // Redirige vers la page de connexion ou une autre page appropriée
    header("Location: connexion.php");
    exit;