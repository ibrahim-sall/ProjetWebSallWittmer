<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paddock</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('images/paddockF1.webp');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff; /* Couleur du texte, ajuste-la en fonction de ton image */
            font-size: 24px; /* Taille du texte, ajuste-la en fonction de tes besoins */
        }
        .container {
            max-width: 700px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 90%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
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
            display: inline-block;
            margin-top: 20px;
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
    <div class="container">
        <h1>Code d'accès au paddock</h1>
        <form method="post">
            <label for="code">Code (4 chiffres) :</label>
            <input type="text" id="code" name="code" pattern="\d{4}" title="Entrez un code à 4 chiffres" required>
            <button type="submit">Valider</button>
        </form>
        <a href="/map" class="back-button">Retour à la carte</a>
    </div>
</body>
</html>
