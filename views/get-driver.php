<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Objet";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Récupérer le chemin de l'image du pilote en fonction de l'ID
if (isset($_GET['id'])) {
    $driverId = $_GET['id'];

    // Utilisez une requête SQL pour récupérer le chemin de l'image du pilote
    $sql = "SELECT image FROM Pilote WHERE id = $driverId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $driverImagePath = $row['image'];
        echo $driverImagePath;
    } else {
        // Si l'ID du pilote n'est pas trouvé, retournez un chemin d'image par défaut ou un chemin spécifique
        echo "images/default_image.jpg";
    }
} else {
    // Si l'ID n'est pas spécifié, retournez un chemin d'image par défaut ou un chemin spécifique
    echo "images/default_image.jpg";
}

// Fermer la connexion
$conn->close();
?>
