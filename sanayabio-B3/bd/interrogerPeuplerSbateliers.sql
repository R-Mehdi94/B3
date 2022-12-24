use sbateliers ;

/* Vous inscrire en tant que client*/

/*insert into Client(numeroClient,civilite,nom,prenom,dateDeNaissance,adresseElectronique,motDePasse,adressePostale,codePostal,ville,numeroDeMobile) value();*/



/*--------------------------------------------------------------------------------------------------*/



/* Afficher tous les clients*/

SELECT * FROM Client;



/*--------------------------------------------------------------------------------------------------*/



/* Afficher tous les ateliers passés*/

SELECT numeroAtelier FROM Atelier WHERE DATE(dateHeureProgrammees) < Date(NOW());



/*--------------------------------------------------------------------------------------------------*/



/* Afficher tous les ateliers du jour*/


SELECT numeroAtelier FROM Atelier WHERE DATE(dateHeureProgrammees) = DATE(NOW());



/*--------------------------------------------------------------------------------------------------*/



/* Afficher tous les ateliers programmés */



SELECT numeroAtelier FROM Atelier;



/*--------------------------------------------------------------------------------------------------*/



/* Afficher le nombre de participation à des ateliers programmés de chaque client */



SELECT numeroClient,COUNT(numeroClient) AS nombreParticipation FROM Participation Group by numeroClient ;



/*--------------------------------------------------------------------------------------------------*/



/* Enregistrer votre participation à deux ateliers programmés */



/*insert into Participation(dateInscription,numeroAtelier,numeroClient) value(),();*/



/*--------------------------------------------------------------------------------------------------*/



/* Afficher les ateliers programmés auquels vous etes inscrit*/



SELECT numeroAtelier FROM Participation WHERE numeroClient = 1;



/*--------------------------------------------------------------------------------------------------*/



/* Annuler l'une de vos participations à l'un des ateliers programmés*/



DELETE FROM Participation WHERE numeroClient = 1 AND numeroAtelier = 3;
