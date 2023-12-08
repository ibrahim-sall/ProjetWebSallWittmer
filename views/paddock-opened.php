<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paddock Ouvert</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('images/paddockF1.webp');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: flex-end; /* Alignement en bas de la page */
            justify-content: center;
            color: #ffffff; /* Couleur du texte, ajuste-la en fonction de ton image */
            font-size: 24px; /* Taille du texte, ajuste-la en fonction de tes besoins */
            position: relative; /* Ajout de position relative au corps */
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

        .bottom-image {
            position: absolute; /* Position absolue pour positionner l'image */
            bottom: 0; /* Coller l'image au bas de la page */
            left: 50%; /* Positionner l'image au centre horizontalement */
            height : 500px;
            width : auto;
            transform: translateX(-50%); /* Ajustement pour centrer horizontalement */
        }
        
        .bubble {
            position: absolute;
            bottom: 350px; /* Ajuste la distance de la bulle par rapport au bas de la page */
            left: 63%;
            transform: translateX(-50%);
            background-color: rgba(255, 255, 255, 0.9); /* Couleur de fond de la bulle */
            font-size : 20px;
            color : black;
            padding: 10px;
            border-radius: 8px;
            max-width: 280px; /* Ajuste la largeur maximale de la bulle */
            text-align: center;
        }
    </style>
</head>
<body>
    <a href="/map" class="back-button">Retour à la carte</a>
    <img src="images/toto.png" alt="Toto" class="bottom-image">
    <div class="bubble">Bienvenue dans le paddock !  Rends toi vite en conférence de presse, les journalistes attendent !</div>
</body>
</html>
