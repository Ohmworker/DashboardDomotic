function executerSondeTemperature(callback) {
    var xhr = getXMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            flux = JSON.parse(xhr.responseText);
            console.log(flux)
            callback();
        }
    }
    // la requête AJAX : lecture de data.json
    xhr.open("GET", "include/fonctions/smartHome_sondeTemperature/json.php", true);
    xhr.send();
}

var flux = [];
        
function affichageSondeTemperature() {
    document.getElementById("sondeTemperature").innerHTML = flux.sondeTemperature;
}

executerSondeTemperature(affichageSondeTemperature);
var interval = setInterval(function() { executerSondeTemperature(affichageSondeTemperature);}, 20000);