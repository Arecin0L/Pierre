//l'objet navigator et geolocation

document.getElementById('p1').innerHTML =
'Langue du navigateur : ' + navigator.language +
'<br>Cookies autorisés : ' + navigator.cookieEnabled +
'<br>Plateforme utilisées : ' + navigator.platform;

function coordonnees(pos) {
    let crd = pos.coords;

    let latitude = crd.latitude;
    let longitude = crd.longitude;

    document.getElementById('p2').innerHTML = 'Latitude : ' + latitude.toFixed(2);
    document.getElementById('p3').innerHTML = 'Longitude : ' + longitude.toFixed(2);
}

navigator.geolocation.getCurrentPosition(coordonnees);

//Objet Screen
document.getElementById('p4').innerHTML =
    'Dimensions totales de l\'écran : ' + screen.width + '*' + screen.height +
    '<br>Surface disponible : ' + screen.availWidth + '*' + screen.availHeight +
    '<br>Palette de couleur : ' + screen.colorDepth +
    '<br>Résolution : ' + screen.pixelDepth;


//Objet Location

// location.reload()
// location.assign('www.fff.fr')
