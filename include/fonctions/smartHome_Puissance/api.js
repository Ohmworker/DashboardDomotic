function executerPuissance(callback) {
    var xhr = getXMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            flux = JSON.parse(xhr.responseText);
            console.log(flux)
            callback();
        }
    }
    // la requête AJAX : lecture de data.json
    xhr.open("GET", "include/fonctions/smartData/json.php", true);
    xhr.send();
}

var flux = [];
        
function affichagePuissance() {
    document.getElementById("Puissance").innerHTML = flux.Maison.puissance;
}

executerPuissance(affichagePuissance);
var interval = setInterval(function() { executerPuissance(affichagePuissance);}, 20000);