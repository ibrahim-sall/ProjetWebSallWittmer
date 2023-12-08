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

// Récupérer l'ID du pilote à partir de l'URL
$piloteId = $_GET['id'];

// Requête pour obtenir les détails du pilote
$sql = "SELECT id, nom, photo FROM Pilote WHERE id = $piloteId";
$result = $conn->query($sql);

// Fermer la connexion
$conn->close();

// Vérifier si le pilote a été trouvé
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $piloteNom = $row['nom'];
    $pilotePhoto = $row['photo'];
    // ... autres informations sur le pilote

   
} else {
    // Le pilote n'a pas été trouvé
    echo "Pilote non trouvé.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilote</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: space-around;
            background-color: #282c35;
            color: white;
            margin: 0;
        }

        #driver-info-container, #video-container {
            display: flex;
            flex-direction: column;
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            width: 30%;
            height: 80vh;
            border-radius: 8px;

            margin-bottom: 20px;
        }

        h2 {
            color: #3498db;
            margin-bottom: 10px;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
            border-radius: 8px;
        }

        video {
            width: 100%;
            height: auto;
            margin-top: 20px;
            border-radius: 8px;
        }

        .back-button, .next-button {
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: bold;
            margin-top: 20px;
            cursor: pointer;
            color: white;
            width: 150px;
        }

        .back-button {
            background-color: #e74c3c;
            border: 2px solid #c0392b;
            margin-right: 10px;
        }

        .next-button {
            background-color: #2ecc71;
            border: 2px solid #27ae60;
        }

        .back-button:hover, .next-button:hover {
            opacity: 0.8;
        }

        #driver-info-container {
            background-color: #ecf0f1; /* Couleur de fond pour les informations du pilote */
            color: #333333; /* Couleur du texte pour les informations du pilote */
        }

        #video-container {
            background-color: #282c35; /* Couleur de fond pour la vidéo */
            color: white; /* Couleur du texte pour la vidéo */
        }

        #infos, #boutons {
            margin-bottom: 20px;
        }

        #boutons {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
    </style>
</head>
<body>

<div id="driver-info-container">
    <div id="infos">
        <?php
        if (isset($piloteNom) && isset($pilotePhoto)) {
            // Afficher le nom du pilote
            echo "<h2>$piloteNom</h2>";
            // Afficher la photo en petite
            echo "<img src='$pilotePhoto' alt='Photo du pilote'>";
        } else {
            // Le pilote n'a pas été trouvé.
            echo "Pilote non trouvé.";
        }
        ?>
    </div>
    <div id='boutons'>
        <a href="/driver" class="back-button">Retour</a>
        <a href="/map" class="next-button">Confirmer</a>
    </div>
</div>

<div id="video-container">
    <video controls>
        <source src="images/leclercHighlights.mp4" type="video/mp4">
        Votre navigateur ne prend pas en charge la balise vidéo.
    </video>
    <br>
</div>

</body>
</html>
