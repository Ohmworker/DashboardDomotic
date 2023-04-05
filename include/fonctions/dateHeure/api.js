function executerDateHeureGET(callback) {
    var xhr = getXMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            flux = JSON.parse(xhr.responseText);
            console.log(flux)
            callback();
        }
    }
    // la requête AJAX : lecture de data.json
    xhr.open("GET", "include/fonctions/dateHeure/json.php", true);
    xhr.send();
}

var flux = [];
        
function affichageDateHeure() {
    document.getElementById("dateJour").innerHTML = flux.Date;
    document.getElementById("heureJour").innerHTML = flux.Heure;
}

executerDateHeureGET(affichageDateHeure);
var interval = setInterval(function() { executerDateHeureGET(affichageDateHeure);}, 20000);