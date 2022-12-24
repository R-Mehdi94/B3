<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanaya Bio - inscription</title>
</head>
<body>
      
            <form action="../controleurs/ctrl-enregistrer-client.php" method="GET">
                <h1>Inscription</h1>

                </br>
                
                <label><b>Civilité</b></label>
                <input type="radio" name="civilite" value="Femme" checked>Mme.

                <input type="radio" name="civilite" value="Homme" >M.

                </br>
                </br>

                <label><b>Nom</b></label>
                <input type="text" placeholder="Nom..." name="nom" required>
                
                <label><b>Prénom</b></label>
                <input type="text" placeholder="Prénom..." name="prenom" required>

                <label><b>Email</b></label>
                <input type="email" placeholder="Email..." name="adresseElectronique" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Mot de passe..." name="motDePasse" required>

                <label><b>Confirmer le mot de passe</b></label>
                <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required>

                <label><b>Date de Naissance</b></label>
                </br>
                <input type="date" placeholder="Date de naissance..." name="dateDeNaissance" required>

                </br>

                <label><b>Adresse Postal</b></label>
                <input type="text" placeholder="Adresse postal..." name="adressePostale" required>

                <label><b>Code Postal</b></label>
                <input type="text" placeholder="Code postal..." name="codePostal" maxlength="5" pattern="[0-9]{5}" required >

                <label><b>Ville</b></label>
                <input type="text" placeholder="Ville..." name="ville" required>

                <label><b>Numéro de Téléphone</b></label>
                <input type="tel" placeholder="Numéro de mobile..." name="numeroDeMobile" required>

                <input type="submit" id='submit' value="S'inscrire" >
                <input type="reset" id='reset' value='Annuler' > 
                
                <a class="text-purple" href="../">Retour</a>
                
            </form>
</body>
</html>