function executerMeteoAPI(callback) {
    var xhr = getXMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            flux = JSON.parse(xhr.responseText);
            console.log(flux)
            callback();
        }
    }
    // la requête AJAX : lecture de data.json
    xhr.open("GET", "include/fonctions/meteo/json.php", true);
    xhr.send();
}

var flux = [];
        
        
function affichageMeteoIndex() {
    document.getElementById("meteoTemperature").innerHTML = flux.temperature;
    document.getElementById("meteoFormat").innerHTML = flux.format;
    document.getElementById("meteoVentVitesse").innerHTML = 'Vents de ' + flux.ventVitesse + ' km/h';
    document.getElementById("meteoVentDirection").innerHTML = flux.ventDirection;
}

executerMeteoAPI(affichageMeteoIndex);
var interval = setInterval(function() { executerMeteoAPI(affichageMeteoIndex);}, 60000);