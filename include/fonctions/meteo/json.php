<?php
	header('Content-Type: application/json');

	// Requête Open Meteo
	$url = 'https://api.open-meteo.com/v1/forecast?latitude=50.3603&longitude=3.08&hourly=temperature_2m&current_weather=true&timezone=Europe%2FBerlin';
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$headers = array(
   		"accept: application/json",
   		"Authorization: Bearer 56a3adf867e4822a9f5557af|070e99641e8013a962886c51bfe2a0e3",
	);
	
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; fr; rv:1.9.2.13) Gecko/20101203 Firefox/3.6.13');
	
	// Execute
	$result=curl_exec($curl);
	
	// Closing
	curl_close($curl);
	
	// Traitement
	$tab  = json_decode($result,true);

	$flux = array(
					'dataCategorie'	=> 'Météo',
					'format'		=> ' °C'		
					);

	//$flux['tab'] = $tab;

	$traduction_weather = array(
									0 => 'Ensoleillé',
									1 => 'Plutôt clair',
									2 => 'Partiellement nuageux',
									3 => 'Couvert',
									45 => 'Brouillard',
									48 => 'Brouillard givré',
									51 => 'Bruine légère',
									53 => 'Bruine modérée',
									55 => 'Bruine intense',
									56 => 'Bruine verglaçante légère',
									57 => 'Bruine verglaçante intense',
									61 => 'Pluie faible',
									63 => 'Pluie moyenne',
									65 => 'Pluie intense',
									66 => 'Pluie verglaçante légère',
									67 => 'Pluie verglaçante forte',
									71 => 'Chute de neige légère',
									73 => 'Chute de neige moyenne',
									75 => 'Chute de neige forte',
									77 => 'Chute de flocon de neige',
									80 => 'Averses légères',
									81 => 'Averses modérées',
									82 => 'Averses violentes',
									85 => 'Averses de neige légères',
									86 => 'Averses de neige violentes',
									95 => 'Orage léger / modéré',
									96 => 'Orage avec grêle',
									99 => 'Orage avec forte grêle'
	);

	$flux['temperature'] = $tab['current_weather']['temperature'];
	$flux['ventVitesse'] = $tab['current_weather']['windspeed'];
	$flux['codeMeteo'] = $tab['current_weather']['weathercode'];
	$code = $tab['current_weather']['weathercode'];
	$flux['ventDirection'] = $traduction_weather[$code];
	$flux['FullData'] = $tab;

	echo json_encode($flux);
?>