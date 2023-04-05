function executerTensionEnedis(callback) {
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
        
function affichageTensionEnedis() {
    document.getElementById("tensionEnedis").innerHTML = (flux.Maison.tension).toFixed(0);
}

executerTensionEnedis(affichageTensionEnedis);
var interval = setInterval(function() { executerTensionEnedis(affichageTensionEnedis);}, 20000);