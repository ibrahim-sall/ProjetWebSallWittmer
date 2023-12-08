<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presse</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('images/pressConf.jpeg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff; /* Couleur du texte, ajuste-la en fonction de ton image */
            font-size: 24px; /* Taille du texte, ajuste-la en fonction de tes besoins */
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .back-button {
            text-decoration: none;
            color: #fff;
            background-color: #333;
            padding: 10px 20px;
            border-radius: 4px;
            margin-bottom: 20px; /* Espacement du bas */
            position: absolute; /* Ajout de position absolue */
            bottom: 10px; /* Espacement du bas */
            right: 10px; /* Espacement de la droite */
        }

        .back-button:hover {
            background-color: #555;
        }

        .bubble {
            position: absolute;
            bottom: 400px; /* Ajuste la distance de la bulle par rapport au bas de la page */
            left: 63%;
            transform: translateX(-50%);
            background-color: rgba(255, 255, 255, 0.9); /* Couleur de fond de la bulle */
            font-size : 20px;
            color : black;
            padding: 10px;
            border-radius: 8px;
            max-width: 230px; /* Ajuste la largeur maximale de la bulle */
            text-align: center;
        }
    </style>
</head>
<body>
    <a href="/map" class="back-button">Retour à la carte</a>
    <div class="bubble">D'après nos calculs, les pneus Medium (jaunes) seront les plus efficaces pour ce Grand-Prix.</div>
</body>
</html>
