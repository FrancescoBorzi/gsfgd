DROP TABLE IF EXISTS mirenviroment;
CREATE TABLE mirenviroment (
	mirnaID INT unsigned NOT NULL auto_increment,
	mirnaGene VARCHAR(20) NOT NULL,
	mirnaProduct VARCHAR(20),
	mirnaProductOriginal VARCHAR(20),
	phenotype TEXT,
	environmentalFactor TEXT,
	conditionOfEF TEXT,
	sample TEXT,
	species TEXT,
	evidence TEXT,
	pubMedID VARCHAR(8),
	PRIMARY KEY(mirnaID)
);

