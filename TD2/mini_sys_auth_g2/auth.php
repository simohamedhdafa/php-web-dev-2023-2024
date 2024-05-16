<?php 

require_once "util.php";

$valide = valider(trim($_POST['login']), trim($_POST['password']), "users.csv");

if($valide){
    // creéation et alimentation de la session, et redirection vers l'espace protégé
    session_start();
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['time'] = date("Y-m-d H:i:s");
    header("Location: page.php");
}else{
    // le rediriger vers le formulaire de connexion 
    header("Location: connexion.php");
}