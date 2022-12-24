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
		.'from Client ' 
        .'where adresseElectronique = :login';





		// Préparation de la requete SQL

		$st = $bd -> prepare($sql);


		


		// Exécution de la requete SQL

        $st -> execute([
            ':login' => $_SESSION[ 'login' ]
            ]) ;




		//Retourne un tableau regroupant toutes les lignes du jeu d'enregistrement

		$clients = $st -> fetchall() ;
		
		
		
		
		
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
						<td>Nemero</td>
						<td>Civilite</td>
						<td>Nom</td>
                        <td>Prenom</td>
						<td>Date de naissance</td>
						<td>Adresse Electronique</td>
                        <td>Adresse Postale</td>
                        <td>Code postal</td>
                        <td>Ville</td>
                        <td>Numero de mobile</td>


                        
					</tr>
				</thead>
				<tbody>
					
					<?php foreach( $clients as $unclient ){ ?>
						<tr>
							<td><?php echo $unclient[ 'numeroClient' ] ; ?></td>
							<td><?php echo $unclient[ 'civilite' ] ; ?></td>
							<td><?php echo $unclient[ 'nom' ] ; ?></td>
                            <td><?php echo $unclient[ 'prenom' ] ; ?></td>
                            <td><?php echo $unclient[ 'dateDeNaissance' ] ; ?></td>
							<td><?php echo $unclient[ 'adresseElectronique' ] ; ?></td>
							<td><?php echo $unclient[ 'adressePostale' ] ; ?></td>
							<td><?php echo $unclient[ 'codePostal' ] ; ?></td>
							<td><?php echo $unclient[ 'ville' ] ; ?></td>
							<td><?php echo $unclient[ 'numeroDeMobile' ] ; ?></td>

						</tr>
					<?php } ?>
					
				</tbody>
				
			</table>
