<<?php
// selected-driver.php

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

// Vérifier si l'ID du pilote existe dans l'URL
if (isset($_GET['id'])) {
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

        // Afficher les détails du pilote
        echo "<h2>Détails du pilote $piloteNom</h2>";
        echo "<p>ID: $piloteId</p>";
        echo "<p>Nom: $piloteNom</p>";
        echo "<img src='$pilotePhoto' alt='Photo du pilote'>";
    } else {
        // Le pilote n'a pas été trouvé
        echo "Pilote non trouvé.";
    }
} else {
    // L'ID du pilote n'est pas présent dans l'URL
    echo "ID du pilote non spécifié.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Driver</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('images/allDrivers.jpeg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
        }

        #driver-selection-container {
            text-align: center;
            background-color: #ffffff;
            padding-left: 45px;
            padding : 20px;
            width: 326px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: -130px; /* Ajouter de la marge vers le bas */
        }

        h2 {
            color: #333333;
        }

        video {
            width : 95%;
        }

        #driver-dropdown {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .back-button {
            display: inline-block;
            text-decoration: none;
            color: #333;
            border: 1px solid #333;
            padding: 10px 20px;
            border-radius: 4px;
        }

        .back-button:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
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

// Récupérer la liste des pilotes
$sql = "SELECT id, nom, photo FROM Pilote";
$resultPilotes = $conn->query($sql);

// Fermer la connexion
$conn->close();
?>

<div id="driver-selection-container">
    <h2>Choisissez un pilote</h2>
    <label for="driver-dropdown">Sélectionnez un pilote</label>
    <form action="/selected-driver" method="get">
        <select id="driver-dropdown" name="id">
            <?php
            // Supposons que vous avez une boucle pour afficher la liste des pilotes
            while ($row = $resultPilotes->fetch_assoc()) {
                $piloteId = $row['id'];
                $piloteNom = $row['nom'];
                // ... autres informations sur le pilote

                // Ajoutez une option dans le menu déroulant pour chaque pilote
                echo "<option value='$piloteId'>$piloteNom</option>";
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Voir les détails du pilote">
    </form>
    <video width="300" height=auto controls>
    <source src="images/pilots.mp4" type="video/mp4">
    Votre navigateur ne prend pas en charge la balise vidéo.
    </video>
</div>
</div>

</body>
</html>
