<?php

	include('../technique/log.php');

	$login = $_GET[ 'login' ] ;
	$mdp = $_GET[ 'mdp' ] ;

   if(preg_match("/^[a-z]+@[a-z]+([a-z\.]+\.)+[a-z]/", $login)){
      try {
         
         $bd = new PDO(
                     'mysql:host=localhost;dbname=sbateliers' ,
                     'Sb2022' ,
                     'azerty'
           ) ;
           $sql = 'select nom , prenom '
           . 'from Client '
           . 'where adresseElectronique = :login '
           . 'and motDePasse = :mdp' ;
           
               
          $st = $bd -> prepare( $sql ) ;
          
          $st -> execute( array( 
                                  ':login' => $login ,
                                  ':mdp' => $mdp 
                          ) 
                      ) ;
          $resultat = $st -> fetchall() ;
              
          unset( $bd ) ;
          
          if( count( $resultat ) == 1 ) {
              session_start() ;
              $_SESSION[ 'nom' ] = $resultat[0]['nom'] ;
              $_SESSION[ 'prenom' ] = $resultat[0]['prenom'] ;
              
              $_SESSION[ 'login' ] = $login ;
              
              header( 'Location: ../vues/vue-espace-client ') ;
              $log = '@' . $_SERVER['REMOTE_ADDR'] .' '. date('y-m-d h:i:s').' '. $login .' '. 'Ok'.' ' . $_SERVER['HTTP_USER_AGENT'];
              sbauthentification($log.PHP_EOL);
           }
          else {
              header ('Location: ../vues/vue-connexion');
              $log = '@' . $_SERVER['REMOTE_ADDR'] .' '. date('y-m-d h:i:s').' '. $login .' '. 'Nok'.' ' . $_SERVER['HTTP_USER_AGENT'];
              sbauthentification($log.PHP_EOL);
          }
       }
   
      catch( PDOException $e ){
   
         die("Erreur : " . $e->getMessage());
         header( 'Location: ../index.php?echec=0' ) ;
      }
   }else{
      header( 'Location: ../vues/vue-connexion ') ;
   }
	

   

?>

