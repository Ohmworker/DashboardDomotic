<?php
	// Requete
	$url = "http://127.0.0.1:1880/API/DATA";
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		
	// Execution
	$result=curl_exec($curl);
	
	// Fermeture
	curl_close($curl);
	
	// Traitement
	$tab  = json_decode($result,true);
	
    // Génération du json
	header('Content-Type: application/json');
	echo json_encode($tab);
?>