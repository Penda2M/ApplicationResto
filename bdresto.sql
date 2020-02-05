drop database resto;
create database resto;
use resto;


/*-------------gestionnaire------------*/
create table gestionnaire
(
idges varchar(10) not null,
nom varchar(250) not null,
prenom varchar(250) not null,
adresse varchar(250) not null,
telephone int not null,
dateNaissance varchar(250) not null,
login varchar(250) not null,
motDePasse varchar(8) not null,
numCIN varchar(20) not null,
primary key(idges)
);


/*-------------caissier------------*/
create table caissier
(
idCaissier varchar(10) not null,
nom varchar(250) not null,
prenom varchar(250) not null,
adresse varchar(250) not null,
telephone int not null,
dateNaissance varchar(250) not null,
login varchar(250) not null,
motDePasse varchar(8) not null,
numCIN varchar(20) not null,
primary key(idCaissier)
);

/*-------------plat------------*/
create table plat
(
intitule varchar(100) not null,
description varchar(100) not null,
idCaisse varchar(100) not null,
prix int not null,
categorie ENUM("fast-food","entree","assiete"),
foreign key(idCaisse) references caissier(idCaissier),
primary key(intitule)
);


/*-------------Boissons------------*/
create table Boissons
(
nom varchar(100) not null,
description varchar(100) not null,
format ENUM("gm","pm"),
prixJ int not null,
categorie ENUM("Naturel","Gazeuse","Local"),
primary key(nom)
);

/*-------------Commande------------*/
create table Commande
(
noCmd int not null,
dateCmd varchar(100) not null,
platCmde varchar(100) not null,
qPlat int not null,
jus varchar(100) not null,
nJus int not null,
primary key(noCmd),
foreign key(platCmde) references plat(intitule),
foreign key(jus) references Boissons(nom)
);

/*-------------platCommande
create table platCmd
(
nmCmd int not null,
nmPlat varchar(100) not null,
dateCmd varchar not null,
foreign key(nmCmdP) references Commande(noCmd),
foreign key(nmPlat) references plat(intitule),
primary key(nmCmd,nmPlat)
);
------------*/

/*-------------BoissonCommande
create table BsnCmd
(
nmCmd int not null,
nmJus varchar(100) not null,
dateCmd varchar not null,
foreign key(nmCmdJ) references Commande(noCmd),
foreign key(nmJus) references Boissons(nom),
primary key(nmCmd,nmJus)
);

------------*/

insert into caissier values("Ca17","Diom","Adja","GMbao",772549865,"Adja","Diom07");
)