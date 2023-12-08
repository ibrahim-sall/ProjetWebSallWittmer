<!DOCTYPE html>
<head>
    <title>Escape Game</title>
    <link rel="icon" type="image/png" href="images/logoF1.png">
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="crossorigin=""></script>
    <script src="https://unpkg.com/leaflet-moving-marker/dist/leaflet.moving-marker.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />

    <link rel="stylesheet" href="assets/style.css">
    <style>
        body {
            margin: 5px;
            padding: 5px;
            display: flex;
            height: 97vh;
            background-image: url('images/welcome.jpeg');
        }

        #ranking {
            flex: 1;
            background-image: url('images/rank3.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            color: white;
            margin: 5px;
            padding: 40px;
        }

        #map {
            flex: 6; /* 60% of the screen */
            background-color: #f0f0f0;
            margin: 5px;
            padding: 40px;
            height: 718px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 4px solid #333;
            border-radius: 10px;
            font-family: 'Caslon', sans-serif;
        }

        #inventory {
            flex: 1; 
            background-color: rgba(0, 0, 0, 0.45); /* Blanc avec une opacité de 0.8 */
            color: white;
            margin: 5px;
            padding: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 4px solid #333;
            border-radius: 10px;
            font-family: 'Caslon', sans-serif;
        }


        h2 {
            text-align: center;
            color: white;
        }

        #inventory-list {
            list-style: none;
            padding: 10px;
        }

        .selected {
            border: 2px solid yellow;
        }

        .red {
            color: red;
        }

    </style>
    </head>
    <body>
        <div id="ranking"></div>
        <div id="map"></div>
        <div id="inventory">
            <h2>Inventaire</h2>
            <ul id="inventory-list" class="draggable"></ul>
            <div id="inventory-image"></div>
            <div id="app">
            <div id="heureContainer">
            Temps écoulé : <span v-bind:class="{ 'red': isZeroSecond }">{{ tempsEcoule }}</span>
            </div>

            </div>
            
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
        <script src="assets/map.js"></script>
        <script src="assets/hour.js"></script>
        <script src="assets/animations.js"></script>
        
    </body>

</html>