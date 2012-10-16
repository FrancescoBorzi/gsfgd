DROP TABLE IF EXISTS drugbank;
CREATE TABLE drugbank (
	id INT NOT NULL,
	type VARCHAR(30),
	name VARCHAR(30),
	description TEXT,
	pharmacology TEXT,
	toxicity TEXT,
	PRIMARY KEY (id)
);

DROP TABLE IF EXISTS hgnc;
CREATE TABLE hgnc (
	id INT,
	Approved_symbol TEXT,
	Approved_name TEXT,
	Status TEXT,
	Previous_symbols TEXT,
	Previous_names TEXT,
	Synonyms TEXT,
	Name_synonyms TEXT,
	Chromosome TEXT,
	Accession_numbers TEXT,
	Entrez_geneId TEXT,
	Ensembl_geneId TEXT,
	Refseq_id TEXT,
	Omim_id TEXT,
	Ucsc_id TEXT,
	PRIMARY KEY (id)
);

DROP TABLE IF EXISTS hmdd_disease;
CREATE TABLE hmdd_disease (
	mirna VARCHAR(20) NOT NULL,
	disease VARCHAR(50) NOT NULL,
	PRIMARY KEY(mirna, disease)
);

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

DROP TABLE IF EXISTS omim;
CREATE TABLE omim (
	mim VARCHAR(6) NOT NULL COMMENT '10',
	genesymbols TEXT NOT NULL COMMENT '6',
	disorders TEXT COMMENT '14 (15) (16)'
);
