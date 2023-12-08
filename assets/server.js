const express = require('express');
const bodyParser = require('body-parser');

const app = express();
const port = 3000;

// Middleware pour parser le JSON
app.use(bodyParser.json());

// Simulation de données en mémoire
const objetsData = [
  { id: 1, nom: "Billet d'Avion", image: 'images/billetAvion.png', latitude: 49.014699990219334, longitude: 2.541236851931143 },
  // Ajoute d'autres objets ici
];

// Endpoint pour obtenir tous les objets
app.get('/api/objets', (req, res) => {
  res.json(objetsData);
});

// Endpoint pour obtenir un objet par son ID
app.get('/api/objets/:id', (req, res) => {
  const objet = objetsData.find(obj => obj.id === parseInt(req.params.id));
  if (!objet) return res.status(404).send('Objet non trouvé');
  res.json(objet);
});

app.listen(port, () => {
  console.log(`Serveur écoutant sur le port ${port}`);
});
