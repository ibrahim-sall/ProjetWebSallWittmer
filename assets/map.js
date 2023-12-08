var map = L.map('map').setView([49.007643, 2.549616], 13);

var tileLayer1 = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
    attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
}).addTo(map);

var tileLayer2 = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 28,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});

map.whenReady(function () {
    map.on('zoomend', function () {
        if (map.getZoom() >= 18) {
            map.removeLayer(tileLayer1);
            map.addLayer(tileLayer2);
        } else {
            map.removeLayer(tileLayer2);
            map.addLayer(tileLayer1);
        }
    });
});


var featureG = L.featureGroup();
featureG.addTo(map);

// Icons
var Icon = L.Icon.extend({
    options: {
        iconSize: [135, 70]
    }
});

//Création des Icônes
var billetAvionIcon = new Icon({ iconUrl: 'images/billetAvion.png' });
var privateJetIcon = new Icon({ iconUrl: 'images/privateJet.png' });
var carVipIcon = new Icon({ iconUrl: 'images/carVip.png',iconSize: [80, 43] });
var keyHotelIcon = new Icon({ iconUrl: 'images/keyHotel.png',iconSize: [50, 20] });
var hotelIcon = new Icon({ iconUrl: 'images/hotel.png', iconSize: [80, 80] });
var paddockIcon = new Icon({ iconUrl: 'images/paddock.png', iconSize: [80, 80] });
var passwordIcon = new Icon({ iconUrl: 'images/password.png', iconSize: [90, 90] });
var pressIcon = new Icon({ iconUrl: 'images/press.png', iconSize: [80, 80] });
var f1Icon = new Icon({ iconUrl: 'images/f1.png', iconSize: [100, 52] });
var hardTyreIcon = new Icon({ iconUrl: 'images/hardTyre.png', iconSize: [40, 40] });
var mediumTyreIcon = new Icon({ iconUrl: 'images/mediumTyre.png', iconSize: [40, 40] });
var softTyreIcon = new Icon({ iconUrl: 'images/softTyre.png', iconSize: [40, 40] });
var trophyIcon = new Icon({ iconUrl: 'images/trophy.png', iconSize: [50, 65] });
var logoF1Icon = new Icon({ iconUrl: 'images/logoF1.png' });


//Appel des Images
var billetAvionImg = '<img src="images/billetAvion.png" width="300px" height="auto"/>';
var privateJetImg = '<img src="images/privateJet.png" width="300px" height="auto"/>';
var carVipImg = '<img src="images/carVip.png" width="300px" height="auto"/>';
var keyHotelImg = '<img src="images/keyHotel.png" width="300px" height="auto"/>';
var hotelImg = '<img src="images/hotel.png" width="300px" height="auto"/>';
var paddockImg = '<img src="images/paddock.png" width="300px" height="auto"/>';
var passwordImg = '<img src="images/password.png" width="300px" height="auto"/>';
var pressImg = '<img src="images/press.png" width="300px" height="auto"/>';
var pressConfImg = '<img src="images/pressConf.jpeg" width="300px" height="auto"/>';
var f1Img = '<img src="images/f1.png" width="300px" height="auto"/>';
var pneusImg = '<img src="images/pneus.jpeg" width="300px" height="auto"/>';
var hardTyreImg = '<img src="images/hardTyre.png" width="300px" height="auto"/>';
var mediumTyreImg = '<img src="images/mediumTyre.png" width="300px" height="auto"/>';
var softTyreImg = '<img src="images/softTyre.png" width="300px" height="auto"/>';
var trophyImg = '<img src="images/trophy.png" width="300px" height="auto"/>';
var paddockF1Img = '<img src="images/paddockF1.webp" width="300px" height="auto"/>';
var stanstedImg = '<img src="images/stansted.jpeg" width="300px" height="auto"/>';
var silverstoneImg = '<img src="images/silverstone.jpeg" width="300px" height="auto"/>';

//Création des Marqueurs
var billetAvionMarker = L.marker([49.014699990219334, 2.541236851931143], { icon: billetAvionIcon }).addTo(featureG)
    .bindPopup("<center>" + "Vous avez récupéré votre billet ! Foncez au terminal 2E, porte M28." + billetAvionImg + "</center>");
var privateJetMarker = L.marker([49.007554879599994, 2.590979125572063], { icon: privateJetIcon }).addTo(featureG)

var carVipMarker = L.marker([51.8782004249389, 0.2527186065437026], { icon: carVipIcon }).addTo(featureG)
    .bindPopup("<center>" + carVipImg + "</center>");
