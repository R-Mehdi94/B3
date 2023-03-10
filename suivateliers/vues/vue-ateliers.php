<!DOCTYPE html>
<html lang="fr">

<?php require_once 'secureToke.php'; 


?>

	<head>
		<meta charset="utf-8">
		<title>SB - Ateliers</title>
	</head>
	
	<body>
		<a href="/suivateliers/deconnecter">Se déconnecter</a>

		<h5><?= $_SESSION[ "nom" ] ?> <?= $_SESSION[ "prenom" ] ?></h5>


		
		<h4>Ateliers</h4>
		
		<table>
			
			<thead>
				<th>Thème</th>
				<th>Date</th>
				<th>Stagiaires</th>
			</thead>
			
			<tbody>
				
				<?php foreach( $ateliers as $unAtelier ){ ?>
					
					<tr>
						<td><?= $unAtelier[ 'theme' ] ?></td>
						<?php
							list( $date , $heure ) = explode( ' ' , $unAtelier[ 'date_heure' ] ) ;
							list( $annee , $mois , $jour ) = explode( '-' , $date ) ;
						?>
						<td><?= $jour ?>/<?= $mois ?>/<?= $annee ?></td>
						
						<td><a href="/suivateliers/ateliers/<?= $unAtelier[ 'numero' ] ?>/stagiaires">Voir</a></td>
						
					</tr>
					
				<?php } ?>
				
			</tbody>
			
		</table>
		
	</body>
	
</html>