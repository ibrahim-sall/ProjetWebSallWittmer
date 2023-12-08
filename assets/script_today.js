let heure = document.getElementById('heure');

function loop(){
    let heureLocale = new Date().toLocaleTimeString('fr');
    heure.innerText = heureLocale;
    if(heureLocale.substring(7) == 0){
        heure.classList.add('red');
    }
    else{
        heure.classList.remove('red');
    };
    setTimeout(loop, 100);
}
loop();