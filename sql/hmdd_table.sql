DROP TABLE IF EXISTS hmdd_disease;
CREATE TABLE hmdd_disease (
	mirna VARCHAR(20) NOT NULL,
	disease VARCHAR(50) NOT NULL,
	PRIMARY KEY(mirna, disease)
);


