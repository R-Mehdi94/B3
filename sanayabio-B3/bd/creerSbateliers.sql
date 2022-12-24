drop database if exists sbateliers ;
create database sbateliers ;

use sbateliers ;


create table Client(
	numeroClient int(6) ,
	civilite char(40),
	nom char(40),
	prenom char(40),
	dateDeNaissance date,
	adresseElectronique varchar(40),
	motDePasse varchar(40),
	adressePostale varchar(40),
	codePostal int(5),
	ville char(40),
	numeroDeMobile int(10),
	primary key(numeroClient)
);


create table ResponsableAteliers(
	numeroResponsableAteliers int,
	nomConnexion varchar(20),
	nom char(20),
	prenom char(20),
	primary key(numeroResponsableAteliers)
);


create table Atelier(
	numeroAtelier int,
	numeroResponsableAteliers int  ,
	dateEnregistrement date,
	dateHeureProgrammees datetime,
	duree time,
	nombreDePlaces int,
	theme varchar(100),
	primary key(numeroAtelier),
	foreign key(numeroResponsableAteliers) references ResponsableAteliers(numeroResponsableAteliers)
);

create table Participation(
	dateInscription date,
	numeroAtelier int,
	numeroClient int,
	primary key(numeroAtelier,numeroClient),
	foreign key(numeroAtelier) references Atelier(numeroAtelier),
	foreign key(numeroClient) references Client(numeroClient)
);