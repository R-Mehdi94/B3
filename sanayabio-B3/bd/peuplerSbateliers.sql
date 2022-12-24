use sbateliers ;

insert into Client(numeroClient,civilite,nom,prenom,dateDeNaissance,adresseElectronique,motDePasse,adressePostale,codePostal,ville,numeroDeMobile) value(1,"Homme", "HAMROUCHIE", "Ahmed", "03-06-24", "ahmed94@gmail.com", "azerty", "11 rue Julien Helot", 94350, "Villeneuve", 0624162832 ),(2,"Homme", "AIT DAOUD", "Walid", "03-02-05", "walid77@gmail.com", "azerty", "3 rue du Bois l'Abbé", 77650, "Pontault", 0627688732 ),(3,"Homme", "BOURGET", "Theophile", "00-11-30", "theophile77@gmail.com", "azerty", "25 allée jsp", 77000, "Roissy", 0665658632),(4,"Homme", "BELLIL", "Mehdi", "02-11-09", "mehdi94@gmail.com", "azerty", "CTH", 94500, "Champigny", 0661756752),(5,"Femme", "JSP", "Nolween", "03-02-02", "nolween94@gmail.com", "azerty", "2 rue Cristine", 94120, "Ivry", 0745861756);

insert into ResponsableAteliers(numeroResponsableAteliers,nomConnexion,nom,prenom) value(1,"madam","ADAM", "Marie" ), (2,"aaloui","ALOUI", "Amina" ), (3,"callain","ALLAIN", "Coralie" );

insert into Atelier(numeroAtelier,numeroResponsableAteliers,dateEnregistrement,dateHeureProgrammees,duree,nombreDePlaces,theme) value(1,2,"21-09-15", "21-09-20 10:30:00", "01:00:00", 5, "Création de bougie avec de la cire de vanille"),(2,3,"22-10-01", "22-09-16 10:30:00", "01:30:00", 2, "Cardio"),(3,1,"21-11-01", "21-11-14 17:00:00", "00:30:00", 3, "Aucune idée, ils vont se dermerder à 3");

insert into Participation(dateInscription,numeroAtelier,numeroClient) value("22-09-17",1,2), ("22-09-15",1,1), ("22-09-19",1,3), ("22-09-17",1,5), ("22-09-18",1,4);
insert into Participation(dateInscription,numeroAtelier,numeroClient) value("22-10-15",2,3), ("22-10-06",2,5);
insert into Participation(dateInscription,numeroAtelier,numeroClient) value("22-11-04",3,1), ("22-11-11",3,4), ("22-11-12",3,5);
