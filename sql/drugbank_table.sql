-- TODO: ottimizzare la grandezza degli attributi,
-- TODO:  implementare anche i campi 'target_position' e 'target_partner' che non ho trovato
-- TODO:  discutere sul campo 'property' (vedi commenti sotto).

DROP TABLE IF EXISTS drugbank;
CREATE TABLE drugbank (
	id_drugbank VARCHAR(7) NOT NULL,
	name VARCHAR(30),
	description VARCHAR(255),
	toxicity VARCHAR(255),
	atc_code VARCHAR(7),
	action VARCHAR(20),
	pharmacology VARCHAR(255),
	formula_molecolare VARCHAR(20),
	drug_interaction VARCHAR(7),
	categories VARCHAR(50),
--	target_position NON LO TROVO!
--	target_partner NON LO TROVO!
	property VARCHAR(30),
	PRIMARY KEY (id_drugbank)
);


-- Test IMPORT singola tupla, i dati sono presi dal file che trovate nel repo: /doc/esempio_singola_drug.txt --

-- utilizzo le variabili SQL per comodità
SET @id_drugbank:='DB00001';
SET @name:='Lepirudin';
SET @description:='Lepirudin is identical to natural hirudin except for substitution of leucine for isoleucine at the N-terminal end of the molecule and the absence of a sulfate group on the tyrosine at position 63. It is produced via yeast cells.&#xD;';
SET @toxicity:='In case of overdose (eg, suggested by excessively high aPTT values) the risk of bleeding is increased.';
SET @atc_code:='B01AE02';
SET @action:='inhibitor';
SET @pharmacology:='Lepirudin is used to break up clots and to reduce thrombocytopenia. It binds to thrombin and prevents thrombus or clot formation. It is a highly potent, selective, and essentially irreversible inhibitor of thrombin and clot-bond thrombin. Lepirudin requires no cofactor for its anticoagulant action. Lepirudin is a recombinant form of hirudin, an endogenous anticoagulant found in medicinal leeches.';
SET @formula_molecolare:='C287H440N80O110S6';
SET @drug_interaction:='DB01381';
SET @categories:='Anticoagulants|Antithrombotic Agents|Fibrinolytic Agents';
#SET @target_position:=;
#SET @target_partner:=;
SET @property:='logP/hydrophobicity:0.777|Molecular Weight:6963.4250';
-- *** NOTA: per quanto concerne property, ve ne sono più di una (quindi separate da una |pipeline|)
-- *** inoltre ogni property è un doppio valore, che per il momento ho impostato a nomeproperty:value
-- *** quindi potremmo fare qualcosa del tipo 'property1:valore1|property2:valore2|ecc...'

-- query ri-eseguibile
DELETE FROM drugbank WHERE id_drugbank = @id_drugbank;
INSERT INTO drugbank VALUES
(@id_drugbank, @name, @description, @toxicity, @atc_code, @action, @pharmacology, @formula_molecolare, @drug_interaction, @categories, @property);

-- test finale
SELECT * FROM drugbank WHERE id_drugbank = @id_drugbank;
