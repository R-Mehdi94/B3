<?php
	//var_dump( $_GET[ 'route' ] ) ;
	$route = $_GET[ 'route' ] ;

	if( $route == '' ){
		require "vues/vue-connexion.php" ;
	}
	elseif( $route == 'connecter' ){
		require "controleurs/ctrl-connecter-responsable.php" ;
	}
	elseif( $route == 'ateliers' ){
		require "controleurs/ctrl-consulter-ateliers.php" ;
	}
	elseif( preg_match( '#^ateliers/([0-9]+)/stagiaires$#' , $route , $atomes ) ){
		$idAtelier = $atomes[ 1 ] ;
		require "controleurs/ctrl-consulter-stagiaires.php" ;
	}
	elseif( $route == 'deconnecter' ){
		require "controleurs/ctrl-deconnecter.php" ;
	}
	else {
		var_dump( $route ) ;
	}
?>
