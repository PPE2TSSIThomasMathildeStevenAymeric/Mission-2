<?php
// Déclaration des différentes variables utiles à la connexion
$serveur = "localhost";
$base = 'ffbsq';
$utilisateur = 'root';
$motDePasse = '';
// création d'une connexion
try {
    $dns = "mysql:host=$serveur;dbname=$base";
    $conn = new PDO( $dns, $utilisateur, $motDePasse );
} catch ( Exception $e ) {
    echo "Connexion MySQL impossible : ", $e->getMessage();
    die();
}
?>