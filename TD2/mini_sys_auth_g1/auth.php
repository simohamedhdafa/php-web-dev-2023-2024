<?php 
require_once "util.php";

//afficher_tab($_POST); 

$valide = valider(trim($_POST['login']), trim($_POST['password']), "users.csv");

if($valide){
    // créer et alimenter la session et rediriger vers le contenu protégé
    session_start();
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['time'] = date("Y-m-d H:i:s");
    //afficher_tab($_SESSION);
    header("Location: page.php");
}else{
    // rediriger l'utilisateur au formulaire de connexion
    header("Location: connexion.php");
}