var carVipMarker2 = L.marker([52.07346476667505, -1.0245623150800515], { icon: carVipIcon }).addTo(featureG)
    .bindPopup("<center>" + carVipImg + "</center>");
var keyHotelMarker = L.marker([52.07350358410226, -1.02435389214304841], { icon: keyHotelIcon }).addTo(featureG)
    .bindPopup("<center>" + keyHotelImg + "</center>");
var hotelMarker = L.marker([52.063393140094846, -1.0327689686448585], { icon: hotelIcon}).addTo(featureG)
    .bindPopup("<center>" + hotelImg + "</center>");
var paddockMarker = L.marker([52.06956302204611, -1.0203603050551664], { icon: paddockIcon}).addTo(featureG)
    .bindPopup("<center>" + paddockF1Img + "</center>");
var passwordMarker = L.marker([52.063393140094846, -1.0327689686448585], { icon: passwordIcon}).addTo(featureG)
    .bindPopup("<center>" + "Le code d'accès au paddock est : 0648" + "</center>");

var pressMarker = L.marker([52.06900684302642, -1.020452674083726], { icon: pressIcon}).addTo(featureG);

var f1Marker = L.marker([52.06918549376348, -1.022326870575259], { icon: f1Icon}).addTo(featureG)
    .bindPopup("<center>" + "Votre voiture est quasiment finalisée. Il ne reste plus qu’à chausser un train de pneus de la spécification recommandée par le constructeur. Ils se trouvent au QG d'Aston Martin, au Nord-Ouest du circuit." + pneusImg + "</center>");
var hardTyreMarker = L.marker([52.07612346684084, -1.0298890854270637], { icon: hardTyreIcon}).addTo(featureG)
    .bindPopup("<center>" + hardTyreImg + "</center>");
var mediumTyreMarker = L.marker([52.07591599085813, -1.0293738805936925], { icon: mediumTyreIcon}).addTo(featureG)
    .bindPopup("<center>" + mediumTyreImg + "</center>");
var softTyreMarker = L.marker([52.07572057176426, -1.0295916880269793], { icon: softTyreIcon}).addTo(featureG)
    .bindPopup("<center>" + softTyreImg + "</center>");
var trophyMarker = L.marker([52.06801873599439, -1.023027063948758], { icon: trophyIcon}).addTo(featureG)
    .bindPopup("<center>" + trophyImg + "</center>");
//var stanstedMarker = L.marker([51.88494720568278, 0.23974229263444533], { icon: privateJetIcon}).addTo(featureG)
    //.bindPopup("<center>" + "Vous venez d'atterir à l'aéroport de Londres Stansted où vous attend un véhicule VIP. Il attend sur le parking." + stanstedImg + "</center>");
var silverstoneMarker = L.marker([52.0716145149471, -1.013988566118743], { icon: logoF1Icon}).addTo(featureG)
    .bindPopup("<center>" + "Bienvenue à Silverstone, circuit mythique et iconique du Royaume-Uni. Votre chauffeur vous a déposé à l'entrée du circuit et vous devez récupérer la clef de votre chambre d'hôtel." +silverstoneImg + "</center>");


map.on('zoomend', function () {
    var currentZoom = map.getZoom();
    featureG.clearLayers(); // Supprimer tous les marqueurs de la featureGroup


    if (currentZoom >= 20) {
        // Ajouter les marqueurs pour le niveau de zoom 20
        featureG.addLayer(billetAvionMarker);
        if (hasBilletAvion) {
            // Afficher l'objet "billet d'avion" uniquement à partir du niveau de zoom 20
            
            if (!map.hasLayer(privateJetMarker)) {
                featureG.addLayer(privateJetMarker);
            }
        }
    }


    if (currentZoom >= 8) {
        // Ajouter les marqueurs pour le niveau de zoom 8
        // featureG.addLayer(stanstedMarker);
        featureG.addLayer(silverstoneMarker);
        if (hasKey) {
            featureG.removeLayer(silverstoneMarker);
        }
    }
    if (currentZoom >= 16) {
        // Ajouter les marqueurs pour le niveau de zoom 16
        featureG.addLayer(paddockMarker);
        featureG.addLayer(pressMarker);
        // featureG.addLayer(carVipMarker);
        featureG.addLayer(f1Marker);
        featureG.addLayer(trophyMarker);
        if (hasTrophy) {
            featureG.removeLayer(trophyMarker);
        }
    }
    if (currentZoom >= 13) {
        // Ajouter les marqueurs pour le niveau de zoom 13
        featureG.addLayer(carVipMarker2);
    }
    
    if (currentZoom >= 21) {
        // Ajouter les marqueurs pour le niveau de zoom 21
        featureG.addLayer(keyHotelMarker);
        if (hasKey) {
            featureG.removeLayer(keyHotelMarker);
        }
        featureG.addLayer(hotelMarker);
        if (isClickedHotel) {
            featureG.removeLayer(hotelMarker);
            featureG.addLayer(passwordMarker);
        }
        featureG.addLayer(hardTyreMarker);
        featureG.addLayer(mediumTyreMarker);
        featureG.addLayer(softTyreMarker);
        if (hasSoft) {
            featureG.removeLayer(softTyreMarker);
        }
        if (hasMedium) {
            featureG.removeLayer(mediumTyreMarker);
        }
        if (hasHard) {
            featureG.removeLayer(hardTyreMarker);
        }
    }
});




