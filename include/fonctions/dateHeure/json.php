<?php
    date_default_timezone_set('Europe/Paris');
    $flux = array(
                'Date' => date('d/m/Y'),
                'Heure' => date('H:i')
    );
    header('Content-Type: application/json');
	echo json_encode($flux);
?>