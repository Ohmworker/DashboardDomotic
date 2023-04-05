function executerTempo(callback) {
    var xhr = getXMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            flux = JSON.parse(xhr.responseText);
            callback();
        }
    }
    // la requête AJAX : lecture de data.json
    xhr.open("GET", "include/fonctions/smartData/json.php", true);
    xhr.send();
}

var flux = [];
        
function affichageTempo() {
    document.getElementById("Tempo").innerHTML = flux.Maison.tempoAUJOURDHUI;
}

executerTempo(affichageTempo);
var interval = setInterval(function() { executerTempo(affichageTempo);}, 20000);