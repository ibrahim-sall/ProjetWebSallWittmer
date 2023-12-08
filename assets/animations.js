var isClickedCarVip = false;
var carVipMarker;

privateJetMarker.on('click', function (e) {
    var centerCoordinates1 = [49.007643, 2.549616];
    map.setView(centerCoordinates1, 13);

    var planeIcon = new L.Icon({
        iconUrl: 'images/privateJet.png',
        iconSize: [92, 51]
    });

    var planeMarker = L.marker([48.995934417764644, 2.556754512248214], { icon: planeIcon }).addTo(map);
    var planeMarker2 = L.marker([51.878243831927364, 0.22446811073705714], { icon: planeIcon }).addTo(map).bindPopup("<center>" + "Vous venez d'atterir à l'aéroport de Londres Stansted où vous attend un véhicule VIP. Il attend sur le parking." + stanstedImg + "</center>");

    var planePath = [
        [48.995934417764644, 2.556754512248214],
        [48.998233354591406, 2.5998151977371853]
    ];
    var planePath2 = [
        [51.878243831927364, 0.22446811073705714],
        [51.893350413816414, 0.2472677973644732]
    ];

    function movePlane(marker, path, totalTime) {
        return new Promise(resolve => {
            let startTime = null;

            function animate(timestamp) {
                if (!startTime) startTime = timestamp;
                const elapsedTime = timestamp - startTime;
                const progress = Math.min(elapsedTime / totalTime, 1);

                const currentPointIndex = Math.floor(progress * (path.length - 1));
                const nextPointIndex = Math.min(currentPointIndex + 1, path.length - 1);

                const lat = path[currentPointIndex][0] + (path[nextPointIndex][0] - path[currentPointIndex][0]) * progress;
                const lng = path[currentPointIndex][1] + (path[nextPointIndex][1] - path[currentPointIndex][1]) * progress;

                marker.setLatLng([lat, lng]);

                if (progress < 1) {
                    requestAnimationFrame(animate);
                } else {
                    resolve();
                }
            }

            requestAnimationFrame(animate);
        });
    }

    movePlane(planeMarker, planePath, 5000)
        .then(() => {
            var centerCoordinates2 = [51.88341279546903, 0.2527398636636726];
            map.setView(centerCoordinates2, 14);
            return movePlane(planeMarker2, planePath2, 5000);
        })
        .then(() => {
            // Animation 2 terminée
            planeMarker2.on('click', function (e) {
                if (!isClickedCarVip) {
                    carVipMarker = L.marker([51.8782004249389, 0.2527186065437026], { icon: carVipIcon }).addTo(map)
                        .bindPopup("<center>" + carVipImg + "</center>");
                    isClickedCarVip = true;
                    carVipMarker.on('click', function (e) {
                        var centerCoordinates3 = [52.0716145149471, -1.013988566118743];
                        map.setView(centerCoordinates3, 15);
                    });
                }
            });
        });
});


        

var f1Icon = new L.Icon({
    iconUrl: 'images/mercef1.png',
    iconSize: [80, 40]
});

var carPath = [
    [52.0695852712816, -1.0218223786384664],
        [52.06986556037502, -1.0214844202903626],
        [52.070221689861675, -1.02102308032311],
        [52.07049208257491, -1.0206904863932305],
        [52.07091745317567, -1.0201808666838945],
        [52.07128016908102, -1.0195156788241353],
        [52.071362604111265, -1.0187753891787228],
        [52.07126038465975, -1.017740056511008],
        [52.07121751836912, -1.016806647740055],
        [52.07145822854477, -1.0157605861864012],
        [52.07166926106751, -1.0153099750992662],
        [52.07195613178777, -1.0147306179310887],
        [52.072170459283846, -1.0143068288914032],
        [52.0724738133658, -1.013663098704539],
        [52.07251338114791, -1.0132500385119756],
        [52.07226278466773, -1.0129389022549913],
        [52.07194294237491, -1.0127672409290815],
        [52.071461525952216, -1.0125312065272314],
        [52.0713955780928, -1.0121556972515606],
        [52.07165277419364, -1.0118016456487855],
        [52.07231883926047, -1.0114636873006817],
        [52.07293543521272, -1.0113993142946103],
        [52.07356191435461, -1.0122200702828619],
        [52.07426421998254, -1.013480708547421],
        [52.07515445068477, -1.01516513582857],
        [52.07621281297583, -1.0170426821607328],
        [52.07676341519975, -1.0180243706957002],
        [52.0770370652757, -1.0185447192634152],
        [52.07709641085393, -1.0195854163988456],
        [52.07682605814149, -1.0200199341829848],
        [52.0764436051591, -1.0200628495287756],
        [52.07603477248562, -1.0201915955661485],
        [52.07580397819395, -1.0209587073721613],
        [52.07605125774651, -1.0216078019772494],
        [52.076344264004426, -1.0216695070181177],
        [52.07704322888705, -1.0211920738033748],
        [52.07776855823932, -1.020548343636113],
        [52.07835870386605, -1.0195291041735781]

];

var carMarker = L.marker(carPath[0], { icon: f1Icon }).addTo(map);

silverstoneMarker.on('click', function (e) {
    animateMarker(carMarker, carPath, 9000); // Augmentez ou diminuez la durée selon votre préférence
});

function animateMarker(marker, path, duration) {
    var startTime = new Date().getTime();
    var interval = 16; // intervalle de rafraîchissement (en millisecondes)
    var length = path.length;

    function animate() {
        var currentTime = new Date().getTime();
        var elapsedTime = currentTime - startTime;
        var progress = elapsedTime / duration;

        if (progress < 1) {
            var index = Math.floor(progress * length);
            var nextIndex = index + 1;

            if (nextIndex < length) {
                var latlng = interpolateLatLng(path[index], path[nextIndex], progress % (1 / length));
                marker.setLatLng(latlng);

                requestAnimationFrame(animate);
            } else {
                // Fin de l'animation, redémarrez la boucle
                setTimeout(function () {
                    startTime = new Date().getTime();
                    animate();
                }, interval);
            }
        } else {
            // Fin de l'animation, redémarrez la boucle
            setTimeout(function () {
                startTime = new Date().getTime();
                animate();
            }, interval);
        }
    }

    function interpolateLatLng(start, end, ratio) {
        var lat = start[0] + (end[0] - start[0]) * ratio;
        var lng = start[1] + (end[1] - start[1]) * ratio;
        return [lat, lng];
    }

    animate();
}
