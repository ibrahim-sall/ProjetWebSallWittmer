<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            background-image: url('images/welcome.jpeg');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        #login-container {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: -150px; /* Ajustement pour centrer le formulaire */
        }

        h2 {
            color: #333333;
        }

        #nickname-input {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #login-button {
            padding: 12px;
            cursor: pointer;
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        #login-button:hover {
            background-color: #45a049;
        }

        #welcome-message {
            margin-top: 20px;
            color: #45a049;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #333;
            border: 1px solid #333;
            padding: 10px 20px;
            border-radius: 4px;
            bottom : 10px;
            left : 90%;
        }

        .back-button:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

<div id="login-container">
    <h2>Escape Game Formule 1</h2>
    <label for="nickname-input">Entrez un pseudo :</label>
    <input type="text" id="nickname-input" placeholder="Your nickname">
    <br>
    <p id="welcome-message"></p>
    <button id="login-button">Valider</button>
    <a href="/driver" class="back-button">Suite</a>
</div>

<script>
    document.getElementById('login-button').addEventListener('click', function() {
        const nickname = document.getElementById('nickname-input').value;
        const welcomeMessage = document.getElementById('welcome-message');

        if (nickname.trim() !== '') {
            // Mettre à jour le message de bienvenue
            welcomeMessage.textContent = 'Bienvenue ' + nickname + ' !';
        } else {
            alert('Veuillez entrer un pseudo valide');
        }
    });
</script>

</body>
</html>
