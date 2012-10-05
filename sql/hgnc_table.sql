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