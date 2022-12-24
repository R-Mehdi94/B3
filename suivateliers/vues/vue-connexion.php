<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>SB - Ateliers</title>
	</head>
	<body>
		
		<a href="/suivateliers"></a>
		<br/>
		
		<?php if( isset( $erreur ) ){ ?>
			<b><?= $erreur ?></b>
		<?php } ?>
		
		<form action="/suivateliers/connecter" method="POST">
			Identifiant :<br/>
			<input type="text" name="login" /><br/>
			Mot de passe :<br/>
			<input type="password" name="mdp" /><br/>
			<br/>
			<input type="submit" value="Valider" />
		</form>
		
	</body>
	
</html>
