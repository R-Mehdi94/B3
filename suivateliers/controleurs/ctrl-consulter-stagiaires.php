<?php
	session_start() ;
	
	require "modeles/ModeleSuivAteliers.php" ;
	$atelier = ModeleSuivAteliers::getAtelier( $idAtelier ) ;
	$stagiaires = ModeleSuivAteliers::getStagiaires( $idAtelier ) ;
	
	require "vues/vue-stagiaires.php" ;
?>
