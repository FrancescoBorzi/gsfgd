-- DA COMPLETARE

DROP TABLE IF EXISTS hmdd;
CREATE TABLE hmdd (
	mirna VARCHAR(20) NOT NULL,
	dsw VARCHAR(20),
	conservation_group SMALLINT,
	PRIMARY KEY (mirna)
);

DROP TABLE IF EXISTS hmdd_function;
CREATE TABLE hmdd_function (
	mirna VARCHAR(20) NOT NULL,
	function VARCHAR(50) NOT NULL,
	PRIMARY KEY (mirna, function)
);

DROP TABLE IF EXISTS hmdd_disease;
CREATE TABLE hmdd_disease (
	mirna VARCHAR(20) NOT NULL,
	disease VARCHAR(50) NOT NULL,
	PRIMARY KEY(mirna, disease)
);
