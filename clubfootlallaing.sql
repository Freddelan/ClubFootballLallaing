create database if not exists clubfootlallaing CHARACTER SET utf8 COLLATE utf8_unicode_ci; /* j'ai aoujouté l'interclassement pour spécifier que la base utilise l'utf8 */
use clubfootlallaing;

CREATE TABLE if not exists Saison(
   Id_Saison DATE,
   PRIMARY KEY(Id_Saison)
)
Engine = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE if not exists article(
   article INT not null,
   contenue_art TEXT,
   date_ DATE,
   ref_image VARCHAR(50),
   PRIMARY KEY(article)
)
Engine = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE if not exists EQ_ident(
   Id_EQ_ident VARCHAR(50),
   EQ_nom VARCHAR(50),
   Id_Saison DATE NOT NULL,
   PRIMARY KEY(Id_EQ_ident),
   FOREIGN KEY(Id_Saison) REFERENCES Saison(Id_Saison)
)
Engine = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE if not exists Joueur(
   NUM_MAILLOT INT,
   Id_EQ_ident VARCHAR(50) NOT NULL,
   PRIMARY KEY(NUM_MAILLOT),
   FOREIGN KEY(Id_EQ_ident) REFERENCES EQ_ident(Id_EQ_ident)
)
Engine = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE if not exists Mat_ch(
   Id_Match INT,
   Jour VARCHAR(50),
   Resultat SMALLINT,
   Id_Saison DATE NOT NULL,
   Id_EQ_ident VARCHAR(50) NOT NULL,
   PRIMARY KEY(Id_Match),
   FOREIGN KEY(Id_Saison) REFERENCES Saison(Id_Saison),
   FOREIGN KEY(Id_EQ_ident) REFERENCES EQ_ident(Id_EQ_ident)
)
Engine = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE if not exists But(
   Id_But INT,
   Id_Match INT NOT NULL,
   NUM_MAILLOT INT NOT NULL,
   PRIMARY KEY(Id_But),
   FOREIGN KEY(Id_Match) REFERENCES Mat_ch(Id_Match),
   FOREIGN KEY(NUM_MAILLOT) REFERENCES Joueur(NUM_MAILLOT)
)
Engine = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE if not exists UTILISATEUR(
   ID_UTILISATEUR INT not null,
   PSEUDO_UTILISATEUR VARCHAR(50) NOT NULL,
   EMAIL_UTILISATEUR VARCHAR(100),
   ABONNE_NEWS boolean not null,
   PRIMARY KEY(ID_UTILISATEUR),
)
Engine = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;


