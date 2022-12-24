<?php session_start() ; ?>

<?php

    $profils = array() ;

	try {
		
		// VOTRE CODE ICI :
		// La variable $produits (tableau de tableaux associatifs) doit-être valorisée avec les valeurs de la table 
		// Produit de la base de données.
		// Chaque élément de la variable $produits est un tableau associatif qui correspond à un produit et dont les 
		// trois éléments ont pour clés 'code', 'libelle' et 'quantite'.


		// Connexion à la BD

		$bd = new PDO(
            'mysql:host=localhost;dbname=sbateliers' ,
            'Sb2022' ,
            'azerty'
        ) ;





		//Création de la requete SQL

		$sql = 'select *'
		.'from Atelier ';





		// Préparation de la requete SQL

		$st = $bd -> prepare($sql);


		


		// Exécution de la requete SQL

        $st -> execute() ;




		//Retourne un tableau regroupant toutes les lignes du jeu d'enregistrement

		$ateliers = $st -> fetchall() ;
		
		
		
		
		
	}
	catch( PDOException $e ){
		
		session_unset() ;
		session_destroy() ;
		
		header( 'Location: ../index.php?echec=0' ) ;
	}
?>

<table class="table table-striped">
				<thead>
					<tr>
						<td>Numero d'atelier</td>
						<td>Numero du responsable</td>
						<td>Date d'enregistrement</td>
                        <td>Date et heure</td>
						<td>Durée</td>
						<td>Nombre de place</td>
                        <td>Theme</td>
					</tr>
				</thead>
				<tbody>
					
					<?php foreach( $ateliers as $unatelier ){ ?>
						<tr>
							<td><?php echo $unatelier[ 'numeroAtelier' ] ; ?></td>
							<td><?php echo $unatelier[ 'numeroResponsableAteliers' ] ; ?></td>
							<td><?php echo $unatelier[ 'dateEnregistrement' ] ; ?></td>
                            <td><?php echo $unatelier[ 'dateHeureProgrammees' ] ; ?></td>
                            <td><?php echo $unatelier[ 'duree' ] ; ?></td>
							<td><?php echo $unatelier[ 'nombreDePlaces' ] ; ?></td>
							<td><?php echo $unatelier[ 'theme' ] ; ?></td>
						</tr>
					<?php } ?>
					
				</tbody>
				
			</table>
