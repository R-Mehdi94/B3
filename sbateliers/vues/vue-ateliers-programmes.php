<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>SB - Ateliers</title>
	</head>
	
	<body>
		<a href="/sbateliers/clients/espace">Mon espace</a>
		<a href="/sbateliers/clients/profil">Profil</a>
		<a href="/sbateliers/clients/deconnecter">Se déconnecter</a>
		
		<h4>Ateliers programmés</h4>
		
		<table>
			
			<thead>
				<th>Thème</th>
				<th>Date</th>
				<th>Heure</th>
				<th>Durée</th>
				<th>Responsable</th>
				<th>Participation</th>
			</thead>
			
			<tbody>
				
				<?php foreach( $ateliers as $unAtelier ){ ?>
					
					<tr>
						<td><?= $unAtelier[ 'theme' ] ?></td>
						<?php
							list( $date , $heure ) = explode( ' ' , $unAtelier[ 'date_heure' ] ) ;
							list( $annee , $mois , $jour ) = explode( '-' , $date ) ;
							list( $heures , $minutes , $secondes ) = explode( ':' , $heure ) ;
						?>
						<td><?= $jour ?>/<?= $mois ?>/<?= $annee ?></td>
						<td><?= $heures ?>:<?= $minutes ?></td>
						<td><?= $unAtelier[ 'duree' ] ?></td>
						<td><?= $unAtelier[ 'prenom' ] ?> <?= $unAtelier[ 'nom' ] ?></td>
						
						<td>
						
							<?php if( $unAtelier[ 'participe' ] == '0' ){ ?>
							
								<td><a href="/sbateliers/participations/<?= $unAtelier[ 'numero' ] ?>/proceder">Procéder</a></td>
								
							<?php } else { ?>
								
								<td><a href="/sbateliers/participations/<?= $unAtelier[ 'numero' ] ?>/annuler">Annuler</a></td>
								
							<?php } ?>
						
						</td>
						
					</tr>
					
				<?php } ?>
				
			</tbody>
			
		</table>
		
	</body>
	
</html>