var inventoryList = document.getElementById('inventory-list');
function addToInventory(objectName, objectImg) {
    var listItem = document.createElement('li');
    listItem.innerHTML = '<strong>' + objectName + '</strong><br>' + objectImg;
    inventoryList.appendChild(listItem);
}


// Fonction générique pour ajouter un objet à l'inventaire
function addObjectToInventory(objectName, objectImg) {
    addToInventory(objectName, objectImg);
}

var hasBilletAvion = false; 
billetAvionMarker.on('click', function (e) {
    var objectName = "Billet d'Avion";
    var objectImg = '<img src="images/billetAvion.png" width="50px" height="auto" />';
    addObjectToInventory(objectName, objectImg);
    featureG.removeLayer(billetAvionMarker);
    hasBilletAvion = true;
});
var hasKey = false; 
keyHotelMarker.on('click', function (e) {
    var objectName = "Clef de la chambre";
    var objectImg = '<img src="images/keyHotel.png" width="50px" height="auto" />';
    addObjectToInventory(objectName, objectImg);
    featureG.removeLayer(keyHotelMarker);
    hasKey = true;
});
var hasHard = false; 
hardTyreMarker.on('click', function (e) {
    var objectName = "Train de pneus Hard";
    var objectImg = '<img src="images/hardTyre.png" width="50px" height="auto" />';
    addObjectToInventory(objectName, objectImg);
    featureG.removeLayer(hardTyreMarker);
    hasHard = true;
});
var hasMedium = false; 
mediumTyreMarker.on('click', function (e) {
    var objectName = "Train de pneus Medium";
    var objectImg = '<img src="images/mediumTyre.png" width="50px" height="auto" />';
    addObjectToInventory(objectName, objectImg);
    featureG.removeLayer(mediumTyreMarker);
    hasMedium = true;
});
var hasSoft = false; 
softTyreMarker.on('click', function (e) {
    var objectName = "Train de pneus Soft";
    var objectImg = '<img src="images/softTyre.png" width="50px" height="auto" />';
    addObjectToInventory(objectName, objectImg);
    featureG.removeLayer(softTyreMarker);
    hasSoft = true;
});
var hasTrophy = false; 
trophyMarker.on('click', function (e) {
    var objectName = "Trophée";
    var objectImg = '<img src="images/trophy.png" width="50px" height="auto" />';
    addObjectToInventory(objectName, objectImg);
    featureG.removeLayer(trophyMarker);
    hasTrophy = true;
});

var isClickedCarVip2 = false; 
carVipMarker2.on('click', function (e) {
    isClickedCarVip2 = true;
});

var isClickedHotel = false; 
hotelMarker.on('click', function (e) {
    isClickedHotel = true;
});

//Redirections
/*
privateJetMarker.on('click', function (e) {
    var centerCoordinates = [51.88341279546903, 0.2527398636636726];
    map.setView(centerCoordinates, 15);
});


carVipMarker.on('click', function (e) {
    var centerCoordinates = [52.0716145149471, -1.013988566118743];
    map.setView(centerCoordinates, 15);
});
*/

inventoryList.addEventListener('click', function (event) {
    if (event.target.tagName === 'IMG') {
        event.target.classList.toggle('selected');
    }
});






paddockMarker.on('click', function (e) {
    // Redirige vers la nouvelle page PHP avec une image en arrière-plan
    window.location.href = 'paddock';
});

pressMarker.on('click', function (e) {
    // Redirige vers la nouvelle page PHP avec une image en arrière-plan
    window.location.href = 'press';
});