CREATE TABLE vin (
  id INTEGER NOT NULL,
  cru Varchar(45) NOT NULL,
  annee INTEGER  NOT NULL,
  degre FLOAT NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE producteur (
  id INTEGER NOT NULL,
  nom Varchar(45) NOT NULL,
  prenom Varchar(45) NOT NULL,
  region Varchar(45) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE recolte (
  PRODUCTEUR_id INTEGER  NOT NULL,
  VIN_id INTEGER NOT NULL,
  quantite INTEGER NOT NULL,
  PRIMARY KEY(VIN_id, PRODUCTEUR_id),
  FOREIGN KEY(VIN_id)
    REFERENCES vin(id)
      ON DELETE CASCADE
      ON UPDATE RESTRICT,
  FOREIGN KEY(PRODUCTEUR_id)
    REFERENCES producteur(id)
      ON DELETE CASCADE
      ON UPDATE RESTRICT
);


