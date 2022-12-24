<?php

    include('../technique/log.php');

	$numeroClient = rand();
	$civilite = $_GET[ 'civilite' ] ;
	$nom = $_GET[ 'nom' ] ;
    $prenom = $_GET[ 'prenom' ] ;
    $adresseElectronique = $_GET[ 'adresseElectronique' ] ;
    $motDePasse = $_GET[ 'motDePasse' ] ;
	$dateDeNaissance = $_GET[ 'dateDeNaissance' ] ;
    $adressePostale = $_GET[ 'adressePostale' ] ;
	$codePostal = $_GET[ 'codePostal' ] ;
    $ville = $_GET[ 'ville' ] ;
    $numeroDeMobile = $_GET[ 'numeroDeMobile' ] ;

    if(preg_match("/[0-9]{5}/" , $codePostal)){
        try {

            $bd = new PDO(
                            'mysql:host=localhost;dbname=sbateliers' ,
                            'Sb2022' ,
                            'azerty'
            ) ;


            $sql = 'insert into Client(numeroClient,civilite,nom,prenom,dateDeNaissance,adresseElectronique,motDePasse,adressePostale,codePostal,ville,numeroDeMobile) 
            value(:numeroClient, :civilite, :nom, :prenom, :dateDeNaissance, :adresseElectronique, :motDePasse, :adressePostale, :codePostal, :ville, :numeroDeMobile)' ;
            
                
            $st = $bd -> prepare( $sql ) ;
            
            $st -> execute([
                                ':numeroClient' => $numeroClient ,
                                'civilite' => $civilite,
                                ':nom' => $nom, 
                                ':prenom' => $prenom, 
                                ':dateDeNaissance' => $dateDeNaissance, 
                                ':adresseElectronique' => $adresseElectronique, 
                                ':motDePasse' => $motDePasse, 
                                ':adressePostale' => $adressePostale, 
                                ':codePostal' => $codePostal, 
                                ':ville' => $ville, 
                                ':numeroDeMobile' => $numeroDeMobile 
                                ]) ;
                
            unset( $bd ) ;

            header( 'Location: ../vues/vue-connexion ') ;
            

            
        }
        

        catch( PDOException $e ){

            die("Erreur : " . $e->getMessage());
            header( 'Location: ../index.php?echec=0' ) ;
        }
    }else{
        $log = '@' . $_SERVER['REMOTE_ADDR'] .' '. date('y-m-d h:i:s').' '. 'inscription-client' .' '. $nom.' ' . $codePostal;
        sbinscription($log.PHP_EOL);

        header( 'Location: ../vues/vue-inscription ') ;
    }



?>