<?php

	class ModeleSuivAteliers {

		private static $connexion = null ;
		
		private function __construct(){
			self::$connexion = new PDO( 'mysql:host=localhost;dbname=sb', 'slam', 'azerty' ) ;
		}

		private static function getConnexion(){
			if( self::$connexion == null ){
				new ModeleSuivAteliers() ;
			}
			return self::$connexion ;
		}

		public static function getResponsable( $login , $mdp ){
			$bd = self::getConnexion() ;
			$sql = "select numero , nom , prenom from responsable where login = :login and mdp = :mdp" ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ':login' => $login , ':mdp' => $mdp ) ) ;
			$responsable = $st->fetch( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $responsable ;
		}
		
		public static function getAtelier( $idAtelier ){
			$bd = self::getConnexion() ;
			$sql = "select theme , date_heure from atelier where numero = :idAtelier" ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ':idAtelier' => $idAtelier ) ) ;
			$atelier = $st->fetch( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $atelier ;
		}
		
		public static function getAteliers( $idResponsable ){
			$bd = self::getConnexion() ;
			$sql = "select numero , theme , date_heure "
				 . "from atelier "
				 . "where responsable = :idResponsable" ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ':idResponsable' => $idResponsable ) ) ;
			$ateliers = $st->fetchall( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $ateliers ;
		}
		
		public static function getStagiaires( $idAtelier ){
			$bd = self::getConnexion() ;
			$sql = "select c.numero , nom , prenom , email , mobile , date_naissance , adresse , cp , ville , mobile , civilite "
				 . "from participer p "
				 . "inner join client c "
				 . "on p.client = c.numero "
				 . "where atelier = :idAtelier" ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ':idAtelier' => $idAtelier ) ) ;
			$clients = $st->fetchall( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $clients ;
		}
		
	}
	
?>
