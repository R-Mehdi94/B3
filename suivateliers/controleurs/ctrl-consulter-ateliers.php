<?php
	
	session_start() ;
	
	require "modeles/ModeleSuivAteliers.php" ;
	$ateliers = ModeleSuivAteliers::getAteliers( $_SESSION[ 'numero' ] ) ;
	
	require "vues/vue-ateliers.php" ;
?>
