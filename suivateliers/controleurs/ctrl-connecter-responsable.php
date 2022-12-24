<?php

	$login = $_POST[ "login" ] ;
	$mdp = hash("SHA256",$_POST[ "mdp" ]) ;

	
	require "modeles/ModeleSuivAteliers.php" ;
	$responsable = ModeleSuivAteliers::getResponsable( $login , $mdp ) ;
	
	if( $responsable !== FALSE ){
		session_start() ;
		
		$_SESSION[ "numero" ] = $responsable[ "numero" ] ;
		$_SESSION[ "nom" ] = $responsable[ "nom" ] ; 
		$_SESSION[ "prenom" ] = $responsable[ "prenom" ] ; 
		
		header( "Location: /suivateliers/ateliers" ) ;
	}
	else {
		$erreur = 'Identifiant de connexion ou mot de passe incorrect.' ;
		require "vues/vue-connexion.php" ;
	}

?>
