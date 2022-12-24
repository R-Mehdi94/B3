<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>SB - Stagiaires</title>
	</head>
	
	<body>
		<a href="/suivateliers/deconnecter">Se déconnecter</a>
		<a href="/suivateliers/ateliers">Ateliers</a>
		
		<h4>
			Atelier <em><?= $atelier[ 'theme' ] ?></em>
			<?php
				list( $date , $heure ) = explode( ' ' , $atelier[ 'date_heure' ] ) ;
				list( $annee , $mois , $jour ) = explode( '-' , $date ) ;
			?>
			du <em><?= $jour ?>/<?= $mois ?>/<?= $annee ?></em>
		</h4>
		
		<table>
			
			<thead>
				<th>Civilité</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Date de naissance</th>
				<th>Adresse</th>
				<th>CP</th>
				<th>Ville</th>
			</thead>
			
			<tbody>
				
				<?php foreach( $stagiaires as $unStagiaire ){ ?>
					
					<tr>
						<td><?= $unStagiaire[ 'civilite' ] ?></td>
						<td><?= $unStagiaire[ 'nom' ] ?></td>
						<td><?= $unStagiaire[ 'prenom' ] ?></td>
						<td><?= $unStagiaire[ 'email' ] ?></td>
						<td><?= $unStagiaire[ 'mobile' ] ?></td>
						<?php
							list( $annee , $mois , $jour ) = explode( '-' , $unStagiaire[ 'date_naissance' ] ) ;
						?>
						<td><?= $jour ?>/<?= $mois ?>/<?= $annee ?></td>
						<td><?= $unStagiaire[ 'adresse' ] ?></td>
						<td><?= $unStagiaire[ 'cp' ] ?></td>
						<td><?= $unStagiaire[ 'ville' ] ?></td>
								
					</tr>
					
				<?php } ?>
				
			</tbody>
			
		</table>
		
	</body>
	
</html>
