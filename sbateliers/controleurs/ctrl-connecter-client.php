<?php


		$email = $_POST[ "email" ];
		$mdp = $_POST[ "mdp" ];

		$salted = "abc".$mdp."def";
		$hashed = hash('sha256', $salted);

		
		require_once "modeles/ModeleSBAteliers.php" ;

		$client = ModeleSBAteliers::getClient( $email , $hashed ) ;

		if( $client !== FALSE ){

			session_start() ;
			
			$_SESSION[ "numero" ] = $client[ "numero" ] ;
			$_SESSION[ "nom" ] = $client[ "nom" ] ; 
			$_SESSION[ "prenom" ] = $client[ "prenom" ] ; 
			
			header( "Location: /sbateliers/clients/espace" );
		}
		else {
			$erreur = 'EMail ou mot de passe incorrect.' . $hashed  ;
			require "vues/vue-connexion.php" ;
		}

?>
