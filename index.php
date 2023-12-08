<?php

session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer le code entré dans le formulaire
    $enteredCode = $_POST['code'];

    // Vérifier si le code est correct
    if ($enteredCode === '0000') {
        // Mettre à jour la session pour indiquer que le paddock a été ouvert
        $_SESSION['paddockOpened'] = true;
        header('Location: paddock-opened'); // Rediriger vers la page du paddock ouvert (ajout de .php ici)
        exit();
    } else {
        // Le code est incorrect, tu peux ajouter ici des messages d'erreur, etc.
        echo 'Code incorrect. Veuillez réessayer.';
    }
}


require 'flight/Flight.php';

$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "root";
$baseDeDonnees = "Objet";

// Connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion à la base de données : " . $connexion->connect_error);
}

// Récupérer les objets depuis la table
//$resultat = $connexion->query("SELECT * FROM Objet");
$resultatPilotes = $connexion->query("SELECT * FROM Pilote");

// Fermer la connexion
$connexion->close();

Flight::route('/', function(){
    Flight::render('first');
});

Flight::route('/welcome', function(){
    Flight::render('welcome');
});

Flight::route('/rules', function(){
    Flight::render('rules');
});

Flight::route('/driver', function(){
    Flight::render('driver');
});

Flight::route('/selected-driver', function(){
    Flight::render('selected-driver'); 
});

Flight::route('/map', function(){
    Flight::render('map');
});

Flight::route('/paddock', function(){
    Flight::render('paddock'); 
});

Flight::route('/paddock-opened', function(){
    Flight::render('paddock-opened'); 
});

Flight::route('/press', function(){
    Flight::render('press'); 
});


Flight::start();
?>